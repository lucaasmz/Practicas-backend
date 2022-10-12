<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
$valor=0;
$pares=["0","2","4","6","8","10","12","14","16","18"];
foreach($pares as $valor){
  print "<p>$valor</p>\n";
}

 ?>
<br>

<?php
$matriz=["Pedro","Ana","34","1"];

print_r($matriz);

 ?>

 <br><br>

 <?php

$asociativo=['Nombre'=> "Pedro", 'Apellido'=>"Torres", 'Direccion'=>"Av.Mayor 3703", 'Telefono'=>1122334455];
print_r($asociativo);

  ?>

  <br><br>
<?php
$ciudades=["Madrid","Barcelona","Londres", "New York","Los Angeles", "Chicago"];
foreach ($ciudades as $key => $value) {
  print("La ciudad con el indice $key es $value, "); }
 ?>

 <br><br>

 <?php
$ciudad=["MD"=>"Madrid","BCL"=>"Barcelona","LD"=>"Londres","NY"=>"New York","LA"=>"Los Angeles","CCG"=>"Chicago"];

foreach ($ciudad as $key => $value) {

  print(" El indice de $value es $key.");
}
  ?>


  </body>
</html>
