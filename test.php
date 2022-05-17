<?php
$servername = "ubu-sql-srv.gedewirayuda.me";
$username = "connect";
$password = "P@ssw0rd";
$dbname = "PerthsResturants";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$result = $conn->query("SELECT * FROM Resturants") or die(mysql_error());

if ($result->num_rows > 0){
  while ($row = $result->fetch_assoc()){
    echo $row['name'] . "---" . $row['street'] . "<br>";
  }
}

 ?>
