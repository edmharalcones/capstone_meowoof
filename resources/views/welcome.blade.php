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
      #header{
        position: relative;
        left: 25%;
        padding-top: 30%;
        padding-bottom: 1%;
      }


@media screen and (max-width: 600px) {
  #header{
    left: 0%;
    padding-top: 5%;
    padding-bottom: 0%;
  }
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
<!-- Quote -->
<div class="container-fluid">
  <div class="row">
      <!-- link -->
      <div class="col-12 col-md-4 d-flex order-md-0">
        <div class="col d-flex flex-column" id="header">
              <h1 style="font-weight: 700; text-align:left;" class="headers">EVERY PET DESERVES A HOME.</h1>
              <br>
             <p class="indextext" >Discover the incredible joy of finding your new best friend and creating an unbreakable bond that will warm your heart.
            <br><br> By choosing adoption, you're not just welcoming a pet into your home; you're becoming a hero, offering a second chance at life to a deserving soul.
            It's a rewarding experience that will leave an indelible paw print on your heart.
          </p>
         
 
<br>
          <div class="d-flex align-items-center justify-content-left" style="padding-top: 20px;">
            <a class="btn-secondary text-nowrap" href="{{ route('pets') }}" role="button">Adopt today!</a>
          </div>
        </div>
        
      </div>
      
      <!-- center photo -->
      <div class="col-12 col-md-7 d-flex order-md-1 justify-content-end p-0" >
          <img src="resources/center.png" class="center">
      </div>
  </div>
</div>
  <br>
  <br>
  <br>
  <br>
    <!-- featured pets -->
 
  
  <div class="container-fluid" >
    <div class="row">
      <div class="col-6 p-0" >
          <div class=" col jumbotron jumbotron-fluid text-center">
            <div class="container ps-auto">
              <h5 class="display-6 headers" >Cat of the Week</h5>
            </div>
          </div>
          <div class="col d-flex justify-content-evenly p-0">
            <img class="feature" src="resources/catoftheweek.png"/>
          </div>  
      </div>
      <div class="col-6  p-0">
        <div class=" col jumbotron jumbotron-fluid text-center">
          <div class="container ps-auto">
            <h5 class="display-6 headers" >Dog of the Week</h5>
          </div>
        </div>
          <div class="col d-flex justify-content-evenly p-0" >
            <img class="feature" src="resources/dogoftheweek.png">
            </div>
      </div>
    </div>
    <br>
    <div class="col-12  justify-content-end px-5 d-flex" >
      <a href="pets.html" role="button" class="btn-pets text-nowrap">View all pets</a>
    </div>
  </div>

  <!-- Donate -->
<br>
<br>

  <div id="footer" class="py-5"  >
    <div class="container text-center" >
         <h2  class="headers" style="font-weight: 600;">Can't adopt? No problem! <br> You can make an impact by supporting our cause!</h2> <br>
         <a href="donate.html" class="btn-tertiary" style=" padding: 0; margin: 0;"><img src="resources/donate.png" style=" display: flex; position: relative; right: 92px;"  width="250px" height="250px"></a>
       </div>
     </div>  

    <!-- Testimonials -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class=" col jumbotron jumbotron-fluid text-left" >
      <div class="container-fluid" >
        <h5 class="display-6 d-flex headers" style="position: absolute; left: 9%;" >HAPPY  CLIENTS</h5>
      </div>
    </div>
    <br>
    <br>
    <br>
    <?php
                            $servername = "localhost";
                            $username = "u548574294_root";
                            $password = "AAaa!!8520";
                            $database = "u548574294_laravel";
                            $connection = new mysqli($servername, $username, $password, $database);

                            if ($connection->connect_error) {
                            die("Connection failed: " . $connection->connect_error);
                            }

                            $sql = "SELECT * FROM reviews";
                            $result = $connection->query($sql);

                            if (!$result) {
                                die("Invalid query: " . $connection->error);
                            }
                            echo '<div id="slider" class="carousel slide carousel-dark text-center" data-interval="false">';
                            echo '<button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">';
                            echo '<span class="carousel-control-prev-icon"></span>';
                            echo '</button>';
                            echo '<button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">';
                            echo '<span class="carousel-control-next-icon"></span>';
                            echo '</button>';
                            echo '<div class="carousel-inner">';

                            while ($row = $result->fetch_assoc()) {
                              echo '<div class="carousel-item active ">';
                              echo '<img src="' . $row['photo'] . '" class="d-block" style=" width: 330px;" alt="' . $row['name'] . '">';
                              echo '<h5>' . $row['name'] . '</h5>';
                              echo '<p>' . $row['review'] . '</p>';
                              echo '</div>';
                            }
                              echo '</div>';
                         $db = null;

    ?>
    
     
<br>
<br>
          <div class="d-flex align-items-center justify-content-center" style="padding-top: 20px;">
            <a class="btn-secondary text-nowrap" href="{{ route('review') }}" role="button">Write us a review!</a>
          </div>

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
        <a href="terms.html" class="link px-2 text-nowrap" style="font-size: 10px;">Terms of Use</a>
      </div>
    </div>
  </div>
  <br>
</footer>
</body>
</html>