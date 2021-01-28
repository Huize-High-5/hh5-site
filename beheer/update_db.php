<?

    // Create connection
    include('../credentials.php');
    $conn = new mysqli($servername, $username, $password, $table);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo $_GET['Tijd'];
$sql = "UPDATE quotes SET Zichtbaar = !Zichtbaar WHERE quotes.Tijd = ".$_GET['Tijd']";
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

