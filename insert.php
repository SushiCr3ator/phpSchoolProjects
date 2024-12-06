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

$sql = "INSERT INTO tblteile (Teilenr, Bezeichnung, Lagerbestand, Höchstbestand, Mindestbestand, LetzteLieferung, Einkaufspreis, LieferNr, Kategorie)
        VALUES (7000,'CPU',100,200,20,'06.12.2021',150,1,4)";
$result = $conn->query($sql);

if ($result === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
