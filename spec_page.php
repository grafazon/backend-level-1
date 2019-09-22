<?php 
include 'db.php';
include_once 'header.php';
if ($_GET["delete"] == 1)
{   
    $id = $_GET["id"];
    $sql = "DELETE FROM users WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $id = "";
    } else {
        echo 'Error deleting record: ' . $conn->error;
    } 
}
echo '<h2>Specialisto puslapis</h2>';
$sql = "SELECT * FROM users LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo '<h3>Dabartinis klientas:</h3>';
    // Pirmo kliento informacijos nuskaitymas is duombazes
    while($row = $result->fetch_assoc()) {
        echo '<h2><font color="#00DD00">'. $row["name"]. ' ' . $row["surname"]. '</font></h2>';
    //nuoroda istrinimui is duomazes
    echo '<a href="spec_page.php?delete=1&id='.$row["id"].'">Klientas aptarnautas </a>';  
    }
} else {
    echo 'Nera klientu';
}

$conn->close();

include_once 'footer.php';
?>