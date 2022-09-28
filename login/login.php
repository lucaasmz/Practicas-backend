<?php
$usuario=$_POST ["user"];
$pass=$_POST ["password"];

$ckuser= "admin";
$ckpass= "1234";

if ($usuario==$ckuser and $pass==$ckpass) {
  header ("location:http://www.ole.com.ar/");
  // code...
}

else {
echo " user $ckuser y pass $ckpass";
header("location:error.html");
}


 ?>
