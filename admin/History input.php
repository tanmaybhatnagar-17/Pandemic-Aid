<?php
 // require '../config/control.php';
  $con=mysqli_connect("localhost","root","","pandemic");
  if (isset($_POST['submit'])) {
    
    $pname=$_POST['pname'];
    
    $author=$_POST['author'];
    
    $des=$_POST["description"];
    
    move_uploaded_file($_FILES["attachment"]["tmp_name"],"../uploads/pandemic/".$_FILES["attachment"]["name"]);
    $attachment=$_FILES["attachment"]["name"];

  
   // $c=new control();
   // $result=$c->historyinput($pname,$author,$des,$attachment);
   
   $r=mysqli_query($con,"INSERT INTO `history`(`pan_name`, `author`, `attachment`, `description`) VALUES ('$pname','$author','$attachment','$des')");


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
          <li><a href="index.php">Home</a></li>
          <li>Enter Data</li>
        </ol>
        
      </div>
    </section><!-- End Breadcrumbs -->

<section id="history form" class="contact">

<div class="container">
<div class="col-lg-6 ">
            <form action="" method="post" enctype="multipart/form-data" class="">
              <div class="row gy-4">

                <div class="col-md-8">
                  <p>Pandemic Name</p>
                  <input type="text" name="pname" class="form-control" placeholder="Enter Pandemic Name" required>
                </div>

                <div class="col-md-8 ">
                  <p>Author Name</p>
                  <input type="text" class="form-control" name="author" placeholder="Enter Your Name" required>
                </div>

                <div class="col-md-12">
                  <p>Your Content</p>
                  <textarea class="form-control" name="description" rows="4" placeholder="Enter About the Hospital" required></textarea>
                </div>

                <div class="col-md-12">
                  <p>Upload an Image</p>
                  <input type="file" class="form-control" name="attachment" placeholder="Choose a file" required>
                </div>
              
                  <button type="submit" name="submit" class="col-lg-3 btn btn-primary">Submit</button>
                  
                
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