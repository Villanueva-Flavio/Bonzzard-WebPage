<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Bonzzard > Portfolio</title>
    <link rel="stylesheet" href="/Assets/Styles/portfolio.css">
</head>

<body>
    <?php /* require_once($_SERVER['DOCUMENT_ROOT']."/Assets/Modules/Portfolio/background.php"); */ ?>

    <style>
        .bgAnimation{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 250vh;
            display: grid;
            grid-template-columns: repeat(30, 1fr);
            grid-template-rows: repeat(30,1fr);
            background: #111;
            filter: saturate(2);
            overflow: hidden;
            z-index: -3;
        }

        .colorBox{
            z-index: 2;
            filter: brightness(1.1);
            transition: 2s ease;
            position: relative;
            margin: 2px;
            background: #121212;
        }

        .colorBox:hover{
            background: yellow;
            transition-duration: 0s;
            box-shadow: 0 0 10px yellow, 0 0 20px yellow, 0 0 40px yellow, 0 0 80px yellow;
        }

    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const bgAnimation = document.getElementById('bgAnimation');
            const numberOfColorBoxes = 800;
            for(let i = 0; i < numberOfColorBoxes; i++){
                const colorBox = document.createElement('div');
                colorBox.classList.add('colorBox');
                bgAnimation.append(colorBox);
            }
        });
    </script>
    <div class="bgAnimation" id="bgAnimation">
        <div class="backgroundAnim">

        </div>
    </div>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ?>
    <!-- Header -->
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/Assets/Modules/Portfolio/header.php"); ?>
    <h1 id="Question"> How can I help you? </h1>
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/Assets/Modules/Portfolio/contact.php"); ?>
    <h1 id="Question"> Or Contact me: </h1>
    <h1 id="Question"> About Me: </h1>
    <h1 id="Question"> Previous works:</h1>
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/Assets/Modules/Card/CardContainer.php"); ?>
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