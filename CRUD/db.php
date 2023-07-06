<?php
$servername = "localhost";
$username ="root";
$pass ="";
$db ="balu";
// Create connection
$conn = mysqli_connect($servername, $username, $pass, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";






?>