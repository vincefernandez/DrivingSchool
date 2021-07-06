<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "drivingschool";

$con = mysqli_connect($host,$user,$password,$db_name);

if(mysqli_connect_errno()){
  die("failed to connect to Database:". mysqli_connect_error());
}
?>