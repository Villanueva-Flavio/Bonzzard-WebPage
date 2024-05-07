<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Assets/Styles/team.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js"></script>
    <?php
        $die_prevent = true;
        require_once "../Assets/Includes/MailSender.php";
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    ?>        
    <title>Bonzzard > Team</title>
</head>
<body>
    <div id="fullpage">
        <div id="Team" class="section">
            <p class="title">  Meet the team </p>
            <div class="team-container">
                <div class="image-container">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>

                <div class="name-container">
                    <div class="name-one">      Zenyatta</div>
                    <div class="name-two">    Pozzard</div>
                    <div class="name-three"> Bonshot</div>
                </div>

                <div>
                    <div class ="role-one">Hosting</div>
                    <div class ="role-two">Owner</div>
                    <div class ="role-three">Co-Owner</div>
                </div>
            </div>
        </div>

        <div id="About" class="section">
            <p class="title">About Bonzzard</p>
            <div class="about-container">
                <p class="about-text"> Bonzzard is a multipurpose Linux server, at first hand was made for Minecraft hosting, but we found very useful tools within it, like programming through SSH, use of GCC, hosting of Discord bots, or other game servers, and now a fully functional portfolio with administration tools, like Minecraft RCON server, and its own RPG API.
                    We have 2 PC Servers working at once, but we plan to expland to a huge server / data center for server hosting, and a gaming center for the public. With the focus on our upcoming new MMORPG game for Discord.
                </p>
            </div>
        </div>

        <div id="Contact" class="section">
            <p class="title">Contact Us</p>
            <div class="contact-container">
                <form method="post">
                    <label for="name" class="label-name">Name:</label>
                    <input type="text" id="name" name="name" required class="input-name">
                    <br>

                    <label for="email" class="label-email">Email:</label>
                    <input type="email" id="email" name="email" required class="input-email">
                    <br>

                    <label for="message" class="label-message">Message:</label>
                    <textarea id="message" name="message" required class="input-message"></textarea>

                    <input type="submit" value="Submit" class="submit-button">
                </form>
            </div>
        </div>

    </div>


    <script>
        new fullpage('#fullpage', {
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

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $to = "noreply.bonzzard@gmail.com";
            $subject = "[BONZZARD] $name";
            $txt = "You have received an e-mail from ".$name.".\n e-mail: ".$email."\n\n".$message;
            
            sendEmail($to, $subject, $txt);
			header("Location: {$_SERVER['REQUEST_URI']}");
			exit();
        }
    ?>

</body>
</html>
