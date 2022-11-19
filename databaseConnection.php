<?php
$servername = "localhost";
$database = "storage";
$username = "tech";
$password = "tech";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

echo 'Connected successfully';

$sql = "SELECT id, name FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br>";
    echo "id: " . $row["id"]. " - Name: " . $row["name"];
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>