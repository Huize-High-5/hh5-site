<?php
$sql = "INSERT INTO quotes (ID,naam,quote,tijd) VALUES ('$id','$naam','$quote','".time()."')";
$id = 0;
$naam = $_POST["naam"];
$quote = $_POST["quote"];

$servername = "localhost";
$username = "huizehigh5_quoteform";
$password = "~6ClA9s^)NjW";
$table = "huizehigh5_quotes";

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
  }

echo "Connected successfully";
$conn->close();
//echo "<meta http-equiv=REFRESH CONTENT=0;url='quotes.html'>";
?> 