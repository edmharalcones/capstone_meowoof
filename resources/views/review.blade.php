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
 
<br/>
<!-- Review -->
<div class="col jumbotron jumbotron-fluid text-center">
    <div class="container ps-auto">
        <h5 class="display-5 headers" style="text-align: center;">Share Your Adoption Journey</h5>
        <h6  style="text-align: center;">Tell Us How We Helped! Leave a Review Today and Share Your Experience.</h6>
        <br/>
    </div>
</div>

  <!-- Review Form  -->
<div class="container-fluid">
<div class="container">

  <form target="_self" action="https://formsubmit.co/368d7c0216414d633648d293d97328ba" enctype="multipart/form-data" method="POST"> 
     <label class="form-label" for="photo">Share a pic!</label>
          <input type="file" name="photo" accept="image/png, image/jpeg" required>
          <br/>
      <label for="name" class="form-label">Your Full Name:</label>
      <input type="text" class="form-control"  name="name" required>
          <br/>
      <div class="col">
      <label for="Message" class="form-label">Message:</label>
      <textarea class="form-control" id="Message" rows="3" name="message" required></textarea>
      <div class="col" style="margin-top: 5%;">
      <button class="btn-petcare shadow-none border-0" type="submit" onclick="return checkNameForNumbers();">Send</button>
        <input type="hidden" name="_next" value="https://concertspot.online/public/review">
    
      </div>
    </form>  
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
<script>
// function for name checker
function checkNameForNumbers() {
    const inputFields = document.querySelectorAll('input[name="name"]');
    let containsMultipleNumbers = false;

    inputFields.forEach(input => {
        const nameValue = input.value;
        const numberCount = (nameValue.match(/\d/g) || []).length;

        if (numberCount > 1) {
            containsMultipleNumbers = true;
        }
    });

    if (containsMultipleNumbers) {
        alert('Please provide a valid Full Name, Not just numbers :).');
        return false;
    }

    return true;
}
</script>
</html>