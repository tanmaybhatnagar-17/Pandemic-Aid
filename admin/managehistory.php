<?php
include  '../config/control.php';

$sno=0;

$c=new control();
$results=$c->fetchhistorydate();

if (isset($_GET['del'])) {
    $id=$_GET['del'];
    $res=$c->delhistory($id);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pandemic Aid | Admin | Doctor</title>
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
          <li>Manage History</li>
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
                        <th>Pandemic Name</th>
                        <th>Author</th>
                        <th>Attachment</th>
                        <th>Description</th>
                        <th>Createdate</th>
                        <th>Updatedate</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php foreach($results as $row):  ?>
                        <tr class="text-center">
                            <td><?php echo ++$sno; ?></td>
                            <td><?php echo $row['pan_name']; ?></td>
                            <td><?php echo $row['author']; ?></td>
                            <td><img src="../uploads/pandemic/<?php echo $row['attachment']; ?>" alt="hello" style="width:70px;"></td>
                            <td><?php    
                  $string=$row['description']; 
                  $string = (strlen($string) > 100)?substr($string,0,30).'. . . ' : $string;
                  echo $string;
                ?></td>
                            <td><?php echo $row['createdate']; ?></td>
                            <td><?php echo $row['updatedate']; ?></td>
                            <td class="space-between">
                                <a href="histupdate.php?edit=<?php echo $row['id'] ?> "><i class="bi bi-pencil-square"></i></a>
                                <a href="?del=<?php echo $row['id'] ?>" class="p-3"><i class="bi bi-trash"></i></a>
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