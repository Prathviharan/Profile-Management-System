<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "funbrain";

$connection = new mysqli("$hostname","$username","$password","$database");

if ($connection -> connect_error)
{
    die("There is an error while connecting".$connection->connect_error);
}


?>