<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Assets/Styles/cardContainer.css">
</head>
<body>
<?php
    $die_prevent = true;

    include $_SERVER['DOCUMENT_ROOT'].'/Assets/Includes/Utils/deviconDict.php';
    include $_SERVER['DOCUMENT_ROOT'].'/Assets/Includes/db.php';
    echo "<div id='cards-container'>";
    function getCard($title, $image, $description, $stack, $date, $repository, $deviconDict){ include $_SERVER['DOCUMENT_ROOT'].'/Assets/Modules/Card/CardWorks.php'; }
    $sql = "SELECT * FROM ".getenv('WORK_TABLE');
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            getCard($row['title'], $row['image'], $row['description'], explode(',', strtolower($row['stack'])), $row['date'], $row['repository'], $deviconDict);  
        }
    }
    echo "</div>";
?>

<!--

    title: "Minecraft Remote Panel"
    image: "https://i.ibb.co/fDN6BrH/imagen-2024-03-17-122058848.png"
    description: "A remote control panel for minecraft servers with RCON protocol, for easy admin access and control over the server terminal."
    stack: ["PHP", "HTML", "CSS", "JavaScript", "JQuery", "MySQL", "RCON Protocol"]
    date: "2021-06-01"
    repository: "github.com/Villanueva-Flavio/Minecraft-Remote-Panel"


    insert into work values (2, "Minecraft Remote Panel", "https://i.ibb.co/fDN6BrH/imagen-2024-03-17-122058848.png", "A remote control panel for minecraft servers with RCON protocol, for easy admin access and control over the server terminal.", "PHP,HTML,CSS,JavaScript,JQuery,MySQL,RCON Protocol", "2021-06-01", "github.com/Villanueva-Flavio/Minecraft-Remote-Panel");
    delete id 1
    DELETE FROM work WHERE id = 1;
-->

<!-- 

    id INT(10) NOT NULL PRIMARY KEY,
    title VARCHAR(255),
    image VARCHAR(255),
    description TEXT,
    stack TEXT,
    date DATE,
    repository VARCHAR(255)

 -->

 
</body>
</html>