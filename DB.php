<?php
$server_name="127.0.0.1:3308";
$username="root";
$password="";
$database_name="Registration";



// Create connection
$conn = new mysqli($server_name, $username, $password,$database_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>