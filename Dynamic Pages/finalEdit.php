<?php
require 'config.php';
session_start();

$email = $_SESSION["email"] ;

    $fName= $_POST["Fname"];
    $lName= $_POST["Lname"];
    $DOB= $_POST["dob"];
    $Gender= $_POST["gender"];
    $Pass= $_POST["pass"];
    $Answer= $_POST["ans"];

    $sql = "update client set First_Name = '$fName' , Last_Name = '$lName' , DOB = '$DOB',Gender = '$Gender',PASSWORD = '$Pass',Answer = '$Answer' where Email = '$email'";

    if($connection -> query($sql))
    {
        header("Location:profile.php");
    }
    else
    {
       echo "<script> alert('Updates Unsuccessful') </script>";
    }