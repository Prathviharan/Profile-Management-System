<?php

//start the session
session_start();

//remove session variables
session_unset();

//remove the sessions
session_destroy();

header("Location:Login.html");