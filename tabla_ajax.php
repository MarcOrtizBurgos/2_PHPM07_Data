<?php

require_once 'Database/DatabaseProc.php';

$q = intval($_GET['q']);

$conesion = new DatabaseProc("localhost","root","root","phpep");
$conesion->connect();

if($q == 1){
    $result = $conesion->selectAll();
}
else if($q == 2){
    $result = $conesion->selectByModalitat("Adivina Jugador");
}
else if($q == 3){
    $result = $conesion->selectByModalitat("Adivina Maquina");
}

if ($result->num_rows > 0) {
    echo "<table id='uvu' class='tablica'>";
    echo '<tr><th>ID</th><th>MODALITAT</th><th>NIVELL</th><th>INTENTS</th><th>DATA PARTIDA</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["modalitat"] . "</td><td>" . $row["nivell"] . "</td><td>" . $row["intents"] . "</td><td>" . $row["data_partida"] . "</td></tr>";
    }
    echo '</table>';
} else {
    echo "<h1>0 results</h1>";
}


?>