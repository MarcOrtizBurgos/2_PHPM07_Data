<?php
//session_start();
//session_destroy();
session_start();
require_once 'Database/DatabaseProc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="global.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <form action="index.php">
            <input class="tipoz" type="submit" value="Volver al Index">
        </form>
        <form action="CRUD.php">
                <input class="tipoz" type="submit" value="CRUD">
        </form>
        <form method="post" action="">
            <input type="text" name="damelo">
            <input class="tipoz1" name="sumbit" type="submit" value="Busca ID">
            <input class="tipoz1" name="dele" type="submit" value="Delete ID">
        </form>
        
        <form method="get">
            <select name="users" onchange="showUser(this.value)">
                <option value="1">Tots</option>
                <option value="2">Adivina Jugador</option>
                <option value="3">Adivina Maquina</option>
            </select>
        </form>
        
        <div class="centrao2" id="tablesita">
            <?php
                $conesion = new DatabaseProc("localhost","root","root","phpep");
                $conesion->connect();
                if(isset($_POST['sumbit']) && $_POST["damelo"]!=null){
                    $result = $conesion->findById($_POST["damelo"]);
                }
                else if(isset($_POST['dele'])){
                    $conesion->delete($_POST["damelo"]);
                    $result = $conesion->selectAll();
                }
                else{
                    $result = $conesion->selectAll();
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
        </div>
         <script src="ajax.js" language="javascript" type="text/javascript"></script>
    </body>
</html>

<!--    Buscador Maquina i Jugador fet tot amb PHP

    <form method="post" action="">
        <input class="tipoz1" name="J" type="submit" value="Adivina Jugador">
        <input class="tipoz1" name="M" type="submit" value="Adivina Maquina">
    </form>

    if(isset($_POST['sumbit']) && $_POST["damelo"]!=null){
        $result = $conesion->findById($_POST["damelo"]);
    }
    else if(isset($_POST['J'])){
        $result = $conesion->selectByModalitat($_POST['J']);
    }
    else if(isset($_POST['M'])){
        $result = $conesion->selectByModalitat($_POST['M']);
    }
    else if(!isset($_POST['sumbit']) && !isset($_POST['dele'])){
        $result = $conesion->selectAll();
    }
    else {
        $conesion->delete($_POST["damelo"]);
        $result = $conesion->selectAll();
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
-->
