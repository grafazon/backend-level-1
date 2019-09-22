<?php 
include 'db.php';
include_once 'header.php';
echo '<h2>Eiliu puslapis</h2>';
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["surname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
include_once 'footer.php';
?>