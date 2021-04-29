<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db = "phpep";
    $conn = mysqli_connect($servername, $username, $password, $db);
    
    $id=$_POST['id'];
    $modalitat=$_POST['modalitat'];
    $nivell=$_POST['nivell'];
    $intents=$_POST['intents'];
    
    $sql = "UPDATE `estadistiques` 
    SET `modalitat`='$modalitat',
    `nivell`='$nivell',
    `intents`='$intents' WHERE id=$id";
    
    if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode"=>200));
    } 
    else {
            echo json_encode(array("statusCode"=>201));
    }
    mysqli_close($conn);
?>