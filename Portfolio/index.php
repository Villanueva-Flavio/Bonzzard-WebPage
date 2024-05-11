<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Bonzzard > Portfolio</title>
    <link rel="stylesheet" href="/Assets/Styles/portfolio.css">
</head>
<body>
    <!-- Header -->

    <div id="Header">
        <img id="image-source" src="/Assets/Styles/Elements/Images/Foto-fiubaton.jpg">
        <div class="name-container">
            <h1 id="name">FLAVIO <br>VILLANUEVA</h1>
        </div>
        <div class="resume-container">
            <h1 id="resume-description">Download<br>resume</h1>
            <a href="/Assets/Styles/Elements/Files/Flavio_Villanueva-Resume-ES.pdf" download="Flavio_Villanueva-Resume-ES.pdf">
                <button id="resume-download-button-es">ES</button>
            </a>
            <a href="/Assets/Styles/Elements/Files/Flavio_Villanueva-Resume-EN.pdf" download="Flavio_Villanueva-Resume-EN.pdf">
                <button id="resume-download-button-en">EN</button>
            </a>
        </div>
    </div>
    
    <h1 id="Question"> How can I help you? </h1>
    <?php
        for($i = 0; $i < 1000; $i++){
            echo "<p>Test</p><br>";
        }
    ?>
</body>


<script>
    const hiragana = "あいうえおかきくけこさしすせそたちつてとなにぬねのはひふへほまみむめもやゆよらりるれろわをん";
    const nameElement = document.getElementById('name');
    const questionElement = document.getElementById('Question');
    const originalName = nameElement.innerText;
    const originalQuestion = questionElement.innerText;
    const delayBeforeStart = 200;
    const durationPerLetter = 2000;
    const delayBetweenLetters = 20;

    function generateRandomTextWithDelay(originalText) {
        let randomText = '';
        for (let i = 0; i < originalText.length; i++) {
            if (originalText[i] !== ' ') {
                if (originalText[i] == '\n') {
                    randomText += '\n';
                    continue;
                }
                const randomIndex = Math.floor(Math.random() * hiragana.length);
                randomText += hiragana[randomIndex];
            } else if (originalText[i] == ' ') {
                randomText += ' ';
            }
        }
        return randomText;
    }

    function animateTextLetterByLetter(targetElement, originalText) {
        let currentIndex = 0;
        function updateText(timestamp) {
            if (currentIndex < originalText.length) {
                const elapsed = timestamp - startTime;
                const progress = elapsed / durationPerLetter;
                if (progress >= currentIndex * delayBetweenLetters / durationPerLetter) {
                    const newText = originalText.substr(0, currentIndex + 1) + generateRandomTextWithDelay(originalText).substr(currentIndex + 1);
                    targetElement.innerText = newText;
                    currentIndex++;
                }
                requestAnimationFrame(updateText);
            } else {
                targetElement.innerText = originalText;
            }
        }
        const startTime = performance.now();
        requestAnimationFrame(updateText);
    }

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