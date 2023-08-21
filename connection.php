<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce_db";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if(!$conn){
die("Couldn't connect");
}

?>
