<?php
$host="localhost";
$user="root";
$pass="";
$db="medlife";

$con=mysqli_connect($host,$user,$pass,$db);
mysqli_select_db($con,$db) or die('cannot connect');




?>