<?php 
    require "config.php";
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <?php require "headeradn.php"; ?><!--header php link-->

    <?php

        $c_id = $_GET['id'];
        $chkuser = "SELECT * FROM `car_info` WHERE `id` = $c_id ";
        $val = mysqli_query($db, $chkuser) or die(mysqli_error($db));
        $list2 = mysqli_fetch_assoc($val);

    ?>

    <div class="containerlogin" id="prfo">
        <div class="col-lg-8 m-auto d-block" id="pfleurr">
            <form method="POST" type="submit" action="updadn.php?id=<?php echo $c_id ?>">          
                <div class="mb-6">
                <label for="upname" class="form-label">Name:</label>
                <input type="text" class="form-control" id="upname" name="upname" required value="<?php echo $list2['driver_name']; ?>">
                </div>
                <div class="mb-6">
                <label for="carno" class="form-label">Car_No:</label>
                <input type="text" class="form-control" id="carno" name="carno" required value="<?php echo $list2['car_no']; ?>">
                </div>
                <div class="mb-6">
                <label for="upeml" class="form-label">Email ID:</label>
                <input type="email" class="form-control" id="upeml" name="upeml" required value="<?php echo $list2['email']; ?>">
                </div>
                <div class="mb-6">
                <label for="upmblno" class="form-label">Mobile No:</label>
                <input type="text" class="form-control" id="upmblno" name="upmblno" required value="<?php echo $list2['phone']; ?>">
                </div>
                <div class="mb-6">
                <label for="uppwssgn" class="form-label">Password:</label>
                <input type="password" class="form-control" id="uppwssgn" name="uppwssgn" required>
                </div>
                <div class="mb-6">
                <label for="city" class="form-label">Area:</label>
                <input type="uptext" class="form-control" id="upcity" name="upcity" required value="<?php echo $list2['asigned_area']; ?>">
                </div>
                <div class="mb-6">
                <label for="upava" class="form-label">Availability:</label>
                <input type="text" class="form-control" id="upava" name="upava" required value="<?php echo $list2['availability']; ?>">
                </div>

                <button type="submit" class="btn btn-secondary btn-lg" id="btnlgin">Update Now</button>
            </form>
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


