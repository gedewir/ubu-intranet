<?php
include("resturant-connect.php");

$name = $_POST['name'];
$url = $_POST['url'];
$street = $_POST['street'];
$suburb = $_POST['suburb'];
$postcode = $_POST['postcode'];
$category = $_POST['category'];

$conn->query("INSERT INTO Resturants (name, url, street, suburb, postcode, category)
              VALUES('$name','$url','$street', '$suburb','$postcode', '$category');");

$conn->close();
header("Location: ../../Perths-Resturants/");
?>
