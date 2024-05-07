<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Tektur:wght@900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/Assets/Styles/cardWorks.css">
    </head>
    <body>
        <div class="card-container">
            <div class="overlap-background"></div>
            <div class="image-container">
                <img src="<?=$image?>" alt="Card Image" class="card-image">
            </div>
            
            <p class="title"><?=$title?></p>

            <div class="info-container">
                <div class="description-container">
                    <p class="description-text"><?=$description?></p>
                </div>

                <div class="stack-container">
                    <p class="stack-title">Stack</p>
                    <div class="stack-icon-container">
                        <?php
                            foreach($stack as $item){
                                echo $deviconDict[$item];
                            }
                        ?>
                    </div>
                </div>

                <div class="extras-container">
                    <p class="date-title">Date</p>
                    <p class="date-text"><?=$date?></p>
                    <p class="repository-title">Repo</p>

                    <a href="<?=$repository?>"><img class="repository" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/github/github-original.svg" alt="GitHub Repository"></a>
                </div>
            </div>
        </div>
    </body>
</html> 