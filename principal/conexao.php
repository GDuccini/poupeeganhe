<?php
$host="localhost";
$userbd="root";
$pass="";
$banco="poupeeganhe";
$con=mysqli_connect($host, $userbd, $pass) or die(mysqli_error($con));
mysqli_select_db($con,$banco) or die(mysqli_error($con));
?>
