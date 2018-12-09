<?php

//database/db_configuration

$servername = "localhost";
$username = "autoinv";
$password = "testpass";
$dbname = "autoinv";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
