<?php
require 'config.php';
?>
<?php

session_start();

$email = $_SESSION['email'];

$sql = "select Question from client where Email = '$email' ";

$result = $connection -> query($sql);

if ($result -> num_rows > 0)
{
    while ($row = $result -> fetch_assoc())
    {
        $question = $row["Question"];
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password !</title>
    <link rel="stylesheet" type="text/css" href="CSS/Question.css">
</head>
<body>
<div id="whole" class="font">
    <!--Header of the website -->
    <img id="top1" src="Src/Img/fpass%20Top%201.png" alt="Logo" height="100px" width="165px">
    <img id="top2" src="Src/Img/fpass%20Top%202.png" alt="Logo" height="100px" width="165px">
    <!--Body-->
    <br><br>


    <form method="POST" action="chk_answer.php">
        <h1 class="fpass_text">Enter the Answer for your question !</h1>
        <p class="all_text">
            Please enter your answer for this security question that you answered when you created the account to reset your password.
            <a href="Login.html" class="intro_link">Go back to login page</a>
        </p>
        <p>

            <input type="text" id="question" value="<?php echo $question;?>"readonly>
            <br>
            <label class="label-input">Question</label>
        </p>
        <p>

            <input type="text" id="answer" placeholder="Enter the Answer" name="answer"  required >
            <br>
            <label class="label-input-answer">Answer</label>


        </p>

        <p class="submit_align">
            <input class="cancel" type="reset"  value="Cancel">
            <input class="submit" type="submit" name="submit" value="Submit" >
        </p>
        <p class="all_text">
            If you have any trouble please visit our <a class="intro_link" href="#">FAQ</a> page, Thank you.
        </p>

    </form>

</div>
</body>
</html>




