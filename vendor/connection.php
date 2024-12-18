<?php
// Database connection parameters
$servername = "localhost";
$username = "delphine.niyogushimirwa";
$password = "28082002";
$dbname = "webtech_fall2024_delphine_niyogushimirwa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
echo " "; 
?>