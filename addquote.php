<?php
$table = "huizehigh5_quotes";
//$sql = mysqli_query($db,"INSERT INTO quotes (ID,naam,quote,tijd) VALUES ('$id','$naam','$quote','".time()."')");
$id = 0;
$naam = $_POST["naam"];
$quote = $_POST["quote"];

$servername = "localhost";
$username = "huizehigh5_quoteform";
$password = "~6ClA9s^)NjW";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
//echo "<meta http-equiv=REFRESH CONTENT=0;url='quotes'>";
?> 