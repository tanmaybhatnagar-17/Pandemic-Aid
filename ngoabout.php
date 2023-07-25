<?php 
session_start();
  $id=$_REQUEST['id'];
  include 'config/control.php';
  $c=new control();
  $res=$c->fetchngobyid($id);
  $r1=mysqli_fetch_array($res);
  $email=$r1['email'];
  $result=$c->fetchannouncementbyid($email);
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

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="uploads/ngo/<?php echo $r1['image']; ?>" alt="" class="img-fluid imgs">
              </div>

              <h2 class="entry-title">
                <a href="#"><?php echo $r1['oname'] ?> </a>
              </h2>

              <div class="entry-content">
                <pre class="tan">
<?php echo $r1['about']; ?>
                </pre>

              </div>

              
            </article><!-- End blog entry -->
            
          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">
            <h5 class="sidebar-title">Our Campaigns</h5>
            <div class="scroll">
              <div class="row">
                <?php foreach($result as $row): ?>
              <div class="col-lg-12 col-md-6 mt-3 ngopadding colorbox1">

              <div class="col-lg-12 col-md-6">
              <span class="fontsb mb-2"><strong><?php echo $row['title']; ?></strong></span>
              </div>
              <div class="col-lg-12 col-md-6">
              <a href=""><i class="bi bi-calendar-event-fill" ></i></a>
              <span class="fontsb "> &nbsp<?php echo $row['date']; ?></span>
              </div>
              <div class="col-lg-12 col-md-6">
              <a href=""><i class="bi bi-clock-fill" ></i></a>
              <span class="fontsb "> &nbsp<?php echo $row['time']; ?></span>
              </div>
              <div class="col-lg-12 col-md-6">
              <a href=""><i class="bi bi-geo-alt-fill" ></i></a>
              <span class="fontsb "> &nbsp<?php echo $row['location']; ?></span>
              </div>
              <div class="col-lg-12 col-md-6 ">
              <a href=""><i class="bi bi-person-fill" ></i></a>
              <span class="fontsb "> &nbsp<?php echo $row['coordinator']; ?></span>
              </div>
              <div class="col-lg-12 col-md-6 ">
              <a href=""><i class="bi bi-telephone-fill" ></i></a>
              <span class="fontsb "> &nbsp<?php echo $row['mobile']; ?></span>
              </div>
            </div>      
            <?php endforeach; ?>
        
              </div>
              </div>

            <h5 class="sidebar-title mt-4">Details</h5>
              <div class="row">
              <div class="col-lg-12 col-md-6 mt-3">
              <a href=""><i class="bi bi-telephone-fill"></i></a>
              <span class="fontsb"> &nbsp<?php echo $r1['mob']; ?></span>
              </div>
              <div class=" col-lg-12 col-md-6 mt-3">
              <a href=""><i class="bi bi-geo-alt-fill" ></i></a>
              <span class="fontsb">&nbsp <?php echo $r1['address']; ?></span>
              </div>
              <div class=" col-lg-12 col-md-6 mt-3">
              <a href=""><i class="bi bi-envelope-fill" ></i></a>
              <span class="fontsb">&nbsp <?php echo $r1['email']; ?></span></h5>
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