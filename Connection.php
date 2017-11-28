<?php

$hostname = "localhost";

$user = "root";

$password = "";

$database = "Cart";

$db = mysqli_connect($hostname,$user,$password,$database);
if (!$db) {

    die("Database connection failed: " . mysqli_error());

}




?>