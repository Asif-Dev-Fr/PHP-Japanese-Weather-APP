<?php 

echo 'Server side';

if(!empty($_POST)) {
    function callBack () {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';

        $data1 = $_POST['PostCode'];


        echo '<p> Voici le zip code reçu ' . $data1 . '</p>';
        /* */

        function curl($url) {
        
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
            $data = curl_exec($ch);
            curl_close($ch);

            return $data;
        } 

    if ($_POST['PostCode']) {

        $weatherApiKey = getenv("WEATHER_API_KEY");
        echo $weatherApiKey;
        
        $urlContents = curl("http://api.openweathermap.org/data/2.5/weather?q=".$_POST['PostCode']."&type=accurate&appid=e50053895b5be0faf292890605b626ee");
        
        $weatherArray = json_decode($urlContents, true);
        
        $weather = "The weather in ".$_POST['PostCode']." is currently ".$weatherArray['weather'][0]['description'].".";
        
        $tempInFahrenheit = intval($weatherArray['main']['temp']* 9/5 - 459.67);
        
        $speedInMPH = intval($weatherArray['wind']['speed']*2.24);
        
        $weather .=" The temperature is ".$tempInFahrenheit."&deg; F with a wind speed of ".$speedInMPH." MPH.";

        echo $weather;

        $urlContents2 = curl("http://api.openweathermap.org/data/2.5/forecast?zip=160-0022,jp&appid=");

        echo '<pre>';
        print_r($urlContents2);
        echo '</pre>';

        $weatherArray2 = json_decode($urlContents, true);
        var_dump($weatherArray2);
        echo '<br/><br/>';
        echo 'Les prévisions est ' . $weatherArray2['main']["temp"] . ' à ' . $weatherArray2["name"] ;
        

        
    }

        
    }
    callBack();
}




?>

<script> 
const retrieveData = async() => {
    const response = await fetch('http://api.openweathermap.org/data/2.5/forecast?zip=160-0022,jp&appid=');
    const data = await response.json();
    console.log(data);
    console.log(data['city']['name']);
}

retrieveData();

</script>