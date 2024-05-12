<!DOCTYPE html>
<html lang="en">
<head>
    <?php $die_prevent = true; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Assets/Styles/team.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Bonzzard > Team</title>
</head>
<body>
    <?php
        /* All sections separated */
        
        require_once "../Assets/Modules/Team/TeamSectionOne.php";
        require_once "../Assets/Modules/Team/TeamSectionTwo.php";
        require_once "../Assets/Modules/Team/TeamSectionThree.php";
        
        /* MailSender functions */
        require_once "../Assets/Includes/MailSender.php";

        /* Mail functionality implemented */
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

    <!-- Scrolling behaviour -->
    <script>
        $(document).ready(function(){
            var about = $("#About").offset().top;
            var team = $("#Team").offset().top;
            var contact = $("#Contact").offset().top;

            var height = $(document).scrollTop();
            var timeout = false;
            var scroll = height;

            $(document).scroll(function(){
                if (timeout !== false) clearTimeout(timeout);
                timeout = setTimeout(function() {
                    scroll = $(document).scrollTop();
                    console.log("Debugging scroll Y Pos:" + scroll);
                    var target = (scroll > height)? (scroll > team && scroll < about)?    $("html, body").animate({ scrollTop: about   }, 1000):
                                                    (scroll > about && scroll < contact)? $("html, body").animate({ scrollTop: contact }, 1000):
                                                    (scroll > contact)?                   $("html, body").animate({ scrollTop: team    }, 1000): null:

                                 (scroll < height)? (scroll < team)?                      $("html, body").animate({ scrollTop: contact }, 1000):
                                                    (scroll < about)?                     $("html, body").animate({ scrollTop: team    }, 1000):
                                                    (scroll < contact)?                   $("html, body").animate({ scrollTop: about   }, 1000): null: null;
                }, 40);
                height = scroll;
            });
        });
    </script>
</body>
</html>
