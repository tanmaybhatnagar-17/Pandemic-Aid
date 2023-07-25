<?php
session_start();

if(! (isset($_SESSION['login']))){
  header("location:login.php");
}
  include '../config/control.php';
  $id=$_SESSION['login'];
  $c=new control();
  $result1=$c->fetchbedsbyid($id);
  $row1=mysqli_fetch_array($result1);
  if (isset($_POST['submit'])) {
  
    $totalbed=$_POST['tbed'];
    $noxi=$_POST['noxibed'];
    $oxi=$_POST['oxibed'];
    $venti=$_POST['ventibed'];

    $result2=$c->updatebed($totalbed,$noxi,$oxi,$venti);
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pandemic Aid | Hospital | Manage Bed</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- icons -->
  <link href="../assets/img/logo pandemic.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!--  Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  
</head>

<body>

 <!-- ======= Header ======= -->
 <?php include 'header.php'?>
  <!-- End Header -->
  
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Manage Bed</li>
        </ol>
        
      </div>
    </section><!-- End Breadcrumbs -->
<section id="Doc Registration form" class="contact">

<div class="container">
<div class="col-lg-6 ">
            <form action="" method="post" enctype="multipart/form-data" class="">
              <div class="row gy-4">

                <div class="col-md-8">
                  <p>Total beds</p>
                  <input type="text" name="tbed" class="form-control" value="<?php echo $row1['nbed']; ?>" required>
                </div>

                <div class="col-md-8 ">
                  <p>Non-Oxygen Beds</p>
                  <input type="text" class="form-control" name="noxibed" value="<?php echo $row1['non_oxi_bed']; ?>" required>
                </div>

                <div class="col-md-8 ">
                  <p>Oxygen Beds</p>
                  <input type="text" class="form-control" name="oxibed" value="<?php echo $row1['oxi_bed']; ?>" required>
                </div>

                <div class="col-md-8 ">
                  <p>Ventilator Beds</p>
                  <input type="text" class="form-control" name="ventibed" value="<?php echo $row1['Venti_bed']; ?>" required>
                </div>
                 <div class="col-md-8">   
                  <button type="submit" name="submit" class="col-lg-4 btn btn-primary">Update</button>
                  </div>
                
                </div>

              </div>
            </form>
          </div>

            </section>
   </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <?php include 'footer.php';?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>