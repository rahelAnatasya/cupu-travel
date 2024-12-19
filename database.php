<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cupu_travel";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);
// if (!isset($conn)) {
// }

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

