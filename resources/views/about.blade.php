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

.col-5 img{
  width: 100%;
  height: auto;
}

@media screen and (max-width: 600px) {
  .col-5 img{
    width: 100%;
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
<br>
<!-- our ate and kuya -->

  
<div class="container px-3 d-flex justify-content-center">
  <div class="row">
    <div class="col-12 col-md-5 d-flex order-md-0">
      <img src="resources/kuyaandate.png" class="w-100">
    </div>
    <div class="col-12 col-md-7 d-flex order-md-1">
      <p class="abouttext">
        <br>
        <br>
      
        Welcome to the heartwarming story of Rose and Archie, 
        an extraordinary couple whose compassion knows no bounds.
        <br><br>
        Together, they created Meowoof, a haven for abandoned cats 
         and dogs—a place where second chances and new beginnings take flight.
        With unwavering determination, Rose and Archie transformed their 
        humble abode into an adoption shelter, a sanctuary where hope found 
        its wings.
        <br><br>
        Their mission is to provide these innocent creatures with 
        a safe and nurturing environment where they can heal and thrive until
         they find their forever families. They strive to ensure that every animal
          feels secure, comfortable, and truly cherished throughout their stay at Meowoof.
        <br><br>
        Now, as their legacy endures, Rose and Archie invite you to join their extraordinary 
        journey. Explore, learn, and join them as they create a better world—for all creatures, 
        great and small.
        <br><br>
        Together, we can make a lasting impact and build a future where 
        love knows no boundaries.
      </p>
    </div>
    
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- Footer -->
@include('components.footer') 
</body>
</html>