<div id="background-container">
    <div id="background">
    <?php
        for($i = 0; $i < 7; $i++) {
            echo "<div class='row'>";
            for($j = 0; $j < 80; $j++){
                $a = rand(0, 1);
                echo "<p class='text'>";
                echo "$a";
                echo "</p>";
            }
            echo "</div>";
        }
    ?>
    </div>
</div>