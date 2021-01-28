<?

    // Create connection
    include('../credentials.php');
    $conn = new mysqli($servername, $username, $password, $table);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo $_GET['ID'];
$sql = "UPDATE quotes SET Zichtbaar = Zichtbaar + 1 WHERE quotes.ID = ".$_GET['ID'];
echo $sql;
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    die();
  }

echo '<br />db aangepast <br />';
echo "<meta http-equiv=REFRESH CONTENT=0;url='index.php'>";


?>

