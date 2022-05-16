<?php
$servername = "ubu-sql-srv.gedewirayuda.me";
$username = "connect";
$password = "P@ssw0rd";
$dbname = "PerthsResturants";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
} echo "Connected successfully";
?>
