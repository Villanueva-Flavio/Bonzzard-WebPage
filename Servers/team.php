<!DOCTYPE html>
<html lang="en">
<head>
    <?php $die_prevent = true; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Assets/Styles/team.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js"></script>   
    <title>Bonzzard > Team</title>
</head>
<body>
    <div id="fullpage">
        <?php include "/Assets/Modules/TeamPartOne.php"; ?>
        <?php include "/Assets/Modules/TeamPartTwo.php"; ?>
        <?php include "/Assets/Modules/TeamPartThree.php"; ?>
    </div>

    <script>
        new fullpage('#fullpage', {
            licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
            scrollBar: false,
            navigation: true,
            navigationTooltips: ['Team', 'About', 'Contact'],
            showActiveTooltip: true,
            scrollingSpeed: 1000,
            slidesNavigation: true,
            slidesNavPosition: 'bottom',
            trigger: 'slideArrow',
        });
    </script>

</body>
</html>
