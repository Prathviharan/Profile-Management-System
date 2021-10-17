<?php
require 'config.php';
session_start();
$email = $_SESSION["email"] ;


?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/EditProfile.css">
</head>
<center>
    <?php

    $sql = "select * from client where Email = '$email'";

    $result = $connection -> query($sql);

    if ($result -> num_rows > 0)
    {
        while ($row = $result -> fetch_assoc())
        {
            $fName = $row["First_Name"];
            $lName = $row["Last_Name"];
            $DOB = $row["DOB"];
            $Gender = $row["Gender"];
            $Pass = $row["PASSWORD"];
            $quest = $row["Question"];
            $answer= $row["Answer"];
        }
    }

    ?>

    <form method="post" action="finalEdit.php">
        <h1>Edit Details !</h1>

        <label class="label-input">First Name</label>
        <input type="text" name = "Fname" placeholder="First Name" value="<?php echo $fName?> "required>

        <p>
            <label class="label-input">Last Name</label>
            <input type="text" name = "Lname" placeholder="First Name" value="<?php echo$lName?>" required>

        </p>
        <p>
            <label class="label-input">DOB</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="date" name = "dob" value="<?php echo$DOB?>" required>

        </p>
        <p>
            <label class="label-input">Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name = "gender" value="<?php echo$Gender?>" required>

        </p>
        <p>
            <label class="label-input">Password</label>&nbsp;&nbsp;
            <input type="text" name = "pass" value="<?php echo$Pass?>" required>

        </p>
        <p>
            <label class="label-input">Question</label>&nbsp;&nbsp;&nbsp;
            <input type="text" name = "quest" value="<?php echo$quest?>" readonly>

        </p>
        <p>
            <label class="label-input">Answer</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name = "ans" value="<?php echo$answer?>" required>

        </p>
        <br><br>
        <center> <input type="submit" name="submit" value="Make Changes"> </center>




    </form>






    <?php
            if(isset($_POST["submit"]))
            {
                header("Location:finalEdit.php");
            }
    ?>

</center>


</html>
