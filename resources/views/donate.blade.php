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
@include('components.navbar')
@include('components.map')
<br>
<!-- Donation -->

<div class="container">
    <div class=" col jumbotron jumbotron-fluid">
        <div class="container">
          <h4 class="display-5 headers">Every donation saves lives.</h4>
        </div>
      </div>
    </div>    
    <br/>
    <br/>
    <br/>
      <div class="container">
        <div class="row">
          <div class="col-4">
        <img src="resources/GCash.png" class="donateimage">
        <h5 class="donatetext" >Donate via GCash</h5> <br/>
          <img src="resources/gcash.jpeg" class="donategcash">
        </div>
        <div class="col-4">
          <img src="resources/UB.png" class="donateimage">
          <h5 class="donatetext" >Donate via UnionBank</h5> <br/>
          <p class="donatetext2">Account Name: <br> Edmhar Alcones<br/> <br/>
          Account Number: <br/> 1234-5678-9999</p>
        </div>
        <div class="col-4">
        <img src="resources/dropoff.png" class="donateimage">
        <h5 class="donatetext" >Donate in Kind</h5> <br/>
        <p class="donatetext2">You can drop off your donations <br/> at our address below:<br/>
          ( Mon-Fri, 9 AM-5 PM )
          <br/>
          <br/>
        1 Kalayaan St. <br/>
        Binakayan-Kanluran<br/>
        Kawit, Cavite, Philippines
              </p> 
              <br/>
           

        </div>
</div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>   





<!-- Footer -->
@include('components.footer')
</body>
</html>