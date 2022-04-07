<?php

   require "config.php";
   session_start();

   // username and password sent from form 
   $cust_unm = mysqli_real_escape_string($db,$_POST['adnur']);
   $cust_pws = mysqli_real_escape_string($db,$_POST['adnpws']);

   if($cust_unm == 'i_am_the_admin' && $cust_pws == 'password@myadmin^2021')
   {
        $_SESSION['logged_stat'] = true;
       header("location:homeadn.php? Welcome Admin, You have successfully Logged In");
   }

   else
   {
        header("location:myadmin_techwizard_login_page_2021.php? Wrong Credentials");
   }

?>
   