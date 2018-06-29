<?php
$con = mysqli_connect("localhost","root","","crud");
mysqli_set_charset($con,"utf8");
// Check connection
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>