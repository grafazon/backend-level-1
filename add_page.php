<?php
    include 'db.php';

    if ($_POST["name"] == ""){
        echo "<script>location.href='admin.php?error=1';</script>";
    }
    else {   
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $sql = "INSERT INTO users (name, surname) VALUES ('$name', '$surname')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>location.href='admin.php?success=1';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        } 
    }

?>