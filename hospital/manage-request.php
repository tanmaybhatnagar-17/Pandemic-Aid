<?php
session_start();

if(! (isset($_SESSION['login']))){
  header("location:login.php");
}

include  '../config/control.php';

$sno=0;
$name=$_SESSION['name'];
$email=$_SESSION['login'];
$c=new control();
$r=$c->fetchhid($email);
$hid=mysqli_fetch_array($r);
$id=$hid['id'];

$results=$c->fetchbedrequestbyid($id);

if (isset($_GET['reject'])) {
    $id1=$_GET['reject'];
    $res=$c->rejectbed($id1,$id);
    if($res)
    header("location:manage-request.php");
}

if (isset($_GET['accept'])) {
    $id1=$_GET['accept'];
    $res=$c->acceptbed($id1,$id);
    if($res)
        header("location:manage-request.php");
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
          <li><a href="index.php">Hospital</a></li>
          <li>Bed Request</li>
        </ol>
        
      </div>
    </section><!-- End Breadcrumbs -->

<section id="" class="contact">
    <div class="container">
        <div class="col-lg-12 ">
            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered">
                    <thead class="text-center">

                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Moblie</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Requestdate</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php foreach($results as $row):  ?>
                        <tr class="text-center">
                            <td><?php echo ++$sno; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['mobile_no']; ?></td>
                            <td><?php echo $row['bed']; ?></td>
                            <td><?php echo $row['reason']; ?></td>
                            <td><?php echo $row['createdate']; ?></td>
                            <td>
                                <a href="?accept=<?php echo $row['id'] ?>"><i class="bi bi-check-lg"></i></a>
                                <a href="?reject=<?php echo $row['id'] ?>" class="p-3"><i class="bi bi-x-lg"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>  
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