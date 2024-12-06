<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pc_teile";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8mb4");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql= "DELETE FROM tbllieferer WHERE `Lief_Nr` ='8'";
$result = $conn->query($sql);

if ($result === TRUE) {
  echo "deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
