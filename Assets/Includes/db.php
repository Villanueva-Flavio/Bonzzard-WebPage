<?php
    include_once('Utils/die.php');
    include_once('env.php');
    
    $conn = new mysqli(getenv('DB_IP'), getenv('DB_USER'), getenv('DB_PASSWORD'), getenv('DB_HOST'), 3306);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>