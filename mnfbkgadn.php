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
  <title>Active Bookings</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--css link-->
  <link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
  <!--boostrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <?php require "headeradn.php"; ?><!--header php link-->

    <div class="containerlogin" id="bkingbg">

    <?php 

        $qry = "SELECT * FROM `actv_booking`";
        $sql = mysqli_query($db, $qry) or die(mysqli_error($db));   

        $i=0;
        $n = mysqli_num_rows($sql);
    ?>

    <?php

        if($n==0)
        {
            echo "<h3 style='color: white; padding-top: 20vh; text-align: center;'>No Active Bookings Now</h3>";
        }

        else
        {
            while($i<$n)
            {
                $row1 = mysqli_fetch_assoc($sql);
                $cr_id=$row1['car_id'];
                $usr_id=$row1['user_id'];

                $qry2 = "SELECT * FROM `car_info` WHERE `id` = $cr_id ";
                $query2 = mysqli_query($db, $qry2) or die(mysqli_error($db));
                $row2 = mysqli_fetch_assoc($query2);

                $qry3 = "SELECT * FROM `user_info` WHERE `id` = $usr_id ";
                $query3 = mysqli_query($db, $qry3) or die(mysqli_error($db));
                $row3 = mysqli_fetch_assoc($query3);

                $pt_name=$row3['name'];
                $adres=$row3['address'];
                $pph_no=$row3['phone'];

                $dv_name=$row2['driver_name'];
                $cr_no=$row2['car_no'];
                $ph_no=$row2['phone'];

                $st_tm=$row1['str_tme'];
                $ed_tm=$row1['end_tme'];
                $status=$row1['status'];

    ?>

        <div class="col-lg-8 d-block" id="pfleurr">
            <h4>Patient Name: <?php echo $pt_name?> </h4>
            <h4>Patient Address: <?php echo $adres?> </h4>
            <h4>Patient Contact: <?php echo $pph_no?> </h4>
            <h4>Driver Name: <?php echo $dv_name?> </h4>
            <h4>Ambulance No: <?php echo $cr_no?> </h4>
            <h4>Driver Contact: <?php echo $ph_no?> </h4>
            <h4>Booking Started: <?php echo $st_tm ?> </h4>
            <h4>Booking Ended: <?php echo $ed_tm?> </h4>
            <h4>Booking Status: <?php echo $status?> </h4>

            <?php

                if($status == "Completed")
                {
                    
            ?>

                <a href="rmvitadn.php?aid=<?php echo $row1['id'] ?>"><button class="btn btn-secondary btn-lg" id="btnlgin">Remove It</button></a>
                
                <?php } ?>
            
        </div>
    
    <?php $i++; }} ?>
        
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


