<?php
require 'config.php';

session_start();

$_SESSION["answer"] = $_POST["answer"];

$email = $_SESSION["email"];

$answer = $_SESSION["answer"];

global $connection;


$query = "select Answer from client where Answer = '$answer'";
$query_run = mysqli_query($connection, $query);

if (mysqli_fetch_array($query_run) > 0) {
    $url = "resetPassSite.php?answer=".$answer;
    header("Location:$url");

} else {
    header("Location:FPASS.php");
}


