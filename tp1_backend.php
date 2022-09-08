<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Hola Mundo</h1>
<br>
    <?php
    $Saludo = "Hola Mundo";
    echo $Saludo;
 ?>
<br>
    <?php

    $variable1 = 4;
    $variable2 = 2;
    echo "variable 1:";
    echo $variable1;

 ?>
<br>
<?php
echo "variable 2:";
echo $variable2;
 ?>
 <br>
 <?php
echo "suma:";
 echo $variable1 + $variable2 ;
  ?>
<br>
 <?php
echo "resta:";
     echo $variable1 - $variable2 ;
 ?>

<br>
 <?php
echo "multiplicacion:";
     echo $variable1 * $variable2 ;
?>
<br>
 <?php
echo "division entera";
   echo $variable1 / $variable2 ;
 ?>
 <br>
 <?php
 echo "resto:";
 echo $variable1 % $variable2;

  ?>
  <br>

  <?php
$celsius = 20;
$farenheit = $celsius*1.8+32;
echo "temperatura en farenheit: ";
echo $farenheit;
   ?>
<br>
<?php
  $base = 18;
  $altura =12;
  echo "Perimetro Rectangulo:"  ;
  echo $base*2 + $altura*2;
 ?>
<br>
 <?php
 $radio=30;
 $areacirculo=pi()*$radio**2;
 echo "area del circulo: ";
 echo $areacirculo;
  ?>
  <br>
  <?php
$perimetrocirculo= 2*pi()*$radio;
echo "perimetro del circulo: ";
echo $perimetrocirculo;
   ?>

  </body>
</html>
