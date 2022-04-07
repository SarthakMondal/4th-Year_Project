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

    <?php require "headerur.php"; ?><!--header php link-->
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
          $chkuser = "SELECT * FROM `user_info` WHERE `id` = $uid";
          $val = mysqli_query($db, $chkuser) or die(mysqli_error($db));
          $row = mysqli_fetch_assoc($val);

        ?>
        <h2>User Profile</h2>
        <h4>User ID: <?php echo $row['id'] ?></h4>
        <h4>Name: <?php echo $row['name'] ?></h4>
        <h4>Email ID: <?php echo $row['email'] ?></h4>
        <h4>Contact No: <?php echo $row['phone'] ?></h4>
        <h4>Role: <?php echo $row['role'] ?></h4>
        <h4>Area: <?php echo $row['area'] ?></h4>
        <h4>Address: <?php echo $row['address'] ?></h4>
      </div>
      
      <div class="mb-5">
        <a href="addbkgur.php"><button type="button" class="btn btn-secondary btn-lg" id="btnprof1">Book Vehical <i class="fa fa-ambulance" aria-hidden="true"></i></button></a>
        <a href="hlprur.php"><button type="button" class="btn btn-secondary btn-lg" id="btnprof2">Patient Data <i class="fa fa-table" aria-hidden="true"></i> </button></a><br>
        <button type="button" class="btn btn-secondary btn-lg" id="btnprof3" data-bs-toggle="modal" data-bs-target="#exampleModal">Update Profile <i class="fa fa-user" aria-hidden="true"></i> </button>
        <a href="logoutur.php"><button type="button" class="btn btn-secondary btn-lg" id="btnprof4" >LogOut Now <i class="fa fa-sign-out" aria-hidden="true"></i></button></a><br>

      </div>
      
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Profile Update</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" type="submit" action="updtpfur.php">          
            <div class="mb-6">
              <label for="upname" class="form-label">Your Name:</label>
              <input type="text" class="form-control" id="upname" name="upname" required value="<?php echo $row['name']; ?>">
            </div>
            <div class="mb-6">
              <label for="upeml" class="form-label">Your Email ID:</label>
              <input type="email" class="form-control" id="upeml" name="upeml" required value="<?php echo $row['email']; ?>">
            </div>
            <div class="mb-6">
              <label for="upmblno" class="form-label">Mobile No:</label>
              <input type="text" class="form-control" id="upmblno" name="upmblno" required value="<?php echo $row['phone']; ?>">
            </div>
            <div class="mb-6">
              <label for="uppwssgn" class="form-label">Password:</label>
              <input type="password" class="form-control" id="uppwssgn" name="uppwssgn" required>
            </div>
            <div class="mb-6">
              <label for="city" class="form-label">Your Area:</label>
              <input type="uptext" class="form-control" id="upcity" name="upcity" required value="<?php echo $row['area']; ?>">
            </div>
            <div class="mb-6">
              <label for="upadres" class="form-label">Your Address:</label>
              <input type="text" class="form-control" id="upadres" name="upadres" required value="<?php echo $row['address']; ?>">
            </div>

            <button type="submit" class="btn btn-secondary btn-lg" id="btnlgin">Update Now</button>
          </form>
        </div>
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