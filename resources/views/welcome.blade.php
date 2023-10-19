<!DOCTYPE html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
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
@include('navbar')
@include('modal') 
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
      <a href="{{ route('pets') }}" role="button" class="btn-pets text-nowrap">View all pets</a>
    </div>
  </div>

  <!-- Donate -->
<br>
<br>

  <div id="footer" class="py-5"  >
    <div class="container text-center" >
         <h2  class="headers" style="font-weight: 600;">Can't adopt? No problem! <br> You can make an impact by supporting our cause!</h2> <br>
         <a href="{{ route('donate') }}" class="btn-tertiary" style=" padding: 0; margin: 0;"><img src="resources/donate.png" style=" display: flex; position: relative; right: 92px;"  width="250px" height="250px"></a>
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
                            $firstItem = true; 
                            while ($row = $result->fetch_assoc()) {
                                      $activeClass = $firstItem ? 'active' : '';
                              echo '<div class="carousel-item ' . $activeClass . '">';
                              echo '<img src="' . $row['photo'] . '" class="mb-4" style=" width: 330px;" alt="' . $row['name'] . '">';
                              echo '<h5>' . $row['name'] . '</h5>';
                              echo '<p>' . $row['review'] . '</p>';
                              echo '</div>';
                              $firstItem = false;
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
@include('footer') 
</body>
</html>