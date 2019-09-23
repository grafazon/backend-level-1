<?php 
include 'db.php';
include_once 'header.php';
echo '<h2>Eiliu puslapis</h2>';
echo 'Rodyti:
<a href = "query.php">Visu klientu</a> | 
<a href = "query.php?limit=5">Paskutiniu 5</a><br />
';
if ($_GET["limit"] == 5) {
    $sql = 'SELECT * FROM users WHERE reserved=0 LIMIT 5';
} else {
    $sql = 'SELECT * FROM users WHERE reserved=0 ORDER BY id';
}

$result = $conn->query($sql);
$i = 1;
if ($result->num_rows > 0) {
    // duomenu iz duomnazes nuskaitimas pagal eilutes
    while($row = $result->fetch_assoc()) {
        echo '<p>' . $i. '. ' . $row["name"]. ' ' . $row["surname"]. '</p>';
        $i++;
    }
} else {
    echo '<font color="orange">Eile tuscia</font>';
}
$conn->close();
include_once 'footer.php';
?>
