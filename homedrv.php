<?php 

    require "config.php";
    session_start();
    if(!isset($_SESSION['logged_stat']))
    {
        header("location:index.php? Please login to continue !");
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Profile</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--css link-->
  <link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
  <!--boostrap css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

  <header>
        <nav class="navbar sticky-top navbar-dark bg-dark">
          <div class="container-fluid">
            <h1 class="navbar-brand">Tech Wizard</h1>
          </div>
          

        </nav>
    </header>
    
    <div class="containerlogin" id="prfo">
      <div class="col-lg-8 m-auto d-block" id="pfleurr">

        <!--update part start
        <div class="mb-5" id="updthld">
          
        </div>
        update part end-->

      <div class="mb-5">
        <img src="images/avater.png" alt="user icon" id="avater"/>
      </div>

      <div class="mb-5">
        <?php

          $uid = $_SESSION['uid'];
          $chkuser = "SELECT * FROM `car_info` WHERE `id` = $uid";
          $val = mysqli_query($db, $chkuser) or die(mysqli_error($db));
          $row = mysqli_fetch_assoc($val);

        ?>
        <h3>Name: <?php echo $row['driver_name'] ?></h3>
        <h4>Car No: <?php echo $row['car_no'] ?></h4>
        <h4>Email ID: <?php echo $row['email'] ?></h4>
        <h4>Contact No: <?php echo $row['phone'] ?></h4>
        <h4>Role: <?php echo $row['role'] ?></h4>
        <h4>Area: <?php echo $row['asigned_area'] ?></h4>
      </div>
      
      <div class="mb-5">
        <a href="bkingdvr.php"><button type="button" class="btn btn-secondary btn-lg" id="btnprof1">Active Booking <i class="fa fa-toggle-on" aria-hidden="true"></i></button></a>
        <a href="logoutur.php"><button type="button" class="btn btn-secondary btn-lg" id="btnprof4" >LogOut Now <i class="fa fa-sign-out" aria-hidden="true"></i></button></a><br>

      </div>
      
    </div>
  </div>

  
  <?php require "footer.php"; ?><!--footer php link-->


  <!--bootstrap js start-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
  crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
  integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
  crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
  crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="script/script.js"></script>
  <!--bootstrap js end-->
  
</body>

</html>