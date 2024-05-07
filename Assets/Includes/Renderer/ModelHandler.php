<?php
    include_once('Utils/die.php');   
    $render = getModelInfo($renderRequest);
?>

    <!DOCTYPE html>
    <head>
    </head>
    <body>
        <div id='canvas-container<?=$i?>'></div>
            <script>
                let isHovering<?=$i?> = false;
                
                function addLight(type){
                    (type === 'hemisphere') ? light = new  THREE.HemisphereLight(0xffffff, 0x444444, <?=$render["hemisphereLight"]?>) : light = new THREE.DirectionalLight(0xffffff, 0.06);
                    (type === 'hemisphere') ? light.position.set(10, 10, 0) : light.position.set(0, 1, 0);
                    scene<?=$i?>.add(light);
                }

                function EventAnimationHandler(canvasContainer<?=$i?>){
                    canvasContainer<?=$i?>.addEventListener('mouseenter', () => {
                        isHovering<?=$i?> = true;
                    });
                    canvasContainer<?=$i?>.addEventListener('mouseleave', () => {
                        isHovering<?=$i?> = false;
                    });
                    canvasContainer<?=$i?>.addEventListener('click', () => {
                        const audio = new Audio("<?=$render["mp3path"]?>");
                        audio.play();
                    });
                }


                function animate<?=$i?>() {
                    renderer<?=$i?>.render(scene<?=$i?>, camera<?=$i?>);
                    scene<?=$i?>.rotation.x = lerp(scene<?=$i?>.rotation.x, (isHovering<?=$i?>) ? degreeToRad(<?=$render["targetX"]?>) : degreeToRad(<?=$render["baseX"]?>), 0.03);
                    scene<?=$i?>.rotation.y = lerp(scene<?=$i?>.rotation.y, (isHovering<?=$i?>) ? degreeToRad(<?=$render["targetY"]?>) : degreeToRad(<?=$render["baseY"]?>), 0.05);
                    scene<?=$i?>.rotation.z = lerp(scene<?=$i?>.rotation.z, (isHovering<?=$i?>) ? degreeToRad(<?=$render["targetZ"]?>) : degreeToRad(<?=$render["baseZ"]?>), 0.1);
                    
                    requestAnimationFrame(animate<?=$i?>);
                }

                function init() {
                    scene<?=$i?> = new THREE.Scene();
                    camera<?=$i?> = new THREE.PerspectiveCamera(<?=$render["fov"]?>, <?=$render["aspect"]?>, <?=$render["near"]?>, <?=$render["far"]?>);
                    renderer<?=$i?> = new THREE.WebGLRenderer({antialias:true, alpha: true});
                    fbxLoader = new THREE.FBXLoader();
                    scene<?=$i?>.background = null;

                    camera<?=$i?>.position.z = <?=$render["cameraPos"]?>;
                    renderer<?=$i?>.setSize(400, 450);
                    document.getElementById('canvas-container<?=$i?>').appendChild(renderer<?=$i?>.domElement);
                    canvasContainer<?=$i?> = document.getElementById('canvas-container<?=$i?>');

                    addLight('hemisphere');
                    addLight('directional');

                    fbxLoader.load("<?=$render["fbxpath"]?>", (object) => {scene<?=$i?>.add(object); animate<?=$i?>(); });
                    EventAnimationHandler(canvasContainer<?=$i?>);
                }
                init();
            </script>
    </body>
    </html>
    <?php $i++; ?>