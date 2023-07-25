<?php
include  '../config/control.php';

$c=new control();
$res=$c->fetchhospi();


if(isset($_POST['update']))
{
$hospitalname=$_POST['hname'];
$cbed=$_POST['cbed'];

$c=new control();

$results=$c->updatebed($hospitalname,$cbed);
 if ($results) {
    echo "<script>alert('Bed No. Updated successfully 😊');</script>";
  }else{
    echo "<script>alert('404 Error Occured!!! 😒');</script>";
  }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
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
          <li><a href="index.php">Admin</a></li>
          <li>Add Hospital</li>
        </ol>
        
      </div>
    </section><!-- End Breadcrumbs -->

<section id="Doc Registration form" class="contact">

<div class="container ">
<div class="col-lg-4 ">
            <form action="" method="post" class="" enctype="multipart/form-data" >
              <div class="row gy-4">

                <div class="col-md-12 mt-4">
                    <p>Hospital Name</p>
                    <select class="col-md-8 form-control drop-down mt-4 " name="hname">
                        <option value="">Select Hospital</option>
                        <?php foreach($res as $row): ?>
                        <option value="<?php echo $row['hname']; ?>"><?php echo $row['hname']; ?> </option>
                        <?php endforeach; ?>  
                      </select>    
                </div>  
               

                <div class="col-md-12 mt-4">
                <p>Number of Bed Available</p>  
                <input type="text" class="form-control" name="cbed" required></textarea>
                </div>

               
                <button class="btn btn-primary col-lg-3 mt-4" type="submit" name="update">Submit</button>
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