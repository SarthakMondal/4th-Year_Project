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
  <title>Add Ambulance</title>
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

    <div class="containerlogin" id="prfo">
      
      <form type="submit" class="p-4 p-md-5 border rounded-3 bg-light my-4" id="frmlgin" action="carpostadn.php" method="POST" onsubmit="return validateSignupForm()">        
        
        <div class="mb-3">
          <label for="dname" class="form-label">Driver Name:</label>
          <input type="text" class="form-control" id="dname" name="dname">
          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
          <label for="dimg" class="form-label">Car Image:</label>
          <input type="text" class="form-control" id="dimg" name="dimg">
          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
          <label for="dmblno" class="form-label">Mobile No:</label>
          <input type="text" class="form-control" id="dmblno" name="dmblno">
        </div>
        <div class="mb-3">
          <label for="emlsgnd" class="form-label">Email address:</label>
          <input type="email" class="form-control" id="emlsgnd" name="emlsgnd">
          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
          <label for="pwssgnd" class="form-label">Password:</label>
          <input type="password" class="form-control" id="pwssgnd" name="pwssgnd">
        </div>
        <div class="mb-3">
          <div class="p-2 bd-highlight">Role:</div>
            <div class="ms-auto p-2 bd-highlight">
              <select class="form-select" aria-label="Default select example" name="role" id="role">
                <option selected></option>
                <option value="driver">Driver</option>
              </select>
            </div> 
        </div>
        <div class="mb-3">
          <label for="dcity" class="form-label">Area Assigned:</label>
          <input type="text" class="form-control" id="dcity" name="dcity">
        </div>
        <div class="mb-3">
          <label for="dcrn" class="form-label">Car No:</label>
          <input type="text" class="form-control" id="dcrn" name="dcrn">
          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="d-flex bd-highlight mb-3">
          <div class="p-2 bd-highlight">Availability:</div>
          <div class="ms-auto p-2 bd-highlight">
            <select class="form-select" aria-label="Default select example" id="rlelg" name="rlelg">
              <option value="YES">YES</option>
              <option value="NO">NO</option>
            </select>
          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-lg" style="height: 60px;">Add Ambulance </button>
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