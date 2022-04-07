<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
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
           
    <section class="py-5 text-center containerimage">
      <div class="rows py-lg-5">
        <div class="col-sm-12">
          <h1 class="display-5 fw-bold moreaboutus">Tech Wizard</h1>
          <p class="lead">your best care is our rehabilitation is our responsibility and only priority</p>
          <a href="profileur.php"><button class="btn btn-secondary btn-lg" id="btnlgin">My Profile</button></a>
        </div>
      </div>
    </section>

   <main>
      <h1 class="visually-hidden">Heroes examples</h1>

      <div class="px-4 py-5 my-2">
        <h1 class="display-7 fw-bold text-center">More About us</h1>
        <div class="col-lg-12 mx-auto">
          <p class="lead mb-10 text-justify fw-bold" id="texthome">
            Booking will be accepted anytime from anywhere. 
            Ambulances are equipped with a tracker that will 
            ensure that the roads are free from trafic and leads 
            to a hassel free travel for the patient. This will avoid 
            late treatment.
            Anyone can easily book one ambulance according to their 
            need and for the emergency purpose the ambulance available 
            in In user's locality will automatically be shown in the website. 
            User can easily track the ambulance and can contact the ambulance driver.
            Health checkup system has also been setup for the patients 
            in the ambulance. This will help the patient to be ready with 
            their medical reports and further checkup in the hospital would 
            be easy and fast as well.The updated data will be easily available 
            in the website.
            
          </p>
        </div>
      </div>
    <main>
  
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="containers marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row" id="lastpart">
      <h3 class="display-7 fw-normal text-center">What Makes us Different</h3><br><br><br><br>
      <div class="col-lg-4" id="flexinglast">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" t src="images/i3.jpg">
        <h4 class="Heading">24x7 Costumer Support</h4>
        <p class="para">For any help feel free to contact our costumer support.</p>  
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4" id="flexinglast">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="images/i4.png">
        <h4>Revolutionsing Healthcare</h4>
        <p>Health checkup system ensures patient to be ready with their medical reports.</p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4" id="flexinglast">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="images/i5.jpg">
        <h4>Hassel-free Roads </h4>
        <p>Enables trafic free travel while reaching to the hospital.</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
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