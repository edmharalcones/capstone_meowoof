<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="resources/icon.png">
    <title>Meowoof!</title>
</head>
<body>
<!-- Navigation bar -->

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
      <div class="navbar-brands" >
        <a class="nav-link" href="index.html" ><img src="resources/logo.png" class="logo"></a>
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
<!-- FAQ -->
<br>
<div class="col jumbotron jumbotron-fluid text-center">
    <div class="container ps-auto">
        <h5 class="display-5 headers" style="text-align: center;">Frequently Asked Questions</h5>
        <br>
    </div>
</div>

<div class="container">
    <div class="accordion accordion-flush custom-accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
           <strong> How do I adopt a pet?</strong>
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            To adopt a pet, follow these steps: choose your future pet, email us to schedule an appointment,
             meet the pet you love, fill out the adoption forms, and take your new pet home.

        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <strong>What is the adoption fee for a pet?</strong>
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            The adoption fee for cats is P500, and for dogs, it's P1000. This fee covers your pet's 
            spay/neuter surgery, vaccinations, and tick+flea treatment.

        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <strong>Are the pets at the shelter spayed/neutered?</strong>
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            Yes, all our pets are spayed/neutered to ensure their health and promote responsible pet ownership.
        </div>
      </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <strong>Can I adopt a specific breed or type of pet?</strong>
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            While we rarely have purebred cats or dogs, we occasionally have specific breeds available. However,
             we encourage you to have an open mind and consider adopting 
            based on personality and compatibility rather than breed alone.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        <strong> Can I return my adopted pet if I change my mind?</strong>
          </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            If you find yourself unable to keep your adopted pet, we kindly request that 
            you return them to us. We will then find another loving home for them.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingSix">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        <strong> Can I visit the shelter to meet the pets before deciding to adopt?</strong>
          </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Absolutely! We highly encourage potential adopters to visit our shelter and spend time with the pets. 
            It allows you to interact 
            with them, observe their behavior, and see if you form a connection. 
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingSeven">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
        <strong>Can I adopt more than one pet?</strong>
          </button>
        </h2>
        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Yes, you can adopt more than one pet, especially if the pets you wish to adopt belong to a bonded pair. 
            We believe in promoting the happiness and well-being of our pets and will guide you through the process 
            of adopting multiple pets.

          </div>
        </div>
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
        <a href="terms.html" class="link px-2 text-nowrap" style="font-size: 10px;">Terms of Use</a>
      </div>
    </div>
  </div>
  <br>
</footer>
</body>
</html>