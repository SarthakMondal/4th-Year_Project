<?php

    require "config.php";
    session_start();
    unset($_SESSION['logged_stat']);

    if(session_destroy()) 
    {
        header("Location: myadmin_techwizard_login_page_2021.php?Logged out.....Please Login Again To Start dear Admin!");
    }
?>
