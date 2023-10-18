<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="resources/icon.png">
    <style>
  
  .col-3{
  position: relative;
  padding:10px;
  overflow: hidden;
  width: 25%;

}

@media screen and (max-width: 600px) {
  .col-3{
    width: 50%;
  }
}


.col-3:hover img{
  transform: scale(1.1, 1.1);

  transition: all 2s ease-in-out;
}

.col-3:hover div {
  opacity: 1;

}
.col-3 div {
  position: absolute;
    box-sizing: border-box;
    top: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    transform: scale(1.1, 1.1);
    transition: all 0.2s ease-in;
}

.cover{
  display: flex;
  position: relative;
  top: 80%;
  left: 10%;
  height:auto;
  width:50%;

}

  
</style>
    <title>Meowoof!</title>
</head>
<body>
<!-- Navigation bar -->

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
      <div class="navbar-brands" >
        <a class="nav-link" href="{{ route('welcome') }}" ><img src="resources/logo.png" class="logo"></a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" 
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown"  style="margin-right: 40px;">
          <ul class="navbar-nav" style="display:flex; justify-content:end;">
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('pets') }}">Pets</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('petcare') }}">Pet Care</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('donate') }}" >Donate</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('review') }}" >Review</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('about') }}">About the Shelter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('faq') }}" >FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact') }}" >Contact</a>
          </li>
            <li class="nav-item">
              <div class="container">
                <div class="row">
              <div class="col-1 p-0"><img src="resources/pin.png" class="navimg"></div>
              <div class="col p-0 text-nowrap"> <a class="nav-link" data-bs-toggle="modal" data-bs-target="#mymodal">Location</a></div>
            </div>
            </div>
          </li>
          </ul>
      </div>
  </div>
</nav>


  <div class="modal" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
              <button typ="button" class="btn btn-danger btn-close" data-bs-dismiss="modal"></button>  
                
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
              <!-- Google map -->
            <div class="row">
           <div class="d-flex justify-content-center" style="margin-bottom: 100px;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1931.8297235176572!2d120.91463153770376!3d14.
          446779252897281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d2a23f40d999%3A0xa1fd6aa5ac99573d!2sBinakayan%
          0-%20Kanluran%2C%20Kawit%2C%204104%20Cavite!5e0!3m2!1sen!2sph!4v1684539420101!5m2!1sen!2sph" width="600" height="450" style="border:0;" 
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>

</div>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div> 

<br>
<!-- Header note -->
<br>
<div class=" col jumbotron jumbotron-fluid text-center">
  <div class="container ps-auto">
<h5 class="display-5 headers" style="text-align: center;">Take us home.</h5>
<br>

</div>
</div>
  <!-- photos -->
                         <?php
                            $servername = "localhost";
                            $username = "u548574294_root";
                            $password = "AAaa!!8520";
                            $database = "u548574294_laravel";
                            $connection = new mysqli($servername, $username, $password, $database);

                            if ($connection->connect_error) {
                            die("Connection failed: " . $connection->connect_error);
                            }

                      
                            $sql = "SELECT * FROM pets";
                            $result = $connection->query($sql);

                            if (!$result) {
                                die("Invalid query: " . $connection->error);
                            }
                            echo '<div class="container">';
                            echo '<div class="row">';
                            while ($row = $result->fetch_assoc()) {
                              echo '<div class="col-3">';
                              echo '<a href="'. $row['link'] .'" target="_blank" >' ;
                              echo '<img src="' . $row['pet'] . '" class="gallery">';
                              echo '<div>';
                              echo '<img src="' . $row['cover'] . '"  class="cover">';
                              echo '</div>';
                              echo '</a>';
                              echo '</div>';
                             
                            }
                              echo '</div>'; 
                              echo '<br>';
                              echo '<br>';
                              echo '<br>';
                              echo '<br>';
                              echo '<br>';
                              echo '</div>';
                            
                         $db = null;

                      ?>
          
  <div class=" col jumbotron jumbotron-fluid text-center">
      <div class="container ps-auto">
          <h5 class="display-5 headers" style="text-align: center;">How it works?</h5> <br> 
      </div>
  </div>
      <img src="resources/adoption.png"  class="steps">
      <br>
      <br>
    
<!-- Footer -->
<footer>
  <hr>
  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-12 col-md-4 order-1 order-md-0 d-flex justify-content-center mb-3 mb-md-0">
        <img src="resources/copyright.png" style="width: 12px; height: 12px;">
        <p class="text-nowrap" style="font-size: 10px;">2023 by Edmhar Alcones</p>
      </div>
      <div class="col-12 col-md-4 order-0 order-md-1 d-flex justify-content-center mb-3 mb-md-0">
        <a href="https://www.facebook.com/" target="_blank"><img src="resources/fb.png" class="socials"></a>
        <a href="https://www.tiktok.com/en/" target="_blank"><img src="resources/tiktok.png" class="socials"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="resources/ig.png" class="socials"></a>
        <a href="https://www.youtube.com//" target="_blank"><img src="resources/yt.png" class="socials"></a>
      </div>
      <div class="col-12 col-md-4 order-2 order-md-2 d-flex justify-content-center">
        <a href="{{ route('terms') }}" class="link px-2 text-nowrap" style="font-size: 10px;">Terms of Use</a>
      </div>
    </div>
  </div>
  <br>
</footer>


</body>
</html>