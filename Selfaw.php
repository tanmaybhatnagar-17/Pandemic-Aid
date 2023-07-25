<?php 
session_start();
  $id=$_REQUEST['id'];
  $name=$_SESSION['name'];
  include 'config/control.php';
  $c=new control();
  $res=$c->fetchselfawbyid($id);
  $r1=mysqli_fetch_array($res);
  $result1=$c->fetchdoc();
  $r2=mysqli_fetch_array($result1);

  if (isset($_POST['submit'])) {
      $comment=$_POST['comment'];
      $c=new control();
      $r=$c->addselfcomment($id,$name,$comment);
  }


  $result3=$c->fetchselfcomment($id);

  $comcnt=mysqli_num_rows($result3);
  $ress=$c->fetchselfawo();




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pandemic Aid | Selfawareness Details</title>
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
          <li><a href="selfaware.php">Self Awareness</a></li>
          
        </ol>
        <h2>Self Awareness Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="uploads/selfaw/<?php echo $r1['image']; ?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="#"><?php echo $r1['title'] ?> </a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#"><?php echo $r1['authorname'] ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><?php echo $r1['creationdate']; ?></a></li>
                  
                </ul>
              </div>

              <div class="entry-content">
                <pre class="tan">
<?php echo $r1['description']; ?>
                </pre>

              </div>

              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><?php echo $r1['category'] ?></li>
                </ul>

              </div>

            </article><!-- End blog entry -->

            <div class="blog-author d-flex align-items-center">
              <img src="uploads/doctor/<?php echo $r2['image']; ?>" class="rounded-circle float-left" alt="">
              <div>
                <h4><?php echo $r1['authorname'] ?></h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <pre class="tan fo">
<?php echo $r2['description']; ?>
                </pre>
              </div>
            </div><!-- End blog author bio -->

            <div class="blog-comments">

              <h4 class="comments-count"><?php  echo  $comcnt;?> Comments</h4>
            <?php  foreach($result3 as $row3):?>
              <div id="comment-1" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt="">
                </div>
                  <div>
                    <h5><a href=""><?php echo $row3['author'];?></a></h5>
                    <time datetime="2020-01-01"><?php echo $row3['creationdate'];?></time>
                    <pre class="tana">
<?php echo $row3['comment'];?>
                    </pre>
                  </div>
                </div>
              </div><!-- End comment #1 -->
              <?php endforeach; ?>
            </div><!-- End blog comments -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

            <?php include 'recent.php'; ?>

              <h3 class="sidebar-title mt-4">Leave a Reply</h3>

              <div class="reply-form">
                <h5></h5>
                <form action="" method="post">
                  
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" rows="4" placeholder="Your Comment"></textarea>
                    </div>
                  </div>
                  <div class="pt-4">
                  <button type="submit" class="btn btn-primary" name="submit">Post Comment</button>
                  </div>
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