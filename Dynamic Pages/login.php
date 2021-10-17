<?php
require 'config.php';

session_start();

$_SESSION["email"] = $_POST["email"];

if (isset($_POST["login"]))
{
    $Email = $_POST["email"];
    $Pass = $_POST["password"];

    global $connection;

    $query = "select * from client where Email = '$Email' and Password = '$Pass' ";
    $query_run = mysqli_query($connection , $query);

    if(mysqli_fetch_array($query_run)>0)
    {
        echo "<script> alert ('You\'re Logged in')</script>";
        header("Location:profile.php");
    }
    else
    {
        echo "<script> alert ('Logged in failed')</script>";
        header("Location:Login.html");
    }

}





