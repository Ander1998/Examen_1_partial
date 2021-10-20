<html>
<head>

<?php 
/// AÑADE EL CODIGO NECESARIO PARA PODER ACCEDER AL CONTENIDO DEL FICHERO statistics.php
include 'statistics.php';

?>

</head>


<body>


<?php
    
    function PorcentajeJuegos() {
        //call the getstatistics to recover values from the DB
        //loop trough each of the teams recovered
        echo '<td>';
        foreach($teamName as $row) {
            $ganadas = 0;
            foreach($gameas as $row) {
                //loop trought the games played    
                foreach($won as $row) {    
                    //if it's a won game do the percentaje      
                    if($won == "True") {
                        $ganadas++;
                        $porcentajejuegos = ($ganadas/count($game))*100;
                    }
                } 
                echo '<tr>' . $porcentajejuegos . '</tr>';
            }
        
        }
        echo '</td>';
    }

    function PorcentajeEquipos() {
        //call the getstatistics to recover values from the DB
        //loop trough each of the teams recovered
        echo '<td>';
        foreach($teamName as $row) {
                $ganadastm = 0;  
                foreach($won as $row) {    
                //if it's a won game do the percentaje      
                    if($won == "True") {
                        $ganadastm++;
                        $porcentajeequipos = ($ganadastm/count($game))*100;
                    }
                } 
            echo '<tr>' . $porcentajeequipos . '</tr>';
        }
        echo '</td>';
    }

    function MediaJuegos() {
        //loop through the teams that played
        echo '<td>'; 
        foreach ($teamName as $row) {
            $mediajuegos = 0;
            //save in a variable the percentaje of the wins for all games for each team
            $mediajuegos = ($score/count($game))*100;
            echo '<tr>' . $mediajuegos . '</tr>';
        }
        echo '</td>';
    }
    
    function SacarDatos() {
        PorcentajeJuegos();
        PorcentajeEquipos();
        MediaJuegos();
    }

    function convertirFecha() {
        //I have to take the value in the input type date that has '/' and replace that with '-'
    }
 
    function PedirNombre() {
        $_COOKIE = alert("introduzca un nombre:");
    }
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
<label for="Nombre">Seleccione el juego jugado:</label>
    <options id="Nombre" name="Nombre">
        <select>
        <option value="LoL">LOL</option>
        <option value="WoW">WoW</option>
        <option value="Valorant">Valorant</option>
        <option value="Fortnite">Fortnite</option>
        <option value="Minecraft">Minecraft</option>
        </select>
    <br>
    <label for="Equipo">Introduzca un nombre de equipo:</label>
    <input type="text" id="Equipo" name="Equipo">
    <br>
    <label for="Jugadores">Introduzca un numero de jugadores entre 3 y 5:</label>
    <input type="number" id="Jugadores" name="Jugadores" max="5" min="3">
    <br>
    <label for="Puntuacion">Introduzca una puntuacion:</label>
    <input type="number" id="Puntuacion" name="Puntuacion" min="1">
    <br>
    <label for="Fecha">Introduzca una fecha correcta(YYYY-MM-DD):</label>
    <input type="date" id="Fecha" name="Fecha">
    <br>
    <label for="Ganado">Partida ganada, clickado true, si no false:</label>
    <input type="checkbox" id="Ganado" name="Ganado">
    <br>
    <!--using the instertStatistics function we return the values that are inside the inputs so that we have an insert -->
    <!--into the database, I should convert also the date because it has '/' instead of '-' -->
    <input type="button" onclick="insertStatistics('Nombre','Equipo','Jugadores','Puntuacion','Fecha','Ganado')" name="Anadir Partida" value="Anadir Partida">
    <br>
    <input type="button" onclick="convertirFecha(),SacarDatos()" name="Mostrar Resultados" value="Mostrar Resultados">
    <br>
    <!-- this thing should be hidden but since the manual is trash and we can't search on the internet or in our
    exercises I can't rememeber how to do it-->
    <input type="text" style="hidden">
    <br>
    <input type="button" onclick="statistics.php" name="Redireccion" value="Redireccion">
</form>
</body>

</html>