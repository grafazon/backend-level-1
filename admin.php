<?php 
include 'db.php';
include_once 'header.php';
//Klientu registravimo formos
echo '<h2>Naujo kliento registravimo forma</h2>';
//Kliento registracjos standartine forma
//Pranesimas del neivesto vardo
if ($_GET["error"] == 1){
    echo '
    <form action="add_page.php" method="POST">
        <label for="name"><font color="orange">Vardas (privalomas laukelis)</font></label><br /> 
        <input name="name" type="text" value="" /> <br /> 
        <label for="surname">Pavarde</label><br /> 
        <input name="surname" type="text" value="'.$_GET["surname"].'" /> <br /> <br />
        <input type="hidden" name="type" value="'.$_GET["type"].'">
        <button type="submit" value="Submit">Registracija</button>
    </form>'; 
}
//Kliento registracjos standartine forma
else {
    echo '
    <form action="add_page.php" method="POST">
        <label for="name">Vardas (privalomas laukelis)</label><br /> 
        <input name="name" type="text" value="" /> <br /> 
        <label for="surname">Pavarde</label><br /> 
        <input name="surname" type="text" value="" /> <br /> <br />
        <input type="hidden" name="type" value="'.$_GET["type"].'">
        <button type="submit" value="Submit">Registracija</button>
    </form>';
}


include_once 'footer.php';
?>
