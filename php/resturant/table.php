<?php
include("connect.php");

$result = $conn->query("SELECT * FROM Resturants") or die(mysql_error());

if ($result->num_rows > 0){
  while ($row = $result->fetch_assoc()){
    echo "<tr>
          <td>" . $row['name'] . "</td>
          <td>" . $row['street'] . "</td>
          <td>" . $row['suburb'] . "</td>
          <td>" . $row['postcode'] . "</td>
          <td>" . $row['category'] . "</td>
          <td>
          </tr>";
  } $conn->close();
}
 ?>
