<!DOCTYPE html>
<html lang="en">

<head>
  <title>Complain</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--css link-->
  <link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
  <!--boostrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <?php require "headerur.php"; ?><!--header php link-->
    <div class="containerlogin">
    <div class="col-lg-8 m-auto d-block">

      <!--login form-->
      <form class="p-4 p-md-5 border rounded-3 bg-light my-4" id="frmcmpl" action="addcomplain.php" method="POST">        
       
        <div class="mb-3">
          <label for="nmcpl" class="form-label"> Your Name</label>
          <input type="text" class="form-control" id="nmcpl" name="nmcpl" required>
        
        </div>
        <div class="mb-3">
          <label for="vclnm" class="form-label">Vechicle Number</label>
          <input type="text" class="form-control" id="vclnm" name="vclnm" required>
        </div>

        <div class="mb-3">
          <label for="cmplnbd" class="form-label">Your Complains</label>
          <input type="text" class="form-control" id="cmplnbd" name="cmplnbd" required>
        </div>
    
        <button type="submit" class="btn btn-secondary btn-lg" id="btnlgin">Submit </button>
        
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