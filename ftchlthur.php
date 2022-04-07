<?php 

    require "config.php";
    session_start();
    if(!isset($_SESSION['logged_stat']))
    {
        header("location:index.php? Please login to continue !");
    }

    $id = $_SESSION['uid'];
    
    $qr1 = "SELECT * FROM `sensor1` WHERE `usr_id` = $id";
    $query1 = mysqli_query($db, $qr1) or die(mysqli_error($db));

    $qr2 = "SELECT * FROM `sensor2` WHERE `usr_id` = $id";
    $query2 = mysqli_query($db, $qr2) or die(mysqli_error($db));

    $qr3 = "SELECT * FROM `sensor3` WHERE `usr_id` = $id";
    $query3 = mysqli_query($db, $qr3) or die(mysqli_error($db));

    $qr4 = "SELECT * FROM `sensor4` WHERE `usr_id` = $id";
    $query4 = mysqli_query($db, $qr4) or die(mysqli_error($db));

    $qr5 = "SELECT * FROM `sensor5` WHERE `usr_id` = $id";
    $query5 = mysqli_query($db, $qr5) or die(mysqli_error($db));

    $qr6 = "SELECT * FROM `sensor6` WHERE `usr_id` = $id";
    $query6 = mysqli_query($db, $qr6) or die(mysqli_error($db));

    $a=0;
    $b=0;
    $c=0;
    $d=0;
    $e=0;
    $f=0;

    $n1=mysqli_num_rows($query1);
    $n2=mysqli_num_rows($query2);
    $n3=mysqli_num_rows($query3);
    $n4=mysqli_num_rows($query4);
    $n5=mysqli_num_rows($query5);
    $n6=mysqli_num_rows($query6);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Health Parameters</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--css link-->
  <link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
  <!--boostrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container-sm" id="wrapperhealth">
        <h4>Sensor Name: Sensor1</h4>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Patient Name</th>
              <th scope="col">Date & time</th>
              <th scope="col">Sensor Value</th>
            </tr>
          </thead>

          <?php 

            if($n1>0)
            {
                while($a<$n1)
                {
                    $list1=mysqli_fetch_assoc($query1);
                    $cid = $_SESSION['uid'];
                    $q = "SELECT `name` FROM `user_info` WHERE `id` = $cid";
                    $qry = mysqli_query($db, $q) or die(mysqli_error($db));
                    $name=mysqli_fetch_assoc($qry);
          ?>
        
          <tbody>
            <tr>
              <th scope="row"><?php echo $name['name'] ?></th>
              <td><?php echo $list1['dt_tm']; ?></td>
              <td><?php echo $list1['snr_val']; ?></td> 
            </tr>
          </tbody>

          <?php $a++; }} ?>

        </table>
    </div>

    <div class="container-sm" id="wrapperhealth">
        <h4>Sensor Name: Sensor2</h4>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Patient Name</th>
              <th scope="col">Date & time</th>
              <th scope="col">Sensor Value</th>
            </tr>
          </thead>
          <?php 

            if($n2>0)
            {
                while($b<$n2)
                {
                    $list2=mysqli_fetch_assoc($query2);
                    $cid2 = $list2['id'];
                    $cid = $_SESSION['uid'];
                    $q = "SELECT `name` FROM `user_info` WHERE `id` = $cid";
                    $qry = mysqli_query($db, $q) or die(mysqli_error($db));
                    $name=mysqli_fetch_assoc($qry);
          ?>
        
          <tbody>
            <tr>
              <th scope="row"><?php echo $name['name'] ?></th>
              <td><?php echo $list2['dt_tm']; ?></td>
              <td><?php echo $list2['snr_val']; ?></td> 
            </tr>
          </tbody>

          <?php $b++; }} ?>
        </table>
    </div>

    <div class="container-sm" id="wrapperhealth">
        <h4>Sensor Name: Sensor3</h4>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Patient Name</th>
              <th scope="col">Date & time</th>
              <th scope="col">Sensor Value</th>
            </tr>
          </thead>
          <?php 

            if($n3>0)
            {
                while($c<$n3)
                {
                    $list3=mysqli_fetch_assoc($query3);
                    $cid3 = $list3['id'];
                    $cid = $_SESSION['uid'];
                    $q = "SELECT `name` FROM `user_info` WHERE `id` = $cid";
                    $qry = mysqli_query($db, $q) or die(mysqli_error($db));
                    $name=mysqli_fetch_assoc($qry);
          ?>
        
          <tbody>
            <tr>
              <th scope="row"><?php echo $name['name'] ?></th>
              <td><?php echo $list3['dt_tm']; ?></td>
              <td><?php echo $list3['snr_val']; ?></td> 
            </tr>
          </tbody>

          <?php $c++; }} ?>
        </table>
    </div>

    <div class="container-sm" id="wrapperhealth">
        <h4>Sensor Name: Sensor4</h4>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Patient Name</th>
              <th scope="col">Date & time</th>
              <th scope="col">Sensor Value</th>
            </tr>
          </thead>
          <?php 

            if($n4>0)
            {
                while($d<$n4)
                {
                    $list4=mysqli_fetch_assoc($query4);
                    $cid4 = $list4['id'];
                    $cid = $_SESSION['uid'];
                    $q = "SELECT `name` FROM `user_info` WHERE `id` = $cid";
                    $qry = mysqli_query($db, $q) or die(mysqli_error($db));
                    $name=mysqli_fetch_assoc($qry);
          ?>
        
          <tbody>
            <tr>
              <th scope="row"><?php echo $name['name'] ?></th>
              <td><?php echo $list4['dt_tm']; ?></td>
              <td><?php echo $list4['snr_val']; ?></td> 
            </tr>
          </tbody>

          <?php $d++; }} ?>
        </table>
    </div>
    
    <div class="container-sm" id="wrapperhealth">
        <h4>Sensor Name: Sensor5</h4>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Patient Name</th>
              <th scope="col">Date & time</th>
              <th scope="col">Sensor Value</th>
            </tr>
          </thead>
          <?php 

            if($n5>0)
            {
                while($e<$n5)
                {
                    $list5=mysqli_fetch_assoc($query5);
                    $cid5 = $list5['id'];
                    $cid = $_SESSION['uid'];
                    $q = "SELECT `name` FROM `user_info` WHERE `id` = $cid";
                    $qry = mysqli_query($db, $q) or die(mysqli_error($db));
                    $name=mysqli_fetch_assoc($qry);
          ?>
        
          <tbody>
            <tr>
              <th scope="row"><?php echo $name['name'] ?></th>
              <td><?php echo $list5['dt_tm']; ?></td>
              <td><?php echo $list5['snr_val']; ?></td> 
            </tr>
          </tbody>

          <?php $e++; }} ?>
        </table>
    </div>
    

    <div class="container-sm" id="wrapperhealth">
        <h4>Sensor Name: Sensor6</h4>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Patient Name</th>
              <th scope="col">Date & time</th>
              <th scope="col">Sensor Value</th>
            </tr>
          </thead>
          <?php 

            if($n6>0)
            {
                while($f<$n6)
                {
                    $list6=mysqli_fetch_assoc($query6);
                    $cid6 = $list6['id'];
                    $cid = $_SESSION['uid'];
                    $q = "SELECT `name` FROM `user_info` WHERE `id` = $cid";
                    $qry = mysqli_query($db, $q) or die(mysqli_error($db));
                    $name=mysqli_fetch_assoc($qry);
          ?>
        
          <tbody>
            <tr>
              <th scope="row"><?php echo $name['name'] ?></th>
              <td><?php echo $list6['dt_tm']; ?></td>
              <td><?php echo $list6['snr_val']; ?></td> 
            </tr>
          </tbody>

          <?php $f++; }} ?>
        </table>
    </div>
    
    
</body>

      