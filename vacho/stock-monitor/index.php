<!DOCTYPE html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>

<?php
    include "components/navbar.php";
    include "components/filter.php";
    include "components/table.php";
    include "scripts/scripts.php";

    renderTable(1,49);

    if(array_key_exists('button1', $_POST)) {
        button1();
    }

    function button1(){
        echo $_POST["min"];
    }


?>

</body>
</html>
