<?php 
session_start();
if(!(isset($_SESSION['login']))){
    header("location:login.php");
}
  include 'config/control.php';
  $c=new control();
  $email=$_SESSION['login'];

  $result1=$c->fetchprofile($email);
  $row1=mysqli_fetch_array($result1);
  $result2=$c->fetchnotification($email);
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pandemic Aid | NGO Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo pandemic.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <?php include 'header.php'?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li><a href="ngolist.php">Hospital</a></li>
          
        </ol>
        <h2>About NGO</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-6 entries">

          <h5 class="mt-4"><strong>Profile</strong></h5>
              <div class="row">
              <div class="col-lg-12 col-md-6 mt-3">
              <a href=""><i class="bi bi-person-fill" style="font-size:2rem;"></i></a>
              <span class="fontsb fs-5"> &nbsp<?php echo $row1['name']; ?></span>
              </div>
              <div class="col-lg-12 col-md-6 mt-3">
              <a href=""><i class="bi bi-telephone-fill" style="font-size:2rem;"></i></a>
              <span class="fontsb fs-5"> &nbsp<?php echo $row1['mobile']; ?></span>
              </div>
              <div class=" col-lg-12 col-md-6 mt-3">
              <a href=""><i class="bi bi-envelope-fill" style="font-size:2rem;"></i></a>
              <span class="fontsb fs-5">&nbsp <?php echo $row1['email']; ?></span></h5>
              </div>
              <div class=" col-lg-12 col-md-6 mt-3">
              <a href=""><i class="bi bi-key-fill" style="font-size:2rem;"></i></a>
              <span class="fontsb fs-5">&nbsp <?php echo $row1['password'] ?></span>
              </div>
              <div class=" col-lg-12 col-md-6 mt-4 flexr">
              <a href="#" class="btn btn-primary ">Update</a>
              </div>
              </div>           
            
          </div><!-- End blog entries list -->

          <div class="col-lg-6">

            <div class="sidebar">
             
            <h5 class="sidebar-title">Notifications</h5>
            <div class="scroll">
              <div class="row">
              <?php foreach($result2 as $row2): ?>
              <div class="col-lg-12 mt-3 colorbox1">
              <p class="fontsb1"><?php echo $row2['message']; ?></p>
              </div>
             <?php endforeach; ?>
              </div>
              </div>
              </div>
                            
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <?php include 'footer.php' ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>