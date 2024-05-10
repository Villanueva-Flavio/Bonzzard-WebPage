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
</body>


<script>

document.addEventListener("DOMContentLoaded", function() {
    const hiragana = "あいうえおかきくけこさしすせそたちつてとなにぬねのはひふへほまみむめもやゆよらりるれろわをん";
    const nameElement = document.getElementById('name');
    const originalName = nameElement.innerText;
    const delayBeforeStart = 100;
    const durationPerLetter = 2000;
    const delayBetweenLetters = 20;

    function generateRandomNameWithDelay() {
        let randomName = '';
        for (let i = 0; i < originalName.length; i++) {
            if (originalName[i] !== ' ') {
                if(originalName[i] == '\n'){
                    randomName += '\n';
                    continue;
                }
                const randomIndex = Math.floor(Math.random() * hiragana.length);
                randomName += hiragana[randomIndex];
                
            } else if(originalName[i] == ' '){
                randomName += ' ';
            }
        }
        return randomName;
    }

    function animateNameLetterByLetter() {
        let currentIndex = 0;
        function updateName(timestamp) {
            if (currentIndex < originalName.length) {
                const elapsed = timestamp - startTime;
                const progress = elapsed / durationPerLetter;
                if (progress >= currentIndex * delayBetweenLetters / durationPerLetter) {
                    const newName = originalName.substr(0, currentIndex + 1) + generateRandomNameWithDelay().substr(currentIndex + 1);
                    nameElement.innerText = newName;
                    currentIndex++;
                }
                requestAnimationFrame(updateName);
            } else {
                nameElement.innerText = originalName;
            }
        }
        const startTime = performance.now();
        requestAnimationFrame(updateName);
    }
    nameElement.innerText = generateRandomNameWithDelay();
    setTimeout(animateNameLetterByLetter, delayBeforeStart);
});



</script>