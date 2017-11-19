<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "root";
$databasename = "recepthemsida";

// Create connection
$conn = new mysqli($servername, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>