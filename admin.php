<?php 
include 'db.php';
include_once 'header.php';
//Klientu registravimo formos
echo '<h2>Naujo kliento registravimo forma</h2>';
if ($_GET["success"] == 1){
    echo '<h3><font color="#00DD00">Užregistruota sėkmingai</font></h3>';
}
//Pranesimas del neivesto vardo
if ($_GET["error"] == 1){
    echo '
    <form action="add_page.php" method="POST">
        <label for="name"><font color="orange">Vardas (privalomas laukelis)</font></label><br /> 
        <input name="name" type="text" value="" /> <br /> 
        <label for="surname">Pavarde</label><br /> 
        <input name="surname" type="text" value="'.$_GET["surname"].'" /> <br /> <br />
        <button type="submit" value="Submit">Prideti klienta prie eiles</button>
    </form>'; 
}
//Kleinto registracjos standartine forma
else {
    echo '
    <form action="add_page.php" method="POST">
        <label for="name">Vardas (privalomas laukelis)</label><br /> 
        <input name="name" type="text" value="" /> <br /> 
        <label for="surname">Pavarde</label><br /> 
        <input name="surname" type="text" value="" /> <br /> <br />
        <button type="submit" value="Submit">Prideti klienta prie eiles</button>
    </form>';
}


include_once 'footer.php';
?>