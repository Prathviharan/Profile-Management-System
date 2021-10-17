<?php
    require 'config.php';

    session_start();

    if(isset($_POST["submit"]))
    {
        $_SESSION["email"] = $_POST["email"];
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password !</title>
    <link rel="stylesheet" type="text/css" href="CSS/FPASS.css">
</head>
<body>
<div id="whole" class="font">
    <!--Header of the website -->
    <img id="top1" src="Src/Img/fpass%20Top%201.png" alt="Logo" height="100px" width="165px">
    <img id="top2" src="Src/Img/fpass%20Top%202.png" alt="Logo" height="100px" width="165px">
    <!--Body-->
    <br><br>
    <form method="POST" action="chk_mail.php" >
        <h1 class="fpass_text">Forgot your password?</h1>
        <p class="all_text">
            Please enter your email address, and we'll send you instructions to reset your password.
            <a href="Login.html" class="intro_link">Go back to login page</a>
        </p>
        <p>

            <input type="email" id="log_email" placeholder="Enter the Email Address"  name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}">
            <br>
            <label class="label-input">E-mail</label>
        </p>

        <p class="submit_align">
            <input class="cancel" type="reset" value="Cancel">
            <input class="submit" type="submit" value="Submit" name="submit" >
        </p>
        <p class="all_text">
            If you have any trouble please visit our <a class="intro_link" href="#">FAQ</a> page, Thank you.
        </p>

    </form>

</div>
</body>
</html>

