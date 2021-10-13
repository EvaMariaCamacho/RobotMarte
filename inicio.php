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

<form>


   <?php
        $inicioX=$_GET["inicioX"];
        $inicioY=$_GET["inicioY"];
        $valueX = $_GET ["valueX"];
        $valueY = $_GET ["valueY"];
        $left = $_GET["left"];
        $right = $_GET["right"];
        $avance = $_GET["avance"];
    ?>



    <div class="h2 m-5 text-center">Coordenadas establecida para aterrizaje</div>

    <div class="form-group row m-3">
        <label class="col-sm-2 col-form-label">Incicio X</label>
            <div class="col-sm-4">
              <input type="number" readonly class="form-control" id="" value="<?php echo $inicioX ?>">
            </div>
        <label class="col-sm-2 col-form-label">Solicitud X</label>
            <div class="col-sm-4">
              <input type="number" readonly class="form-control" id="" value="<?php echo $valueX ?>">
            </div>
        
    </div>

    <div class="form-group row m-3">
        
        <label class="col-sm-2 col-form-label bg-primary">Coodernadas X</label>
            <div class="col-sm-4">
              <input type="number" readonly class="form-control" id="" value="<?php echo $valuePosX = ($valueX + $inicioX) ?>">
            </div>
    </div>

    <div class="form-group row m-3">

        <label class="col-sm-2 col-form-label">Inicio Y </label>
            <div class="col-sm-4">
              <input type="number" readonly class="form-control" id="" value="<?php echo $inicioY ?>">
            </div>
        <label class="col-sm-2 col-form-label">Solicitud Y</label>
            <div class="col-sm-4">
              <input type="number" readonly class="form-control" id="" value="<?php echo $valueY ?>">
            </div>
    </div>

    <div class="form-group row m-3">

        <label class="col-sm-2 col-form-label bg-primary">Coodernadas Y</label>
            <div class="col-sm-4">
              <input type="number" readonly class="form-control" id="" value="<?php echo $valuePosY = ($valueY + $inicioY ) ?>">
            </div>
    </div>

    <div class="form-group row m-3">
        <label class="col-sm-2 col-form-label">Left</label>
              <div class="col-sm-4">
                <input type="number" readonly class="form-control" id="" value="<?php echo $left ?>">
              </div>
        <label class="col-sm-2 col-form-label">Right</label>
              <div class="col-sm-4">
                <input type="number" readonly class="form-control" id="" value="<?php echo $right ?>">
              </div>
    </div>

    <div class="form-group row m-3">
        <label class="col-sm-2 col-form-label">Avance</label>
              <div class="col-sm-4">
                <input type="number" readonly class="form-control" id="" value="<?php echo $avance ?>">
              </div>
    </div>

   <div class="h2 m-5 text-center">Autorizan al aterrizaje del ROBOT</div>

    <div class="form-group row m-3">
        <label class="col-sm-2 col-form-label">Cordenadas Final X</label>
            <div class="col-sm-4">
              <input type="number" readonly class="form-control" id="" value="<?php echo $coordFinalX = ($valuePosX + $right - $left);?>">
            </div>
        <label class="col-sm-2 col-form-label">Coodernadas Final Y</label>
            <div class="col-sm-4">
              <input type="number" readonly class="form-control" id="" value="<?php echo $coordFinalY = ($valuePosY + $avance); ?>">
            </div>
    </div>
    <div class="h2 text-center m-5 bg-primary">
    <?php 

            if($coordFinalX <=10 && $coordFinalY <=10){
                echo "Puede aterrizar";
             }

            else{
                 echo "No tiene permiso";
                }
        ?>
        
    </div>


  <p style="text-align: center">NORTH</p>
  <p style="position:fixed; top:50%; Left:5%;">WEST</p>
  <p style="position:fixed; top:50%; Right:5%;">EAST</p>


  <div class="col-3">
   
  </div>


    <div class="row row0">


        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 0 && $coordFinalY === 9){echo "ROBOT";} else{echo null;}?>" placeholder="0,9">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 1 && $coordFinalY === 9){echo "ROBOT";} else{echo null;}?>" placeholder="1,9">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 2 && $coordFinalY === 9){echo "ROBOT";} else{echo null;}?>" placeholder="2,9">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 3 && $coordFinalY === 9){echo "ROBOT";} else{echo null;}?>" placeholder="3,9">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 4 && $coordFinalY === 9){echo "ROBOT";} else{echo null;}?>" placeholder="4,9">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 5 && $coordFinalY === 9){echo "ROBOT";} else{echo null;}?>" placeholder="5,9">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 6 && $coordFinalY === 9){echo "ROBOT";} else{echo null;}?>" placeholder="6,9">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 7 && $coordFinalY === 9){echo "ROBOT";} else{echo null;}?>" placeholder="7,9">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 8 && $coordFinalY === 9){echo "ROBOT";} else{echo null;}?>" placeholder="8,9">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 9 && $coordFinalY === 9){echo "ROBOT";} else{echo null;}?>" placeholder="9,9">

    </div>

    <div class="row row1">

        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 0 && $coordFinalY === 8){echo "ROBOT";} else{echo null;}?>" placeholder="0,8">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 1 && $coordFinalY === 8){echo "ROBOT";} else{echo null;}?>" placeholder="1,8">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 2 && $coordFinalY === 8){echo "ROBOT";} else{echo null;}?>" placeholder="2,8">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 3 && $coordFinalY === 8){echo "ROBOT";} else{echo null;}?>" placeholder="3,8">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 4 && $coordFinalY === 8){echo "ROBOT";} else{echo null;}?>" placeholder="4,8">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 5 && $coordFinalY === 8){echo "ROBOT";} else{echo null;}?>" placeholder="5,8">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 6 && $coordFinalY === 8){echo "ROBOT";} else{echo null;}?>"" placeholder="6,8">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 7 && $coordFinalY === 8){echo "ROBOT";} else{echo null;}?>" placeholder="7,8">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 8 && $coordFinalY === 8){echo "ROBOT";} else{echo null;}?>" placeholder="8,8">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 9 && $coordFinalY === 8){echo "ROBOT";} else{echo null;}?>" placeholder="9,8">

    </div>

    <div class="row row2">

        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 0 && $coordFinalY === 7){echo "ROBOT";} else{echo null;}?>" placeholder="0,7">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 1 && $coordFinalY === 7){echo "ROBOT";} else{echo null;}?>" placeholder="1,7">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 2 && $coordFinalY === 7){echo "ROBOT";} else{echo null;}?>" placeholder="2,7">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 3 && $coordFinalY === 7){echo "ROBOT";} else{echo null;}?>" placeholder="3,7">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 4 && $coordFinalY === 7){echo "ROBOT";} else{echo null;}?>" placeholder="4,7">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 5 && $coordFinalY === 7){echo "ROBOT";} else{echo null;}?>" placeholder="5,7">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 6 && $coordFinalY === 7){echo "ROBOT";} else{echo null;}?>" placeholder="6,7">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 7 && $coordFinalY === 7){echo "ROBOT";} else{echo null;}?>" placeholder="7,7">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 8 && $coordFinalY === 7){echo "ROBOT";} else{echo null;}?>" placeholder="8,7">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 9 && $coordFinalY === 7){echo "ROBOT";} else{echo null;}?>" placeholder="9,7">
      
    </div>

    <div class="row row3">

        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 0 && $coordFinalY === 6){echo "ROBOT";} else{echo null;}?>" placeholder="0,6">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 1 && $coordFinalY === 6){echo "ROBOT";} else{echo null;}?>" placeholder="1,6">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 2 && $coordFinalY === 6){echo "ROBOT";} else{echo null;}?>" placeholder="2,6">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 3 && $coordFinalY === 6){echo "ROBOT";} else{echo null;}?>" placeholder="3,6">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 4 && $coordFinalY === 6){echo "ROBOT";} else{echo null;}?>" placeholder="4,6">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 5 && $coordFinalY === 6){echo "ROBOT";} else{echo null;}?>" placeholder="5,6">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 6 && $coordFinalY === 6){echo "ROBOT";} else{echo null;}?>" placeholder="6,6">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 7 && $coordFinalY === 6){echo "ROBOT";} else{echo null;}?>" placeholder="7,6">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 8 && $coordFinalY === 6){echo "ROBOT";} else{echo null;}?>" placeholder="8,6">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 9 && $coordFinalY === 6){echo "ROBOT";} else{echo null;}?>" placeholder="9,6">

    </div>

    <div class="row row4">
    
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 0 && $coordFinalY === 5){echo "ROBOT";} else{echo null;}?>" placeholder="0,5">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 1 && $coordFinalY === 5){echo "ROBOT";} else{echo null;}?>" placeholder="1,5">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 2 && $coordFinalY === 5){echo "ROBOT";} else{echo null;}?>"placeholder="2,5">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 3 && $coordFinalY === 5){echo "ROBOT";} else{echo null;}?>" placeholder="3,5">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 4 && $coordFinalY === 5){echo "ROBOT";} else{echo null;}?>"placeholder="4,5">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 5 && $coordFinalY === 5){echo "ROBOT";} else{echo null;}?>" placeholder="5,5">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 6 && $coordFinalY === 5){echo "ROBOT";} else{echo null;}?>" placeholder="6,5">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 7 && $coordFinalY === 5){echo "ROBOT";} else{echo null;}?>" placeholder="7,5">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 8 && $coordFinalY === 5){echo "ROBOT";} else{echo null;}?>" placeholder="8,5">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 9 && $coordFinalY === 5){echo "ROBOT";} else{echo null;}?>" placeholder="9,5">

    </div>

    <div class="row row5">

        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 0 && $coordFinalY === 4){echo "ROBOT";} else{echo null;}?>" placeholder="0,4">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 1 && $coordFinalY === 4){echo "ROBOT";} else{echo null;}?>" placeholder="1,4">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 2 && $coordFinalY === 4){echo "ROBOT";} else{echo null;}?>" placeholder="2,4">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 3 && $coordFinalY === 4){echo "ROBOT";} else{echo null;}?>" placeholder="3,4">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 4 && $coordFinalY === 4){echo "ROBOT";} else{echo null;}?>" placeholder="4,4">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 5 && $coordFinalY === 4){echo "ROBOT";} else{echo null;}?>" placeholder="5,4">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 6 && $coordFinalY === 4){echo "ROBOT";} else{echo null;}?>" placeholder="6,4">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 7 && $coordFinalY === 4){echo "ROBOT";} else{echo null;}?>" placeholder="7,4">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 8 && $coordFinalY === 4){echo "ROBOT";} else{echo null;}?>" placeholder="8,4">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 9 && $coordFinalY === 4){echo "ROBOT";} else{echo null;}?>" placeholder="9,4">

    </div>

    <div class="row row6">

        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 0 && $coordFinalY === 3){echo "ROBOT";} else{echo null;}?>" placeholder="0,3">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 1 && $coordFinalY === 3){echo "ROBOT";} else{echo null;}?>" placeholder="1,3">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 2 && $coordFinalY === 3){echo "ROBOT";} else{echo null;}?>" placeholder="2,3">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 3 && $coordFinalY === 3){echo "ROBOT";} else{echo null;}?>" placeholder="3,3">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 4 && $coordFinalY === 3){echo "ROBOT";} else{echo null;}?>" placeholder="4,3">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 5 && $coordFinalY === 3){echo "ROBOT";} else{echo null;}?>" placeholder="5,3">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 6 && $coordFinalY === 3){echo "ROBOT";} else{echo null;}?>" placeholder="6,3">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 7 && $coordFinalY === 3){echo "ROBOT";} else{echo null;}?>" placeholder="7,3">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 8 && $coordFinalY === 3){echo "ROBOT";} else{echo null;}?>" placeholder="8,3">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 9 && $coordFinalY === 3){echo "ROBOT";} else{echo null;}?>" placeholder="9,3">

    </div>

    <div class="row row7">

        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 0 && $coordFinalY === 2){echo "ROBOT";} else{echo null;}?>" placeholder="0,2">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 1 && $coordFinalY === 2){echo "ROBOT";} else{echo null;}?>"  placeholder="1,2">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 2 && $coordFinalY === 2){echo "ROBOT";} else{echo null;}?>"  placeholder="2,2">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 3 && $coordFinalY === 2){echo "ROBOT";} else{echo null;}?>"  placeholder="3,2">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 4 && $coordFinalY === 2){echo "ROBOT";} else{echo null;}?>"  placeholder="4,2">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 5 && $coordFinalY === 2){echo "ROBOT";} else{echo null;}?>"  placeholder="5,2">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 6 && $coordFinalY === 2){echo "ROBOT";} else{echo null;}?>"  placeholder="6,2">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 7 && $coordFinalY === 2){echo "ROBOT";} else{echo null;}?>"  placeholder="7,2">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 8 && $coordFinalY === 2){echo "ROBOT";} else{echo null;}?>"  placeholder="8,2">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 9 && $coordFinalY === 2){echo "ROBOT";} else{echo null;}?>"  placeholder="9,2">

    </div>

    <div class="row row8">

        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 0 && $coordFinalY === 1){echo "ROBOT";} else{echo null;}?>"  placeholder="0,1">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 1 && $coordFinalY === 1){echo "ROBOT";} else{echo null;}?>" placeholder="1,1">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 2 && $coordFinalY === 1){echo "ROBOT";} else{echo null;}?>" placeholder="2,1">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 3 && $coordFinalY === 1){echo "ROBOT";} else{echo null;}?>"placeholder="3,1">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 4 && $coordFinalY === 1){echo "ROBOT";} else{echo null;}?>" placeholder="4,1">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 5 && $coordFinalY === 1){echo "ROBOT";} else{echo null;}?>" placeholder="5,1">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 6 && $coordFinalY === 1){echo "ROBOT";} else{echo null;}?>" placeholder="6,1">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 7 && $coordFinalY === 1){echo "ROBOT";} else{echo null;}?>" placeholder="7,1">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 8 && $coordFinalY === 1){echo "ROBOT";} else{echo null;}?>" placeholder="8,1">
        <input type="text" class="form-control col-1" id="" value="<?php if($coordFinalX === 9 && $coordFinalY === 1){echo "ROBOT";} else{echo null;}?>" placeholder="9,1">


    </div>

    <div class="row row9">

        <input type="text" class="form-control col-1" id="" value="0,0" placeholder="0,0">
        <input type="text" class="form-control col-1" id="" value="1,0" placeholder="1,0">
        <input type="text" class="form-control col-1" id="" value="2,0" placeholder="2,0">
        <input type="text" class="form-control col-1" id="" value="3,0" placeholder="3,0">
        <input type="text" class="form-control col-1" id="" value="4,0" placeholder="4,0">
        <input type="text" class="form-control col-1" id="" value="5,0" placeholder="5,0">
        <input type="text" class="form-control col-1" id="" value="6,0" placeholder="6,0">
        <input type="text" class="form-control col-1" id="" value="7,0" placeholder="7,0">
        <input type="text" class="form-control col-1" id="" value="8,0" placeholder="8,0">
        <input type="text" class="form-control col-1" id="" value="9,0" placeholder="9,0">

    </div>
</form>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>






















