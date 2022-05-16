<?php
$servername = "ubu-sql-srv.gedewirayuda.me";
$username = "connect";
$password = "P@ssw0rd";
$dbname = "PerthsResturants";
$table = "Resturants"

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_errorno){
  echo "failed to connet: ". $conn->connect_error;
  exit();
} echo "successful";

$conn->close();

 ?>
