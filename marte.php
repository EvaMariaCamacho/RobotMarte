<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="css/style.css">
  <title>Mars Rover</title>
</head>
<body>

<div class="container">
  <div class="h1 text-center m-4">MARS ROVER</div>

     
<form action="inicio.php" method="GET">

<div class="form-group">


       <div class="form-row align-items-center m-5">
        <div class="col-4">
           <label class="sr-only" for="inlineFormInput">Inicio X</label>
           <input type="number" class="form-control mb-2" name="inicioX" id="" placeholder="Inicio X">
        </div>
        <div class="col-4">
           <input type="number" class="form-control mb-2" name="inicioY" id="" placeholder="Inicio Y">
        </div>
        </div>
        <!-- <div class="col-4">
           <button type="submit" class="btn btn-primary mb-2">Cordenadas</button>
        </div> -->
       </div>
   
      <div class="form-row align-items-center m-5">
        <div class="col-4">
           <label class="sr-only" for="inlineFormInput">Cordenadas X</label>
           <input type="number" class="form-control mb-2" name="valueX" id="coordenadasX" placeholder="Cordenadas X">
        </div>
        <div class="col-4">
           <input type="number" class="form-control mb-2" name="valueY" id="coordenadasY" placeholder="Cordenadas Y">
        </div>
        </div>
        <!-- <div class="col-4">
           <button type="submit" class="btn btn-primary mb-2">Cordenadas</button>
        </div> -->
       </div>

     <div class="form-row align-items-center m-5">
        <div class="col-3">
            <label class="sr-only" for="inlineFormInput">Left</label>
            <input type="number" class="form-control mb-2" id="left" name="left" placeholder="Left">
        </div>
        <div class="col-3">
            <label class="sr-only" for="inlineFormInput">Right</label>
            <input type="number" class="form-control mb-2" id="right" name="right" placeholder="Right">
        </div>
        <div class="col-3">
            <label class="sr-only" for="inlineFormInput">Avanzar</label>
            <input type="number" class="form-control mb-2" id="avanzar" name="avance" placeholder="Avanzar">
        </div>
        <div class="col-3">
              <button type="submit" class="btn btn-primary mb-2">Ordenes</button>
        </div>
      </div>
</form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>