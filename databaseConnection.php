<?php
$servername = "localhost";
$database = "storage";
$username = "tech";
$password = "tech";

//style
body{
	background-image: url("background.jpg");
  background-repeat: no-repeat;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: 200% ;
	background-size: 200%;
	background-position: center;
  font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
  font-size: 14px;
  text-align: center;
  right: -20%;

	font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
	font-size: 14px;
	text-align: center;
	right: -20%;
	height: 100vh;
  overflow: hidden;

	overflow-y: scroll;
  overflow-x: hidden;
}


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
