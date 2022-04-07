<?php 
  require "config.php";
  session_start();
  if(isset($_SESSION['logged_stat']))
  {
      header("location:homeadn.php? You are already Logged in");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--css link-->
  <link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
  <!--boostrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

  <header>
      <nav class="navbar sticky-top navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="home.php">Tech Wizard</a>
        </div>
        

      </nav>
  </header>

  <!----body of login form--->
  <div class="containerlogin">
    <div class="col-lg-8 m-auto d-block">    
      <!--login form-->
      <form class="p-4 p-md-5 border rounded-3 bg-light my-4" id="frmlgin" action="logadn.php" method="POST" onsubmit="return validateLoginForm()">        
        <div class="d-flex bd-highlight mb-3">
          <div class="p-2 bd-highlight">Admin Login</div>

        </div>
        <div class="mb-3">
          <label for="adnur" class="form-label">Username:</label>
          <input type="text" class="form-control" id="adnur" name="adnur">
          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
          <label for="adnpws" class="form-label">Password:</label>
          <input type="password" class="form-control" id="adnpws" name="adnpws">
        </div>
    
        <button type="submit" class="btn btn-secondary btn-lg" id="btnlgin">Log in </button>
      </form>
      <!--login form ends-->
    </div>
  </div>
  <!----body of login form ends---->
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