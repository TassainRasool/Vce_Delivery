<?php
require_once 'source/session.php';
require_once 'source/db_connect.php';



try {
    $ID = $_COOKIE['removedUserOrderID'];
    $SQLDelete = "DELETE FROM current_order WHERE id = ". $ID . ";";

    $statement = $conn->prepare($SQLDelete);
    $statement->execute();
    if($statement->rowCount() == 1) {
        header('location: disp-cur-order.php');
    }
}
catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}




?>