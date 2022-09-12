<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1>TP 2 DE BACKEND</h1>

<?php
echo "Ejercicio 1:   ";
$n= 2;

if ( $n > 0) {

  echo "el numero $n es positivo ";
  // code...
}
else if ($n<0) {
  echo "el numero $n es negativo";
}
else {
  echo "el numero vale 0";
}
 ?>


<br><br>
 <?php
echo "Ejercicio 2:  ";
$a=12;

if ($a>1 and $a<10) {
  echo "el numero es $a, es mayor a 1 y menor a 10";
}
else {
  echo "el numero $a no se encuentra en el intervalo mayor a 1 y menor a 10";
}

  ?>

  <br><br>

  <?php
echo "Ejercicio 3:   ";
$b=7;

if ($b>10 and $b<2) {
  echo "el numero $b es mayor a 10 o menor a 2";
}
else {
  echo "el numero $b es mayor que 2 y menor que 10 ";
}

   ?>

   <br><br>

   <?php
echo "Ejercicio 4:   ";

$numero1=7;
$numero2=7;

if($numero1 > $numero2){

  echo "Suma entre $numero1 y $numero2 es:" ;
  echo $numero1+$numero2;

  echo "---Resta entre $numero1 y $numero2 es:" ;
  echo $numero1-$numero2;
}

elseif ($numero1<$numero2) {

  echo "Multiplicacion entre $numero1 y $numero2 es:" ;
  echo $numero1*$numero2;

  echo "---Division entre $numero1 y $numero2 es:" ;
  echo $numero1/$numero2;

  echo "---Resto entre $numero1 y $numero2 es:" ;
  echo $numero1%$numero2;
}
else {

echo "Los numeros ingresados son iguales";
}




    ?>
    <br>

    <?php

     ?>






  </body>
</html>
