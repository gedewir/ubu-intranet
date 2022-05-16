<?php
//details of database server
$servername = "ubu-sql-srv.gedewirayuda.me";
$username = "connect";
$password = "P@ssw0rd";
$dbname = "PerthsResturants";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_POST['name'];
$street = $_POST['street'];
$suburb = $_POST['suburb'];
$postcode = $_POST['postcode'];
$category = $_POST['category'];

$conn->query("INSERT INTO Resturants (name, street, suburb, postcode, category)
              VALUES('$name','$street', '$suburb','$postcode', '$category');");

$conn->close();
header("Location: ../Perths-Resturants/thank-you");
?>
