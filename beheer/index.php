<?php
echo "<h2>Quotelijst database beheer dinges</h2>";

    // Create connection
    include('../credentials.php');
    $conn = new mysqli($servername, $username, $password, $table);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// create table
echo '<table>';
echo '<thead><tr><td>Wanneer</td><td>Wie</td><td>Wat</td><td>Zichtbaar?</td><td>Verwijderen</td></tr></thead>';
$sql = "SELECT * FROM quotes ORDER BY Tijd DESC";
$result = $conn->query($sql);
echo '<tbody>';
while($row = $result->fetch_assoc()) {
    echo '<tr><td>'.$row['Tijd'].'</td><td>'.$row['Naam'].'</td><td>'.$row['Quote'].'</td><td><a href="update_db.php?ID='.$row['ID'].'">'.$row['Zichtbaar'].'</a></td><td></td></tr>';
}
echo '</tbody>';
echo '</table>';
?>