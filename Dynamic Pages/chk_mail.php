<?php
require 'config.php';


session_start();

$_SESSION["email"] = $_POST["email"];

$email = $_SESSION["email"] ;
//Fpass Page

    global $connection;


    $query = "select * from client where Email = '$email'";
    $query_run = mysqli_query($connection, $query);

    if (mysqli_fetch_array($query_run) > 0) {
        $url = "Question.php?email=".$email;
        header("Location:$url");

    } else {
        echo "<script> alert ('Incorrect Email !!!')</script>";
        header("Location:FPASS.php");
    }





?>

