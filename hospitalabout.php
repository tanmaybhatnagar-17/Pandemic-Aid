<?php 
  session_start();

  if (!(isset($_SESSION['login']))) {
    header("location:login.php");
  }
  $name=$_SESSION['name'];
  $email=$_SESSION['login'];

  $id=$_REQUEST['id'];
  include 'config/control.php';
  $c=new control();
  $res=$c->fetchhospibyid($id);
  $r1=mysqli_fetch_array($res);

  if (isset($_POST['submit'])) {
    $bed=$_POST['bed'];
    $mobile=$_POST['mobno'];
    $reason=$_POST['reason'];

    $result=$c->requestbed($email,$name,$id,$bed,$mobile,$reason);
    if ($result) {
      echo "<script>alert('Request Sent Successfully');</script>";
    }else{
      echo "<script>alert('404 error occured !!! Try again later');</script>";
    }

  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pandemic Aid | Hospital Bed</title>
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
          <li><a href="hospitallist.php">Hospital</a></li>
          
        </ol>
        <h2>About Hospital</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="uploads/hospital/<?php echo $r1['image']; ?>" alt="" class="img-fluid imgs">
              </div>

              <h2 class="entry-title">
                <a href="#"><?php echo $r1['hname'] ?> </a>
              </h2>

              <div class="entry-content">
                <pre class="tan">
<?php echo $r1['about']; ?>
                </pre>

              </div>

              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><?php echo $r1['category'] ?></li>
                </ul>

              </div>

            </article><!-- End blog entry -->

          
            
          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">
            <h5 class="sidebar-title mt-4">Details</h5>
              <div class="row">
      
              <div class=" col-lg-12 col-md-6 mt-2">
              <h6 class="ref">Total Number of Beds : <span class="fontsb"> <?php echo $r1['nbed']; ?></span></h6>
              </div>
              <div class=" col-lg-12 col-md-6 mt-2">
              <h6 class="ref">General Beds Available: <span class="fontsb"> <?php echo $r1['non_oxi_bed']; ?></span></h6>
              </div>
              <div class=" col-lg-12 col-md-6 mt-2">
              <h6 class="ref">Oxygen Beds Available: <span class="fontsb"> <?php echo $r1['oxi_bed']; ?></span></h6>
              </div>
              <div class=" col-lg-12 col-md-6 mt-2">
              <h6 class="ref">Ventilator Beds Available: <span class="fontsb"> <?php echo $r1['Venti_bed']; ?></span></h6>
              </div>
              <div class=" col-lg-12 col-md-6 mt-2">
              <h6 class="ref">Total Beds Available: <span class="fontsb"> <?php echo $r1['cbed']; ?></span></h5>
              </div>
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
              
              <div class="reply-form mt-5">
                <h4 class="sidebar-title">Request</h4>
                <p> <strong> Request Your Bed Over here.</strong></p>
                <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col form-group">
                    <select class="col-md-4 form-control drop-down  " name="bed" >
                        <option value=""> --- Select Bed ---</option>
                        <option value="General Bed">General Bed</option>
                        <option value="Oxygen Bed">Oxygen Bed</option>
                        <option value="Ventilator Bed">Ventilator Bed</option>
                      </select>               
                         </div>
                </div>

                  <div class="row mt-4">
                    <div class="col form-group">
                      <input type="tel" name="mobno" class="form-control" placeholder="Mobile Number" required/>
                    </div>
                  </div>
                 
                  <div class="row mt-4">
                    <div class="col form-group">
                      <textarea name="reason" rows='4' class="form-control" placeholder="Type your reason here" required></textarea >
                    </div>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary  mb-4 mt-4">Request</button>

                </form>

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