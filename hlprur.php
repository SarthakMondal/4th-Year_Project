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
  <title>Health Parameters</title>
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

    <div class="container" id="pdfbtnhld">
        <div class="row">
            <div class="col-md-8">
                <h3 style="font-family:Georgia, 'Times New Roman', Times, serif; font-weight: bold;"><i class="fa fa-file-text" aria-hidden="true"></i> View Your Health Parameters and get PDF Here</h3>
            </div>
            <div class="col-md-4">
                <button class="btn btn-secondary btn-lg" id="btnlgin" onclick="downLoadPdf()">Get Data <i class="fa fa-download" aria-hidden="true"></i> </button>
            </div>
            
        </div>
    </div>

    <div id="containerhealthparam">

      
        
    </div>

    <?php require "footer.php"; ?><!--footer php link-->


    <!--bootstrap js start-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js">
    </script>
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
    <script type="text/javascript" src="script/ajax.js?v=<?php echo time(); ?>"></script>
    <script type="text/javascript" src="script/script.js?v=<?php echo time(); ?>"></script>
    <!--bootstrap js end-->
    
</body>

</html>