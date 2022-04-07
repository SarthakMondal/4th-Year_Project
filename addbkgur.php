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
  <title>Book Ambulance</title>
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
      <h2 id="subheading"><i class="fa fa-ambulance" aria-hidden="true"></i> Available ambulances in your locality </h2>

      <?php 

        $uid = $_SESSION['uid'];
        $ur = "SELECT `area` FROM `user_info` WHERE `id` = $uid";
        $query1 = mysqli_query($db, $ur) or die(mysqli_error($db));
        $row = mysqli_fetch_assoc($query1);
        $area = $row['area'];
        //echo $area;
        
        $show1 = "SELECT * FROM `car_info` WHERE `asigned_area` = '$area'";
        $query2 = mysqli_query($db, $show1) or die(mysqli_error($db));
        //$row = mysqli_fetch_assoc($query1);

        $n1 = mysqli_num_rows($query2);
        $i = 0;
        if($n1 == 0)
        {
          echo "<h3 style='color:white; padding-top:15px;'>No Ambulance available in Your Area</h3>";
        }

        else
        {
          while($i < $n1)
          {
            $list1 = mysqli_fetch_assoc($query2);
      ?>
      
          <div class="card ">
              <img src="<?php echo $list1['images']; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-text" style="line-height: 30px;">
                  <b>Driver Name:</b> <?php echo $list1['driver_name']; ?><br>
                  <b>Ambulance Number:</b> <?php echo $list1['car_no']; ?><br>
                  <b>Assigned Area:</b> <?php echo $list1['asigned_area']; ?><br>
                  <b>Phone No:</b> <?php echo $list1['phone']; ?><br>
                  <?php
                    if($list1['availability']=='YES')
                    {
                      echo ("<b>Availability:</b> <i style='color:green;'> YES </i></h5>");
                    }
                    
                    else
                    {
                      echo ("<b>Availability:</b> <i style='color:red;'> NO </i></h5>");
                    }
                  ?>
                <a href="booking.php?cid=<?php echo $list1['id']?> & uid=<?php echo $_SESSION['uid']?>"><button type="button" class="btn btn-lg btn-primary">Book Now</button></a>
              </div>
          </div>

        <?php $i++; }} ?>
      
    </div>
  
    <div class="container-xxl" id="subdivtwo">
      <h2 id="subheading"><i class="fa fa-ambulance" aria-hidden="true"></i> Other available ambulances</h2>

      <?php

        $show2 = "SELECT * FROM `car_info` WHERE `asigned_area` != '$area'";
        $query3 = mysqli_query($db, $show2) or die(mysqli_error($db));
        //$row = mysqli_fetch_assoc($query1);

        $n2 = mysqli_num_rows($query3);
        $j = 0;

        if($n2 == 0)
        {
          echo "<h3>No Ambulance Here</h3>";
        }

        else
        {
          while($j < $n2)
          {
            $list2 = mysqli_fetch_assoc($query3);
      ?>
    
          <div class="card ">
              <img src="<?php echo $list2['images']; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-text" style="line-height: 30px;">
                  <b>Driver Name:</b> <?php echo $list2['driver_name']; ?><br>
                  <b>Ambulance Number:</b> <?php echo $list2['car_no']; ?><br>
                  <b>Assigned Area:</b> <?php echo $list2['asigned_area']; ?><br>
                  <b>Phone No:</b> <?php echo $list2['phone']; ?><br>
                  <?php
                    if($list2['availability']=='YES')
                    {
                      echo ("<b>Availability:</b> <i style='color:green;'> YES </i></h5>");
                    }
                    
                    else
                    {
                      echo ("<b>Availability:</b> <i style='color:red;'> NO </i></h5>");
                    }
                  ?>
                <a href="booking.php?cid=<?php echo $list2['id']?> & uid=<?php echo $_SESSION['uid']?>"><button type="button" class="btn btn-lg btn-primary">Book Now</button></a>
              </div>
          </div>

      <?php $j++; }} ?>
      
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