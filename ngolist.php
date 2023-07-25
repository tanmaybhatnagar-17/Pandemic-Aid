<?php 
session_start();
  
  include 'config/control.php';
  $c=new control();
  $result=$c->fetchngos();

       
if(isset($_POST['signin'])) {
  $username=$_POST['username'];
	$password=$_POST['password'];
	$result=$c->login($username,$password);
  if ($result) {
echo "<script>window.location.href='ngolist.php'</script>";
  }
  else{
    echo "<script>alert('404 error');</script>";

  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pandemic Aid | NGO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- icons -->
  <link href="assets/img/logo pandemic.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!--  Main CSS File -->
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
          <li>NGO's in India</li>
        </ol>
        
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= hospital list Section ======= -->
    <section id="blog" class="blog">
      <div class="container " data-aos="fade-up">

        <div class="row algcenter">
      <?php foreach($result as $row): ?>    
        <div class="bed">
          <div class="bname">
            <h3><strong><?php echo $row['oname']; ?></strong>
            <span class="dis"><a href="<?php echo $row['mob']; ?>"><i class="bi bi-telephone-fill "></i></a><a href="<?php echo $row['email']; ?>"><i class="bi bi-envelope-fill"></i></a></span> 
          </h3>
          <p class="float-left">Reg ID : <?php echo $row['ngoreg']; ?></p>
          </div>
          <div class='kj'>
          <p class="sp">Address : <?php echo $row['address']; ?></p>
          <div class="read-more">
          <?php if(!(isset($_SESSION['login']))){?>
                        <!-- Button trigger modal -->
                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Read More</a>

                   <?php  } else{ ?>
            <a href="ngoabout.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Read More</a>
            <?php }?>

           </div>
          </div>
        </div>
        <?php endforeach;  ?>
        </div>

      </div>
    </section><!-- End hospital list Section -->

  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <?php include 'footer.php';?>
  <!-- End Footer -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
        
        <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
         <div class="row justify-content-center">
            <div class="col-md-10 mt-5 mb-5">
              <div class="mb-4 ">
              <h3>Sign In</h3>
            </div>
            <form action="" method="post">
              <div class="form-group first">
                <input type="text" class="form-control"  placeholder="E-Mail" name="username">

              </div>
              <div class="form-group last mb-4 mt-4">
                <input type="password" placeholder="Password" class="form-control" name="password">
              </div>
              
              <div class="d-flex mb-3 align-items-center">
                
                <div class="d-flex justify-content-center"><a href="signup.php" class="forgot-pass">I don't have an account.</a>
              </div> 
            </div>
            <div class="form-group ">
                <button type="submit" name="signin" class="btn btn-primary ">Sign In</button>
              </div>

            </form>
            </div>
          </div>
       
      </div>
      
    </div>
  </div>
</div>

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