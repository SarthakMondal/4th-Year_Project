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
  <title>My Booking</title>
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

    <div class="containerlogin" id="bkingbg">
        <div class="container-xxl" id="subdivone">
        <h2 id="subheading"><i class="fa fa-ambulance" aria-hidden="true"></i> Your Active Bookings</h2>

            <?php

                $id = $_SESSION['uid'];
                $qry1 = "SELECT * FROM `actv_booking` WHERE `user_id` = $id";
                $query1 = mysqli_query($db, $qry1) or die(mysqli_error($db));
                $row1 = mysqli_fetch_assoc($query1);

                $n = mysqli_num_rows($query1);

                if($n==0)
                {
                    echo "<h3 style='color: white; padding-top: 20px;'> NO Active Bookings found </h3>";
                }

                else
                {
                    $dvr_id=$row1['car_id'];
                    $qry2 = "SELECT * FROM `car_info` WHERE `id` = $dvr_id";
                    $query2 = mysqli_query($db, $qry2) or die(mysqli_error($db));
                    $row2 = mysqli_fetch_assoc($query2);

                    $dv_name=$row2['driver_name'];
                    $im_cr=$row2['images'];
                    $cr_no=$row2['car_no'];
                    $ph_no=$row2['phone'];
                    $st_tm=$row1['str_tme'];
                    $ed_tm=$row1['end_tme'];
                    $uq_key=$row1['order_id'];
                
                ?>

            <div class="card ">
              <img src="<?php echo $im_cr; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-text" style="line-height: 30px;">
                  <b>Driver Name:</b> <?php echo $dv_name; ?><br>
                  <b>Ambulance Number:</b> <?php echo $cr_no; ?><br>
                  <b>Phone No:</b> <?php echo $ph_no; ?><br>
                  <b>Start Time:</b> <?php echo $st_tm; ?><br>
                  <b>End Time:</b> <?php echo $ed_tm; ?><br>
                  <b>Match Key:</b> <?php echo $uq_key; ?>
                </h5>
              </div>
            </div>

        <?php } ?>

        </div>

        <div class="container-xxl" id="subdivone">
            
            <h2 id="subheading"><i class="fa fa-map-marker" aria-hidden="true"></i> Live Tracking System</h2>
            <div id="mycanvas">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.535593464324!2d88.45873361427272!3d22.521600940517978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0274a1c0115249%3A0x975599390971e184!2sBengal%20Institute%20Of%20Technology!5e0!3m2!1sen!2sin!4v1623592736846!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
    <script type="text/javascript" src="script/script.js?v=<?php echo time(); ?>"></script>
    <!--bootstrap js end-->
    
</body>

</html>