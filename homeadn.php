<?php 

    require "config.php";
    session_start();
    if(!isset($_SESSION['logged_stat']))
    {
        header("location:myadmin_techwizard_login_page_2021.php? Please login to continue !");
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
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

    <?php require "headeradn.php"; ?><!--header php link-->

    <?php

      $qry1 = "SELECT * FROM `user_info`";
      $query1 = mysqli_query($db, $qry1) or die(mysqli_error($db));
      $qry2 = "SELECT * FROM `car_info`";
      $query2 = mysqli_query($db, $qry2) or die(mysqli_error($db));
      $qry3 = "SELECT * FROM `actv_booking`";
      $query3 = mysqli_query($db, $qry3) or die(mysqli_error($db));
      
      $nu = mysqli_num_rows($query1);
      $na = mysqli_num_rows($query2);
      $nb = mysqli_num_rows($query3);

    ?>

    <div class="containerlogin" id="prfo">
      <div class="col-lg-8 m-auto d-block" id="pfleurr">

        <div class="mb-5">
            <img src="images/avater.png" alt="user icon" id="avater"/>
            <h3>Welcome Admin,</h3>
            <h4><i class="fa fa-user-circle-o" aria-hidden="true"></i> Number of User: <?php echo $nu ?></h4>
            <h4><i class="fa fa-ambulance" aria-hidden="true"></i> Number of Ambulances: <?php echo $na ?></h4>
            <h4><i class="fa fa-book" aria-hidden="true"></i> Number of Active Bookings: <?php echo $nb ?></h4>
            <a href="logoutadn.php"><button type="button" class="btn btn-secondary btn-lg" id="btnprof4" >LogOut Now <i class="fa fa-sign-out" aria-hidden="true"></i></button></a><br>

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