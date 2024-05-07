<!DOCTYPE html>
<head>
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css"/>
    <style>
        .devicon{
            padding: 5px;
            width: 35px;
            height: 35px;
            filter: grayscale(1);
            transition: 0.5s ease-in-out;
        }

        .devicon:hover{
            filter: grayscale(0);
            transition: 0.5s ease-in-out;
        }
        
    </style>
</head>   

<?php
        $deviconDict = array(
        "amazonwebservices" => "<img title='Amazon Web Services' class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/amazonwebservices/amazonwebservices-original-wordmark.svg'/>",
        "android" =>           "<img title='Android'             class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/android/android-original-wordmark.svg'/>",
        "angular" =>           "<img title='AngularJS'           class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/angularjs/angularjs-original.svg'/>",
        "apache" =>            "<img title='Apache'              class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/apache/apache-original-wordmark.svg'/>",
        "arduino" =>           "<img title='Arduino'             class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/arduino/arduino-original-wordmark.svg'/>",
        "bash" =>              "<img title='Bash'                class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bash/bash-original.svg'/>",
        "bootstrap" =>         "<img title='Bootstrap'           class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bootstrap/bootstrap-plain-wordmark.svg'/>",
        "c" =>                 "<img title='C'                   class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/c/c-original.svg'/>",
        "cplusplus" =>         "<img title='C++'                 class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/cplusplus/cplusplus-original.svg'/>",
        "css3" =>              "<img title='CSS3'                class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original-wordmark.svg'/>",
        "css" =>               "<img title='CSS3'                class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original-wordmark.svg'/>",
        "docker" =>            "<img title='Docker'              class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/docker/docker-original-wordmark.svg'/>",
        "flask" =>             "<img title='Flask'               class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/flask/flask-original-wordmark.svg'/>",
        "flutter" =>           "<img title='Flutter'             class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/flutter/flutter-original.svg'/>",
        "grafana" =>           "<img title='Grafana'             class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/grafana/grafana-plain-wordmark.svg'/>",
        "githubactions" =>     "<img title='GitHub Actions'      class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/github/github-original-wordmark.svg'/>",
        "go" =>                "<img title='Go'                  class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/go/go-original.svg'/>",
        "html5" =>             "<img title='HTML5'               class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original-wordmark.svg'/>",
        "html" =>              "<img title='HTML5'               class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original-wordmark.svg'/>",
        "java" =>              "<img title='Java'                class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/java/java-original-wordmark.svg'/>",
        "javascript" =>        "<img title='JavaScript'          class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg'/>",
        "jenkins" =>           "<img title='Jenkins'             class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/jenkins/jenkins-original.svg'/>",
        "jest" =>              "<img title='Jest'                class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/jest/jest-plain.svg'/>",
        "jquery" =>            "<img title='jQuery'              class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/jquery/jquery-original-wordmark.svg'/>",
        "laravel" =>           "<img title='Laravel'             class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg'/>",
        "lua" =>               "<img title='Lua'                 class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/lua/lua-original.svg'/>",
        "mongodb" =>           "<img title='MongoDB'             class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mongodb/mongodb-original-wordmark.svg'/>",
        "mysql" =>             "<img title='MySQL'               class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original-wordmark.svg'/>",
        "nextjs" =>            "<img title='Next.js'             class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/nextjs/nextjs-original-wordmark.svg'/>",
        "nginx" =>             "<img title='Nginx'               class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/nginx/nginx-original.svg'/>",
        "nodejs" =>            "<img title='Node.js'             class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/nodejs/nodejs-original-wordmark.svg'/>",
        "opengl" =>            "<img title='OpenGL'              class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/opengl/opengl-original.svg'/>",
        "pandas" =>            "<img title='Pandas'              class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/pandas/pandas-original-wordmark.svg'/>",
        "php" =>               "<img title='PHP'                 class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg'/>",
        "postgresql" =>        "<img title='PostgreSQL'          class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postgresql/postgresql-original-wordmark.svg'/>",
        "putty" =>             "<img title='PuTTY'               class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/putty/putty-original.svg'/>",
        "pycharm" =>           "<img title='PyCharm'             class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/pycharm/pycharm-original-wordmark.svg'/>",
        "python" =>            "<img title='Python'              class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original-wordmark.svg'/>",
        "raspberrypi" =>       "<img title='Raspberry Pi'        class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/raspberrypi/raspberrypi-original-wordmark.svg'/>",
        "react" =>             "<img title='React'               class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/react/react-original-wordmark.svg'/>",
        "reactjs" =>           "<img title='React'               class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/react/react-original-wordmark.svg'/>",
        "ruby" =>              "<img title='Ruby'                class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/ruby/ruby-original-wordmark.svg'/>",
        "rust" =>              "<img title='Rust'                class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/rust/rust-original.svg'/>",
        "selenium" =>          "<img title='Selenium'            class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/selenium/selenium-original.svg'/>",
        "sequelize" =>         "<img title='Sequelize'           class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/sequelize/sequelize-original-wordmark.svg'/>",
        "solidity" =>          "<img title='Solidity'            class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/solidity/solidity-original.svg'/>",
        "symfony" =>           "<img title='Symfony'             class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/symfony/symfony-original-wordmark.svg'/>",
        "tailwindcss" =>       "<img title='Tailwind CSS'        class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-plain-wordmark.svg'/>",
        "tensorflow" =>        "<img title='TensorFlow'          class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tensorflow/tensorflow-original.svg' />",
        "threejs" =>           "<img title='Three.js'            class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/threejs/threejs-original-wordmark.svg'/>",
        "typescript" =>        "<img title='TypeScript'          class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/typescript/typescript-original.svg'/>",
        "woocommerce" =>       "<img title='WooCommerce'         class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/woocommerce/woocommerce-original-wordmark.svg'/>",
        "wordpress" =>         "<img title='WordPress'           class='devicon'       src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/wordpress/wordpress-plain-wordmark.svg'/>",
        "craftbukkit" =>       "<img title='CraftBukkit'         class='devicon'       src='/Assets/Styles/Elements/Icons/craftbukkit.png'/>",
        "rcon protocol" =>     "<img title='RCON Protocol'       class='devicon'       src='/Assets/Styles/Elements/Icons/gamespyrcon.png'/>",
        "minecraft" =>         "<img title='Minecraft'           class='devicon'       src='/Assets/Styles/Elements/Icons/minecraft.png'/>",
        "minecraftforge" =>    "<img title='Minecraft Forge'     class='devicon'       src='/Assets/Styles/Elements/Icons/minecraftforge.png'/>",
        "papermc" =>           "<img title='PaperMC'             class='devicon'       src='/Assets/Styles/Elements/Icons/papermc.png'/>",
        "stable diffusion" =>  "<img title='Stable Diffusion'    class='devicon'       src='/Assets/Styles/Elements/Icons/stablediffusion.png'/>",
    );
?>


</body>
</html>