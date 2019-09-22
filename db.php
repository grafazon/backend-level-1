<?php 
include 'config.php';
// Prisijungimas prie duombazes 
$conn = new mysqli($config['DB_HOST'], $config['DB_USERNAME'], $config['DB_PASSWORD'], $config['DB_DATABASE']);

// Prisijungimo prie duombazes tikrinimas
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

?>