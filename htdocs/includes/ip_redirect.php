<?php
    include 'die.php';
    if($_SERVER['SERVER_NAME'] == '181.98.186.40') { // Domain IP
        header("Location: https://bonzzard.com.ar".$_SERVER['PHP_SELF']);
        echo("<script>window.location = ".$_SERVER['PHP_SELF']."</script>");
        die();
    }
?>