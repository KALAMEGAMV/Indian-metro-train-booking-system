<?php
$hostname  = 'localhost';
$username = 'root';
$password='';
$dbname = 'trains';
$connect =  mysqli_connect($hostname , $username , $password ,$dbname) or die("Error Connecting");
?>