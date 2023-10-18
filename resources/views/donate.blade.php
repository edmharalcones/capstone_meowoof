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
   
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
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
<!-- Form -->

<div class="container">
    <div class=" col jumbotron jumbotron-fluid">
        <div class="container">
          <h4 class="display-5 headers">Every donation saves lives.</h4>
        </div>
      </div>
    </div>    
      <br>
      <br>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-4">
        <img src="resources/GCash.png" class="donateimage">
        <h5 class="donatetext" >Donate via GCash</h5> <br>
          <img src="resources/gcash.jpeg" class="donategcash">
        </div>
        <div class="col-4">
          <img src="resources/UB.png" class="donateimage">
          <h5 class="donatetext" >Donate via UnionBank</h5> <br>
          <p class="donatetext2">Account Name: <br> Edmhar Alcones<br> <br>
          Account Number: <br> 1234-5678-9999</p>
        </div>
        <div class="col-4">
        <img src="resources/dropoff.png" class="donateimage">
        <h5 class="donatetext" >Donate in Kind</h5> <br>
        <p class="donatetext2">You can drop off your donations <br> at our address below:<br>
          ( Mon-Fri, 9 AM-5 PM )
             <br>
             <br>
        1 Kalayaan St. <br>
        Binakayan-Kanluran<br>
        Kawit, Cavite, Philippines
              </p> 
          <br>
           

        </div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
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