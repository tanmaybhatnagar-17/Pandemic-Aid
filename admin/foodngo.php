<?php
include  '../config/control.php';

if(isset($_POST['submit']))
{
$ngoname=$_POST['oname'];
$email=$_POST['mail'];
$mobno=$_POST['pno'];
$address=$_POST['address'];
$about=$_POST['about'];
$ngoreg=$_POST['reg'];
move_uploaded_file($_FILES["attachment"]["tmp_name"],"../uploads/ngo/".$_FILES["attachment"]["name"]);
$image=$_FILES["attachment"]["name"];

$c=new control();

$results=$c->addngo($ngoname,$email,$mobno,$address,$ngoreg,$about,$image);
 if ($results) {
    echo "<script>alert('NGO added successfully 😊');</script>";
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
          <li>Food NGO</li>
        </ol>
        
      </div>
    </section><!-- End Breadcrumbs -->

<section id="Food NGO" class="contact">

<div class="container">
<div class="col-lg-6 ">
            <form action="" method="post" class="" enctype="multipart/form-data" >
              <div class="row gy-4">

                <div class="col-md-12">
                  <p>Organization Name</p>
                  <input type="text" name="oname" class="form-control" placeholder="Enter your organisation name" required>
                </div>
                    
                <div class="col-md-12">
                  <p>E-mail</p>
                  <input type="email" name="mail" class="form-control" placeholder="Enter your E-mail ID" required>
                </div>

                <div class="col-md-12">
                  <p>Phone Number</p>
                  <input type="text" name="pno" class="form-control" placeholder="Enter your Mobile Number" required>
                </div>

                <div class="col-md-12">
                  <p>Registration ID</p>
                  <input type="text" name="reg" class="form-control" placeholder="Enter Registration ID Ex: NGIND002" required>
                </div>

                <div class="col-md-12 mt-4">
                <p>Address</p>  
                <textarea class="form-control" name="address" rows="4" placeholder="Enter your Address" required></textarea>
                </div>

                <div class="col-md-12 mt-4">
                <p>About the Organization</p>  
                <textarea class="form-control" name="about" rows="4" placeholder="About the organization" required></textarea>
                </div>

                <div class="col-md-12 mt-4">
                  <p>Upload your picture</p>
                  <input type="file" class="form-control" name="attachment" placeholder="Choose a file" required>
                </div>

                <button class="btn btn-primary col-lg-3 mt-4" type="submit" name="submit">Submit</button>
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