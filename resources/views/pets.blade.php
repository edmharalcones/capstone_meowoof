<!DOCTYPE html>
    <head>
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
@include('components.navbar')
@include('components.map')

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
@include('components.footer')
</body>
</html>