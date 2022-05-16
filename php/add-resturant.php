<?php
$name = $_POST['name'];
$street = $_POST['street'];
$suburb = $_POST['suburb'];
$postcode = $_POST['postcode'];
$category = $_POST['category'];

$servername = "ubu-sql-srv.gedewirayuda.me";
$username = "connect";
$password = "P@ssw0rd";
$dbname = "PerthsResturants";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
  die("Connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO Resturants (name, street, suburb, postcode, category)
        VALUES ('$name', '$street', '$suburb', '$postcode', 'category')";

  if ($conn->query($sql) === TRUE){
    header("../php/Perths-Resturants/thank-you")
    else{
    echo "<p>an error occured</p>";
    }
  }

$conn->close();
?>
