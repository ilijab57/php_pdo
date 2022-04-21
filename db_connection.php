<?php

try {

    $db_conn = new PDO('mysql:host=localhost;dbname=challenge14;charset=utf8', 'root', '');

} catch(PDOException $e) {
    
    echo "Can't connect to database. Try again later";
    die();
}





?>