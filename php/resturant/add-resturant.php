<?php
include("connect.php");

$name = $_POST['name'];
$street = $_POST['street'];
$suburb = $_POST['suburb'];
$postcode = $_POST['postcode'];
$category = $_POST['category'];

$conn->query("INSERT INTO Resturants (name, street, suburb, postcode, category)
              VALUES('$name','$street', '$suburb','$postcode', '$category');");

$conn->close();
header("Location: ../../Perths-Resturants/");
?>
