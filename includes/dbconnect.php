<?php
$servername = "localhost";
$username = "root";
$dbname= "customerreviews";
$password="";

// Create connection
$conn = new mysqli($servername, $username, $dbname, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
/* echo "Connected successfully"; */
?>