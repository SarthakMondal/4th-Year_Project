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
  <title>All Ambulances</title>
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

    <div class="containerlogin" id="prfo">
        <div class="col-lg-8 m-auto d-block" id="pfleurr">
            <table class="table table-bordered" id="tbleadnvu">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Car_no</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Area</th>
                        <th>password</th>
                        <th>Availability</th>
                        <th>Update</th>
                        <th>Remove</th>
                    </tr>
                </thead>

                <?php 

                    $ur = "SELECT * FROM `car_info`";
                    $query1 = mysqli_query($db, $ur) or die(mysqli_error($db));
                    $i=0;
                    $n=mysqli_num_rows($query1);
                        
                ?>

                <?php

                    if($n>0 )
                    {
                        while($i<$n)
                        {
                            $list=mysqli_fetch_assoc($query1);
                            $cid = $list['id'];
                ?>
                <tbody>
                    
                    <tr>
                        <td><?php echo $list['driver_name']; ?></td>
                        <td><?php echo $list['car_no']; ?></td>
                        <td><?php echo $list['email']; ?></td>
                        <td><?php echo $list['phone']; ?></td>
                        <td><?php echo $list['asigned_area']; ?></td>
                        <td><?php echo $list['password']; ?></td>
                        <td><?php echo $list['availability']; ?></td>
                        <td><a href="updfmadn.php?id=<?php echo $cid ?>"><button type="button" class="btn btn-success">Update <i class="fa fa-pencil" aria-hidden="true"></i></button></a></td>
                        <td><a href="dltadn.php?id=<?php echo $cid ?>"><button type="button" class="btn btn-danger">Delete <i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
                    </tr>

                </tbody>
                
                <?php $i++; }} ?>
            </table>
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


