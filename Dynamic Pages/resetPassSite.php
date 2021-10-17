<?php
    require 'config.php';

    session_start();
    $email = $_SESSION["email"];

    $answer = $_SESSION["answer"];

    if(isset($_POST['submit']))
    {
        $pass = $_POST["pass"];
        $con_pass = $_POST["chkPass"];

        if($pass == $con_pass ) {
            $query = "update client set Password = '$pass' where Email = '$email' and answer = '$answer'";


            if ($connection->query($query)) {
                header("Location:deleteSession.php");
            } else {
                echo "<script> alert('Updates Unsuccesfully') </script>";
            }
        }
        else{
            echo "<script> alert('Password Mismatch , Try Again')</script>";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password !</title>
    <link rel="stylesheet" type="text/css" href="CSS/Reset_css.css">
</head>
<body>
<div id="whole" class="font">
    <!--Header of the website -->
    <img id="top1" src="Src/Img/fpass%20Top%201.png" alt="Logo" height="100px" width="165px">
    <img id="top2" src="Src/Img/fpass%20Top%202.png" alt="Logo" height="100px" width="165px">
    <!--Body-->
    <br><br>
    <form  method="post" action="">
        <h1 class="fpass_text">Enter a Password that won't forget :)</h1>
        <p class="all_text">
            Please enter the new password that you won't forget.
            <a href="Login.html" class="intro_link">Go back to login page</a>
        </p>
        <p>

            <input type="password" id="new_pass" placeholder="Enter the new password"  name="chkPass" required >
            <br>
            <label class="label-input">New Password</label>
        </p>
        <p>

            <input type="password" id="con_pass" placeholder="Re-enter the password " name="pass" required >
            <br>
            <label class="label-input-confirmPass">Confirm Password</label>
        </p>

        <p class="submit_align">
            <input class="cancel" type="reset" value="Cancel">
            <input class="submit" type="submit" name="submit" value="Reset" >
        </p>
        <p class="all_text">
            If you have any trouble please visit our <a class="intro_link" href="#">FAQ</a> page, Thank you.
        </p>

    </form>

</div>
</body>
</html>

