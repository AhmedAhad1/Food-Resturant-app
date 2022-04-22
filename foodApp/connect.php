<?php
$con = mysqli_connect('localhost','root','','fooddelivery');

  
if(!$con){
  die("connection failed".mysqli_connect_error());
}
?>