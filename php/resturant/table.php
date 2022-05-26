<?php
//include script connection to MySQL DB
include("resturant-connect.php");

$result = $conn->query("SELECT * FROM Resturants") or die(mysql_error());

if ($result->num_rows > 0){
  while ($row = $result->fetch_assoc()){
    if ($row['url'] > 0){
    echo "<tr>
          <td><a href='".$row['url']. "' target='_blank'>". $row['name'] . "</a></td>
          <td>" . $row['street'] . "</td>
          <td>" . $row['suburb'] . "</td>
          <td>" . $row['postcode'] . "</td>
          <td>" . $row['category'] . "</td>
          <td>
          </tr>";} else {
            echo "<tr>
                  <td>". $row['name'] . "</a></td>
                  <td>" . $row['street'] . "</td>
                  <td>" . $row['suburb'] . "</td>
                  <td>" . $row['postcode'] . "</td>
                  <td>" . $row['category'] . "</td>
                  <td>
                  </tr>";
          }
  } $conn->close();
}
 ?>
