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
     .card{
      position: relative;
      padding:10px;
      margin: 10px;
      overflow: hidden;
}

@media screen and (max-width: 600px) {
  .card{
    width: 50%;
    height: auto;
  }
}
    </style>
    <title>Meowoof!</title>
</head>
<body>
<!-- Navigation bar -->
@include('components.navbar')
@include('components.map')
 
<br/>
<!-- Pet Care -->

<div class="container ">
  <div class="row d-flex justify-content-center">

      <div class=" col-3 py-5 card" style="width: 18rem;">
    <img src="resources/catcare.png" class="card-img" alt="...">
    <div class="body">
      <h5 class="title">General Cat Care</h5>
      <p class="text">Useful tips for new cat parents, and for those looking to brush up on their cat care skills.</p>
      <a href="https://www.aspca.org/pet-care/cat-care/general-cat-care" target="_blank" class="btn-petcare">Learn More</a>
    </div>
  </div>



  <div class=" col-3 py-5 card" style="width: 18rem;">
    <img src="resources/dogcare.png" class="card-img" alt="...">
    <div class="body">
      <h5 class="title">General Dog Care</h5>
      <p class="text">It's important to keep your canine companion's health and happiness a top priority.</p>
      <a href="https://www.aspca.org/pet-care/dog-care/general-dog-care" target="_blank" class="btn-petcare">Learn More</a>
    </div>
  </div>



  <div class=" col-3 py-5 card" style="width: 18rem;">
    <img src="resources/catvax.png" class="card-img" alt="...">
    <div class="body">
      <h5 class="title">Cat Vaccinations</h5>
      <p class="text">The importance of vaccinations to the overall health and longevity of your cat cannot be understated.</p>
      <a href="https://www.rauanimalhospital.com/services/cats/vaccinations"  target="_blank" class="btn-petcare">Learn More</a>
    </div>
  </div>



  <div class=" col-3 py-5 card" style="width: 18rem;">
    <img src="resources/dogvax.png" class="card-img" alt="...">
    <div class="body">
      <h5 class="title">Dog Vaccinations</h5>
      <p class="text">Veterinarians recommend certain vaccines for all dogs, while others are used more selectively.</p>
      <a href="https://vcahospitals.com/know-your-pet/vaccines-for-dogs" target="_blank" class="btn-petcare">Learn More</a>
    </div>
  </div>



    <div class=" col-3 py-5 card" style="width: 18rem;">
    <img src="resources/spayneuter.png" class="card-img" alt="...">
    <div class="body">
      <h5 class="title">Spaying and Neutering</h5>
      <p class="text">Early spaying of female dogs and cats can help protect them from some serious health problems.</p>
      <a href="https://www.avma.org/resources/pet-owners/petcare/spaying-and-neutering" target="_blank" class="btn-petcare">Learn More</a>
    </div>
  </div>




    <div class=" col-3 py-5 card" style="width: 18rem;">
    <img src="resources/dogexercise.png" class="card-img" alt="...">
    <div class="body">
      <h5 class="title">Dog Exercise</h5>
      <p class="text">Keeping your dog active and well-exercised does more than keeping your pet in shape.</p>
      <a href="https://www.purina.co.uk/articles/dogs/health/exercise/exercising-to-stay-healthy" target="_blank" class="btn-petcare">Learn More</a>
    </div>
  </div>



    <div class=" col-3 py-5 card" style="width: 18rem;">
    <img src="resources/catdiet.png" class="card-img" alt="...">
    <div class="body">
      <h5 class="title">Best Diet for Cats</h5>
      <p class="text">Instead of sweating over the ingredient list, pay attention to the nutrients in your cat food.</p>
      <a href="https://www.rd.com/list/best-diet-for-cats/" target="_blank" class="btn-petcare">Learn More</a>
    </div>
  </div>



    <div class=" col-3 py-5 card" style="width: 18rem;">
    <img src="resources/dogdiet.png" class="card-img" alt="...">
    <div class="body">
      <h5 class="title">Best Diet for Dogs</h5>
      <p class="text">A high-quality diet, after all, is key to helping your dog live longer and healthier.</p>
      <a href="https://www.rd.com/list/best-diet-for-dogs-according-to-vets/" target="_blank" class="btn-petcare">Learn More</a>
    </div>
  </div>



</div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>

      <!-- Footer -->
      @include('components.footer')
   
   </body>
   </html>