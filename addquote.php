<?php
include('credentials.php');
$naam = $_POST["naam"];
$anderenaam = $_POST["naam_anders"];
$quote = $_POST["quote"];

$quotenaam = $naam == "Anders" ? $anderenaam : $naam;

$sql = "INSERT INTO quotes (naam,quote) VALUES ('$quotenaam','$quote')";

// Create connection
$conn = new mysqli($servername, $username, $password, $table);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    die();
  }

echo "Connected successfully";
echo "<meta http-equiv=REFRESH CONTENT=0;url='quotes.php'>";
?> 