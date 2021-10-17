<?php
require 'config.php';


$pass = $_POST["chk_pass"];
$con_pass = $_POST["Pass"];

if ($pass == $con_pass)
{
    //declare variable
    $file = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
    $email = $_POST["Email"];
    $fName = $_POST["Fname"];
    $lName = $_POST["Lname"];
    $Gender = $_POST["gender"];
    $User_Type = $_POST["userType"];
    $Password = $_POST["Pass"];
    $Question = $_POST["pass_question"];
    $Answer = $_POST["pass_question_answer"];
    $DOB = $_POST["dob"];

    $sql = "insert into client(IProfile,Email,First_Name,Last_Name,Gender,User_Type,PASSWORD,Question,Answer,DOB) values('$file','$email','$fName','$lName','$Gender','$User_Type','$Password','$Question','$Answer','$DOB')";

    if ($connection->query($sql)) {
        header("Location:Login.html");
    } else {
        echo "not ok";
    }
    $connection->close();


}

else{
    echo "<script> alert('Password Mismatch , Try Again')</script>";
    header("Location:CNA.html");
}

