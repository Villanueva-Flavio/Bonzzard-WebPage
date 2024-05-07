<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/portals.css">
    <title>Portal module</title>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/build/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/examples/js/loaders/FBXLoader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/examples/js/libs/fflate.min.js"></script>
</head>
<body>
    <script>
        function degreeToRad(degree) {
            return degree * (Math.PI / 180);
        }
        function lerp(a, b, t) {
            return (1 - t) * a + t * b;
        }
    </script>

    <?php
        $die_prevent = true;
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        
        function getModelInfo($type){
            global $modelDict;
            require_once("./Renderer/ModelDict.php");
            return $modelDict[$type];
        }
        
        $i = 0;
        $renderRequest = "EndPortal";
        include("./Renderer/ModelHandler.php");
        $renderRequest = "NetherPortal";
        include("./Renderer/ModelHandler.php");
    ?>

</body>
</html>