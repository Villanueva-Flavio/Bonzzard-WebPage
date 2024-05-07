<!DOCTYPE html>
<html lang="en">
<head>
    <?php $die_prevent = true; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Assets/Styles/team.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <?php include "/Assets/Includes/script.php"; ?>
    <title>Bonzzard > Team</title>
</head>
<body>
    <div id="fullpage">
        <?php include "/Assets/Modules/TeamPartOne.php"; ?>
        <?php include "/Assets/Modules/TeamPartTwo.php"; ?>
        <?php include "/Assets/Modules/TeamPartThree.php"; ?>
    </div>

    <script>
        // Función para desplazarse suavemente a una sección al hacer clic en un enlace
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href').substring(1); // Obtener el ID de la sección a la que queremos desplazarnos

                document.getElementById(targetId).scrollIntoView({
                    behavior: 'smooth' // Desplazamiento suave
                });
            });
        });

    </script>

</body>
</html>
