<?php

   require "config.php";
   session_start();

   // username and password sent from form 
   $cust_email = mysqli_real_escape_string($db,$_POST['emllgn']);
   $cust_rle = mysqli_real_escape_string($db,$_POST['rlelg']);
   

   if($cust_rle=="user")
   {
      $cust_pass = md5(mysqli_real_escape_string($db,$_POST['pwslgn']));
      $logincheck = "SELECT * FROM `user_info` WHERE `email` = '$cust_email' and `password` = '$cust_pass' and `role` = '$cust_rle'";
   }

   else
   {
      $cust_pass = mysqli_real_escape_string($db,$_POST['pwslgn']);
      $logincheck = "SELECT * FROM `car_info` WHERE `email` = '$cust_email' and `password` = '$cust_pass' and `role` = '$cust_rle'";
   }
   
   

   $loginres = mysqli_query($db,$logincheck);
   
   
   $count = mysqli_num_rows($loginres);
   
   // If loginres matched $myusername and $cust_pass, table row must be 1 row



   
   if($count >0) 
   {

      $row = mysqli_fetch_assoc($loginres);

      $_SESSION['logged_stat'] = true;
      $_SESSION['uid'] = $row['id'];
      $rl = $row['role'];
      
      if($rl == 'user')
      {
         header("location: homeur.php?You're logged in !");
      }

      else
      {
         header("location: homedrv.php?You're logged in !");
      }

   }

   else 
   {
      $error = "Your Email or Password is invalid";
      header("location: index.php?".$error);
   }

?>