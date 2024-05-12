<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/Assets/Includes/Utils/die.php"); ?>
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