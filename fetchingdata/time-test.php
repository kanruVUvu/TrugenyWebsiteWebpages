<?php
$servername = "localhost";
$username = "root";
$password = "dtoGNTe5@4";
$dbname = "test";


$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT availabletime FROM timingavailability";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " Slots: " . $row["availabletime"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();


?>