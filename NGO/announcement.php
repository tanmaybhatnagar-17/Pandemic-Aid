<?php
session_start();

if(! (isset($_SESSION['login']))){
  header("location:login.php");
}
  include '../config/control.php';
  $id=$_SESSION['login'];
  $name=$_SESSION['name'];
  $c=new control();
  if (isset($_POST['submit'])) {
    
    $date=$_POST['date'];
    $time=$_POST['time'];
    $location=$_POST['location'];
    $event=$_POST['event'];
    $coordi=$_POST['coordi'];
    $mobile=$_POST['mobile'];
    $msg=$name." is planning their next ".$event." on ".$date." for more details go to the respective page.";
    $email="ngo";
    $result1=$c->addannounce($id,$date,$time,$location,$event,$coordi,$mobile,$msg,$email);

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
<div class="col-lg-12 ">
            <form action="" method="post" >
              <div class="row gy-4">

                <div class="col-md-6">
                  <p>Event Date</p>
                  <input type="date" name="date" class="form-control" placeholder="Enter Event Date" required>
                </div>

                <div class="col-md-6 ">
                  <p>Event Time</p>
                  <input type="time" class="form-control" name="time" placeholder="Enter Event Time" required>
                </div>

                <div class="col-md-6 ">
                  <p>Event Location</p>
                  <input type="text" class="form-control" name="location" placeholder="Enter Location of the Event" required>
                </div>
                
                <div class="col-md-6 ">
                  <p>Title of Event</p>
                  <input type="text" class="form-control" name="event" placeholder="Enter Title of the Event" required>
                </div>
                <div class="col-md-6 ">
                  <p>Name of Coordinator</p>
                  <input type="text" class="form-control" name="coordi" placeholder="Enter Name of the Coordinator" required>
                </div>

                <div class="col-md-6 ">
                  <p>Mobile Number</p>
                  <input type="text" class="form-control" maxlength="12" name="mobile" placeholder="Enter Contact No of Coordinator" required>
                </div>

                 <div class="col-md-12 d-flex justify-content-center">   
                  <button type="submit" name="submit" class="col-lg-2 btn btn-primary">Announce</button>
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