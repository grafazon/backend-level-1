<?php
include 'db.php';
$spec = $_GET["spec"];
$spec_name = 'spec_'.$spec;
$sql = "SELECT * FROM users WHERE reserved=0 LIMIT 1 ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $username  = $row["name"]." ".$row["surmane"];
    }
    $sql = "INSERT INTO $spec_name (user_id, name) VALUES ('$id', '$username')";
    if (mysqli_query($conn, $sql)) {
        $sql = "UPDATE users SET reserved ='1' WHERE id='$id'";
        if ($conn->query($sql) === TRUE) {
            echo '<script>location.href="spec_page.php?spec='.$spec.'";</script>';
        } else {
            echo 'Klaida (DELETE): ' . $conn->error;
        } 
    } else {
        echo 'Klaidos: ' . $sql . '<br>' . mysqli_error($conn);
    } 
} else {
    echo '<script>location.href="spec_page.php?spec='.$spec.'&error=1";</script>';
}
?>
