<?php 
include 'db.php';
include_once 'header.php';
echo '<h2>Naujo zmogo pridejimo forma</h2>';
if ($_GET["success"] == 1){
    echo '<p><font color="#00DD00">Užregistruota sėkmingai</font></p>';
}
if ($_GET["error"] == 1){
    echo '
    <form action="add_page.php" method="POST">
        <label for="name"><font color="orange">Vardas (privalomas laukelis)</font></label><br /> 
        <input name="name" type="text" value="" /> <br /> 
        <label for="surname">Pavarde</label><br /> 
        <input name="surname" type="text" value="" /> <br /> <br />
        <button type="submit" value="Submit">Prideti klienta prie eiles</button>
    </form>'; 
}
else {
    echo '
    <form action="add_page.php" method="POST">
        <label for="name">Vardas</label><br /> 
        <input name="name" type="text" value="" /> <br /> 
        <label for="surname">Pavarde</label><br /> 
        <input name="surname" type="text" value="" /> <br /> <br />
        <button type="submit" value="Submit">Prideti klienta prie eiles</button>
    </form>';
}


include_once 'footer.php';
?>