<?php 
  require "config.php";
  session_start();
  if(isset($_SESSION['logged_stat']))
  {
    $role = $_SESSION['rle'];
    if($role == "user")
    {
      header("location:homeur.php? You are already Logged in");
    }
    
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sign Up</title>
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
      <form type="submit" class="p-4 p-md-5 border rounded-3 bg-light my-4" id="frmlgin" action="signpost.php" method="POST" onsubmit="return validateSignupForm()">        
        
        <div class="mb-3">
          <label for="uname" class="form-label">Your Name:</label>
          <input type="text" class="form-control" id="uname" name="uname">
          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
          <label for="mblno" class="form-label">Mobile No:</label>
          <input type="text" class="form-control" id="mblno" name="mblno">
        </div>
        <div class="mb-3">
          <label for="emlsgn" class="form-label">Email address:</label>
          <input type="email" class="form-control" id="emlsgn" name="emlsgn">
          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
          <label for="pwssgn" class="form-label">Password:</label>
          <input type="password" class="form-control" id="pwssgn" name="pwssgn">
        </div>
        <div class="mb-3">
          <div class="p-2 bd-highlight">Log in As</div>
          <div class="ms-auto p-2 bd-highlight">
            <select class="form-select" aria-label="Default select example" name="role" id="role">
              <option selected></option>
              <option value="user">User</option>
            </select>
          </div> 
        </div>
        <div class="mb-3">
          <label for="city" class="form-label">Your Area:</label>
          <input type="text" class="form-control" id="city" name="city">
        </div>
        <div class="mb-3">
          <label for="adres" class="form-label">Your Address:</label>
          <input type="text" class="form-control" id="adres" name="adres">
          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>

        <button type="submit" class="btn btn-secondary btn-lg" id="btnlgin">Sign Up </button>
        
        <!--error text --><h3 id="ermgs"></h3>

        <hr class="my-4">
          <div class="signinpart"><h5>One of US...<a href="index.php" id="sgnlnk"><b> Login Now</b></a> </h5></div>
        </hr>
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
    <script type="text/javascript" src="script/script.js"></script>
    <!--bootstrap js end-->
    
</body>

</html>