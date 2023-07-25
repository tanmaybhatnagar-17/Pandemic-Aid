<?php 

session_start();
include '../config/control.php';

$c=new control();

$name=$_SESSION['name'];

$result2=$c->fetchcat();

$id=$_REQUEST['id'];
  
$res=$c->fetchissuebyid($id);
  $r1=mysqli_fetch_array($res);
  
$result1=$c->fetchansbyid($id);

if(isset($_POST['submit']))
{

$description=$_POST['solution'];

move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/consultancy/".$_FILES["file"]["name"]);
$file=$_FILES["file"]["name"];
$result3=$c->addanswer($name,$id,$description,$file);  
}

if(isset($_POST['comment']))
{

$desc=$_POST['reply'];
$result4=$c->addcomment($name,$id,$desc);  
}

$result5=$c->fetchanscommentbyid($id);
$acnt=mysqli_num_rows($result5);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logo pandemic.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">

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
          <li><a href="consultancy.php">Doctor Consultancy</a></li>
          
        </ol>
        <h2>Consultancy</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <h2 class="entry-title">
                <a href="#"><?php echo $r1['title'] ?> </a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#"><?php echo $r1['name'] ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><?php echo $r1['createdate']; ?></a></li>
                  
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

            
            <div class="blog-comments ">

              <h4 class="comments-count"><?php // echo  $comcnt;?> Comments</h4>
            <?php 
            foreach($result1 as $row1):
            ?>
              <div id="comment-1" class="comment p-3 colorbox">
                <div class="d-flex">
                  
                  <div>
                    <h5><a href=""> <strong> <?php echo $row1['name'];  ?> </strong></a></h5>
                    <span style="font-size:9pt;"><i class="bi bi-clock ">&nbsp</i><?php echo $row1['createdate'];  ?></span>
                    <p>
<?php echo $row1['description'];  ?>
                    </p>
                    <?php if($row1['attachment']){  ?>
                    <p> Your File :   <a href="uploads/consultancy/<?php echo $row1['attachment'];  ?>" target=
                    -blank> <?php echo $row1['attachment'];  ?></a>  </p>  <?php }?>
                  </div>
                </div>
              </div>
              <?php endforeach;?>
              <!-- End comment #1 -->
              <div class="reply-form">
                <h4 class="sidebar-title">Reply</h4>
                <form action="" method="post" enctype="multipart/form-data">
                                         
                  <div class="row">
                    <div class="col form-group">
                      <input name="file" type="file" class="form-control" >
                    </div>
                  </div>

                  <div class="row ">
                    <div class="col form-group">
                      <textarea name="solution" rows='4' class="form-control" placeholder="Type your problem here" required></textarea >
                    </div>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary col-lg-3 ">Submit</button>

                </form>

              </div>

                
            
            </div><!-- End blog comments -->


          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">
            <h3 class="sidebar-title mt-4">Recent Comments : <?php echo $acnt; ?></h3>

            <?php 
            foreach($result5 as $row5):
            ?>
              <div id="comment-1" class="comment">
                <div class="d-flex ">
                  
                  <div >
                    <h6><a href=""> <strong> <?php echo $row5['name'];  ?> </strong></a></h6>
                    <pre class="tana">
<?php echo $row5['description'];  ?>
                    </pre>
                  </div>
                </div>
              </div>
              <?php endforeach;?>        
              <h3 class="sidebar-title mt-4">Leave a Reply</h3>

              <div class="reply-form">
                <h5></h5>
                <form action="" method="post" enctype="multipart/form-data">
                  
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="reply" class="form-control" rows="4" placeholder="Your Comment"></textarea>
                    </div>
                  </div>
                  <div class="pt-4">
                  <button type="submit" class="btn btn-primary" name="comment">Post Comment</button>
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