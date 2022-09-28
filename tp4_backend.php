<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
$a=1;
while ($a <= 100) {
  echo "$a, ";
  $a++;// code...
}
 ?>
<br><br><br>

<?php
$b=100;
while ($b >= 1) {
  echo "$b, ";
  $b--;// code...
}
 ?>
<br><br>

<?php
$a=2;
while ($a <= 100) {
  echo "$a, ";
  $a=$a+2;// code...
}

 ?>

 <br><br>

 <?php
 $a=1;
 while ($a <= 100) {
   echo "$a, ";
   $a=$a+2;// code...
 }
  ?>
<br><br>

<?php
$a=1;
$suma=0;
do {
  echo "$suma, ";
  $suma=$suma+$a;
  $a++;

} while ($a <= 20);
 ?>

 <br><br>

 <?php
 $suma=0;
for ($i=0; $i <= 20; $i=$i+2) {
  $suma=$suma+$i;
 echo "$suma, ";
}

  ?>


  </body>
</html>
