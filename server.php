<?php 

echo 'Server side';

if(!empty($_POST)) {
    function callBack () {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';

        $data = $_POST['PostCode'];


        echo '<p> Voici le zip code reçu ' . $data . '</p>';
    }
    callBack();
}




?>