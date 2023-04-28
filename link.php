<?php
$servername = "Your Movers";
$Email = "root";
$password = "";
$dbname="Your_Movers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname(Your_Movers));

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>