<?php
 require 'config.php';

 session_start();



    $email = $_SESSION["email"] ;



    $sql = "delete from client where Email = '$email'";

    if($connection -> query($sql))
    {
        session_unset();
        session_destroy();
        header("Location:Login.html");
    }
    else
    {
        echo "<script> alert('Updates Unsuccessful') </script>";
    }

