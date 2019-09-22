<?php 
include 'config.php';
include 'db.php';
$sql = 'SELECT * FROM test';
$q = $conn->query($sql);
include_once 'header.php';
echo '<h2>Eiliu puslapis</h2>';
include_once 'footer.php';
?>