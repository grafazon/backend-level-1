<?php 
include 'db.php';
include_once 'header.php';
if (!isset($_GET["spec"])){
    echo '<center>
        <a href = "spec_page.php?spec=1">Pirmo specialisto puslapis</a> | 
        <a href = "spec_page.php?spec=2">Antro specialisto puslapis</a> | 
        <a href = "spec_page.php?spec=3">Trecio specialisto puslapis</a><br />
        </center>
';
} else {
    $spec = $_GET["spec"];
    $spec_name = 'spec_'.$spec;
    if ($_GET["delete"] == 1)
    {   
        $id = $_GET["id"];
        $sql = "DELETE FROM users WHERE id=$id";
        
        if ($conn->query($sql) === TRUE) {
            $sql = "DELETE FROM $spec_name WHERE user_id=$id";
            if ($conn->query($sql) === TRUE) {
            } else {
                echo 'Klaida(DELETE): ' . $conn->error;
            }
        } else {
            echo 'Klaida(DELETE): ' . $conn->error;
        } 
    }
echo '<center><h2>Specialisto puslapis</h2></center>';
if ($_GET["error"] == 1)
{
    echo '<h3><font color="orange">Nera klientu eileje</font></h3>';
}
$sql = "SELECT * FROM users,$spec_name WHERE $spec_name.user_id = users.id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo '<h3>Dabartinis klientas:</h3>';
    // Pirmo kliento informacijos nuskaitymas is duombazes
    while($row = $result->fetch_assoc()) {
        echo '<h2><font color="#00DD00">'. $row["name"]. '</font></h2>';
    //nuoroda istrinimui is duomazes
    echo '<a href="spec_page.php?delete=1&id='.$row["user_id"].'&spec='.$spec.'">Klientas aptarnautas </a>';  
    }
} else {
    echo 'Nera kliento<br /><br />
    <a href = add_new_client.php?spec='.$spec.'>Pakviesti nauja klienta</a>
    ';
}
}
$conn->close();

include_once 'footer.php';
?>
