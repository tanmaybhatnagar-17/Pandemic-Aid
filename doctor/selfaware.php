  <?php
  session_start();

  if(! (isset($_SESSION['login']))){
    header("location:../login.php");
  }

  $id=$_SESSION['category'];
  include '../config/control.php';
  $c=new control();
    $ide=$_REQUEST['id'];

    if($ide=='my'){
      $resq=$c->fetchselfawbycat($id);
    }
    elseif($ide=='all') {
      $resq=$c->fetchselfaw();
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

    <!-- Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

  <body>

    <!-- ======= Header ======= -->
    <?php  include 'header.php'; ?>
    <!-- End Header -->

    <main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <section class="breadcrumbs">
        <div class="container">

          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Self Awareness</li>
          </ol>
          <h2>Articles</h2>

        </div>
      </section><!-- End Breadcrumbs -->

      <!-- ======= Blog Section ======= -->
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

          <div class="row">

            <div class="col-lg-8 entries">
            <?php foreach($resq as $r1): ?>
              <article class="entry">
                
                <div class="entry-img">
                  <img src="../uploads/selfaw/<?php echo $r1['image'] ?>" alt="img not available" class="img-fluid imgs">
                </div>

                <h2 class="entry-title">
                  <a href="#"><?php echo $r1['title'] ?> </a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#"><?php echo $r1['authorname'] ?></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><?php echo $r1['creationdate'] ?></a></li>
                  </ul>
                </div>

                <div class="entry-content">
                  <p>
                  <?php    
                  $string=$r1['description']; 
                  $string = (strlen($string) > 1000)?substr($string,0,400).'. . . ' : $string;
                  echo $string;
                ?>
              </p>
                    
                    <div class="read-more">
                    <a href="selfawe.php?id=<?php echo $r1['id'];?>">Read More</a>
                  </div>
                </div>
                    
              </article><!-- End blog entry -->
              <?php endforeach; ?>
              
            </div><!-- End blog entries list -->



          </div>

        </div>
      </section><!-- End Blog Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include 'footer.php'; ?>
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