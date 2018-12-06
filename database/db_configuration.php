<?php
$servername = "localhost";
$username = "astorrer";
$password = "aws93000";
$dbname = "autoinv";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
