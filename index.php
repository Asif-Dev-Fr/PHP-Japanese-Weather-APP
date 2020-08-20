<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" />

    <title>COREKARA GROUP/株式会社　これから</title>
  </head>
  <body>
    <div class="container">

      <form method="POST" action="./server.php">

        <div class="row">
          <div class="col-12 col-lg-2 label">
            <label for="PostCode">POST CODE</label>
          </div> 

          <div class="col-12 col-lg-8 input">
            <input type="text" name="PostCode" placeholder="160-0022" id="PostCode"/>
          </div>

          <div class="col-12 col-lg-2 submitButton">
            <button type="submit" class="btn btn-info "> 
                Submit 
            </button>
          </div>
        </div>
      </form>
    
    </div>

  </body>
</html>