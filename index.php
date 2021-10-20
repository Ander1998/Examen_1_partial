<html>
<head>

<?php 
/// AÑADE EL CODIGO NECESARIO PARA PODER ACCEDER AL CONTENIDO DEL FICHERO statistics.php
include 'statistics.php';

?>

</head>


<body>


<?php

    /****
    // EJEMPLO:
     
    $db = new DBManager();
    
    $stat = new Statistics("LoL", "unai", "4", 56, true, date("Y-m-d", strtotime("2020-03-01")));
    $db->insertStatistics($stat);

    $statsArray = $db->getStatistics();

    echo "<ul>";
    foreach ($statsArray as $stats){
        echo "<li>$stats</li>";
    }
    echo "<ul>";
    
    */

?>
<form action="" method="Post">
    <label for="Nombre">Introduzca un nombre de juego:</label>
    <input type="text" id="Nombre" name="Nombre">
    <br>
    <label for="Jugadores">Introduzca un numero de jugadores entre 3 y 5:</label>
    <input type="text" id="Jugadores" name="Jugadores">
    <br>
    <label for="Puntuacion">Introduzca una puntuacion:</label>
    <input type="text" id="Puntuacion" name="Puntuacion">
    <br>
    <label for="Fecha">Introduzca una fecha correcta(YYYY-MM-DD):</label>
    <input type="date" id="Fecha" name="Fecha">
    <br>
    <label for="Ganado">Clickado true, si no false:</label>
    <input type="checkbox" id="Ganado" name="Ganado">
    <options>
        <select>
</form>
</body>

</html>