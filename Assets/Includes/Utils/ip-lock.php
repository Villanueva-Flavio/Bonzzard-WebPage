<?php
    include 'die.php';
    $ip1 = "INTRODUCIR IP";
    $address = $_SERVER['REMOTE_ADDR'];
    if($address != $ip1){
            echo "<br/> <br/>";
            echo "estas desde: ",$address,"<br/>";
            die("No estas autorizado, Conectate desde una dirección IP Autorizada");
        }
?>