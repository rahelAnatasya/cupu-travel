<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cupu_travel";

// Create connection

if (!isset($conn)) {
$conn = mysqli_connect($servername, $username, $password, $dbname);
}

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

