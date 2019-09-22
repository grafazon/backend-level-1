<?php 
include 'config.php';
include 'db.php';
$sql = 'SELECT * FROM test';
$q = $conn->query($sql);
include_once 'header.php';
echo '<h2>Naujo zmogo pridejimo forma</h2>';
while ($r = $q->fetch()):
    echo htmlspecialchars($r['name']);
    echo " | ";
    echo htmlspecialchars($r['id']);
    endwhile;
include_once 'footer.php';
?>