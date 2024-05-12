<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Bonzzard > Portfolio</title>
    <link rel="stylesheet" href="/Assets/Styles/portfolio.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    *{
        margin: 0;
        padding: 0;
    }

    .text{
        font-family: 'Roboto Condensed', sans-serif;
        color: rgba(0, 0, 0, 0.5);
        transition: 1s;
        padding: 0 5px;
        user-select: none;
        cursor: default;
        animation: animate 10s linear infinite;
    }
    
    @keyframes animate{
        0% {transform: translateX(50%);}
        50% {transform: translateX(-100%);}
        100% {transform: translateX(50%);}
    }

    .text:hover{
        transition: 0s;
        color: #0f0;
        text-shadow: 0 0 10px #0f0;
    }

    #background{
        /* margin-top: 40%; */
        bottom: -40%;
        position: absolute;
        width: 100%;
        height: 50%;
        background-color: #111;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        z-index: -1;
    }

    #background .row{
        margin-top: 0%;
        margin-left: -20%;
        width: 100%;
        display: flex;
        padding: 10px 0;
        font-size: 64px;
        transform: rotate(-20deg);
    }
</style>

<body>
    <!-- Header -->
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/Assets/Modules/Portfolio/header.php"); ?>
    <h1 id="Question"> How can I help you? </h1>
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/Assets/Modules/Portfolio/Contact.php"); ?>
    <div id="background">
        <?php
            for($i = 0; $i < 10; $i++) {
                echo "<div class='row'>";
                for($j = 0; $j < 80; $j++){
                    $a = rand(0, 1);
                    echo "<p class='text'>";
                    echo "$a";
                    echo "</p>";
                }
                echo "</div>";
            }
        ?>
    </div>
</body>

<script>
    const nameElement = document.getElementById('name');
    const questionElement = document.getElementById('Question');
    const originalName = nameElement.innerText;
    const originalQuestion = questionElement.innerText;

    nameElement.innerText = generateRandomTextWithDelay(originalName);
    questionElement.innerText = generateRandomTextWithDelay(originalQuestion);

    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            animateTextLetterByLetter(nameElement, originalName);
            animateTextLetterByLetter(questionElement, originalQuestion);
        }, delayBeforeStart);
    });

    document.getElementById('Question').addEventListener("click", function() {
        setTimeout(function() {
            animateTextLetterByLetter(questionElement, originalQuestion);
        }, delayBeforeStart);
    });

    
</script>