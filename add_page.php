<?php
    include 'db.php';
    //Tikrinimas, ar tuscias laukelis su vardu
    if ($_POST["name"] == ''){
        echo '<script>location.href="admin.php?error=1&surname='.$_POST["surname"].'";</script>';
    }
    //Naujo kliento saugojimas i duombaze
    else {   
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $sql = "INSERT INTO users (name, surname) VALUES ('$name', '$surname')";
        if (mysqli_query($conn, $sql)) {
            echo '<script>location.href="admin.php?success=1";</script>';
        } else {
            echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
        } 
    }

?>