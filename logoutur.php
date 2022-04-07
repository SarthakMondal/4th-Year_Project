<?php

    require "config.php";
    session_start();
    unset($_SESSION['logged_stat']);
    unset($_SESSION['uid']);

    if(session_destroy()) 
    {
        header("Location: index.php?Logged out.....Please Login Again To Start!");
    }
?>
