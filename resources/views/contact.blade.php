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
<!-- Contact -->
<div class="container-fluid">
  <div class="container">
    <form target="_self" action="https://formsubmit.co/18969b8e10734503ba87448aca094626" method="POST"> 
        <label for="name" class="form-label " >Full Name:</label> <br>
        <input type="text" class="form-control" name="name" required>
        <br>
        <label for="email" class="form-label">Email Address:</label>
        <input type="email" class="form-control"  name="email" required>
         <br>
        <label for="validationPhone" class="form-label" >Phone Number:</label>
          <input type="number" class="form-control" id="validationPhone" required>     
      <br>
      <div class="col">
        <p>Subject:</p>
        <select class="form-select" name="subject">
          <option selected value="General inquiry"> General inquiry</option>
          <option value="Adoption inquiry">Adoption inquiry</option>
          <option value="Donation inquiry">Donation inquiry</option>
          <option value="Appointment">Appointment</option>
        </select>
      </div>
        <div class="col">
          <label for="Message" class="form-label">Message:</label>
          <textarea class="form-control" id="Message" rows="3" name="message" required></textarea>
        <div class="col" style="margin-top: 5%;">
          <button class="btn-petcare shadow-none border-0" type="submit" onclick="checkNameForNumbers();">Send</button>
          <input type="hidden" name="_next" value="https://concertspot.online/public/contact">
      </div>
      </form>  
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
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