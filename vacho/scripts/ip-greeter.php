<?php
    $ip1 = '186.22.16.173';
    $ip2 = '181.28.200.175';
    $ip3 = '45.176.89.50';

    $address = $_SERVER['REMOTE_ADDR'];
    switch ($address){
        case $ip1: 
            echo '<h1>Flavio</h1>';
            break;
        case $ip2: 
            echo '<h1>Vacho</h1>';
            break;
        case $ip3: 
            echo '<h1>Joaco</h1>';
            break;
        default:
        echo '<h1>Stranger</h1>';
        break;

    }
?>