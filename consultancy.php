<?php 
session_start();
include 'config/control.php';
$c=new control();
$result2=$c->fetchcat();

if (isset($_REQUEST['id'])) {
  $id=$_REQUEST['id'];
  $result1=$c->fetchissuebycategory($id);
}else{
  $result1=$c->fetchissue();

}


if(isset($_POST['signin'])) {
  $username=$_POST['username'];
	$password=$_POST['password'];
	$result=$c->login($username,$password);
  if ($result) {
echo "<script>window.location.href='consultancy.php'</script>";
  }
  else{
    echo "<script>alert('404 error');</script>";

  }
}

if(isset($_POST['submit']))
{
$name=$_SESSION['name'];
$category=$_POST['category'];
$title=$_POST['title'];
$issue=$_POST['issue'];
move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/consultancy/".$_FILES["file"]["name"]);
$file=$_FILES["file"]["name"];
$result3=$c->askissue($name,$category,$title,$issue,$file);  
if($result3){
  header ("location:consultancy.php");}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pandemic Aid | Doctor Consultancy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
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

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  </head>

<body>

  <!-- ======= Header ======= -->
  <?php
  
  include 'header.php';

  ?>
  
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Doctor Consultancy</li>
        </ol>
        <h2>Issues</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
          <?php  foreach($result1 as $row): ?>
            <article class="entry">

              <h2 class="entry-title">
                <a href="blog-single.html"><?php echo $row['title']; ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#"><?php echo $row['name']; ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><?php echo $row['createdate']; ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-folder"></i> <a href="#"><?php echo $row['category']; ?></a></li>
                </ul>
              </div>
              <div class="entry-content">
                <p><?php echo $row['description']; ?></p>
                <div class="read-more">
                  <?php
                  
                    if(!(isset($_SESSION['login']))){?>
                        <!-- Button trigger modal -->
                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Read More</a>

                   <?php  } else{ ?>
                  <a href="consultancy-single.php?id=<?php echo $row['cid'];?>" >Read More</a>
                  <?php }?>
                </div>
                
              </div>

            </article><!-- End blog entry -->
              <?php endforeach; ?>
            
            
          
          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

            <div class="reply-form">
                <h4 class="sidebar-title">Issues</h4>
                <p> <strong> Post your Issues Over here.</strong></p>
                <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col form-group">
                    <select class="col-md-4 form-control drop-down  " name="category" id="category">
                        <option value="">Select Category</option>
                        <?php foreach($result2 as $row): ?>
                        <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?> </option>
                        <?php endforeach; ?>  
                      </select>               
                         </div>
                </div>
                
                  <div class="row">
                    <div class="mt-4 col form-group">
                      <input name="file" type="file" class="form-control" >
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col form-group">
                      <input name="title" class="form-control" placeholder="Title" required/>
                    </div>
                  </div>
                 
                  <div class="row mt-4">
                    <div class="col form-group">
                      <textarea name="issue" rows='4' class="form-control" placeholder="Type your problem here" required></textarea >
                    </div>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary  mb-4 mt-4">Submit</button>

                </form>

              </div>

              <h3 class="sidebar-title">Categories</h3>
                <div class="sidebar-item categories">
                  <ul>

                  <?php foreach( $result2 as $r2): ?>
                    <li><a href="consultancy.php?id=<?php echo $r2['category'] ?>"><?php echo $r2['category'] ?></a></li>
                  <?php endforeach; ?>
                </div>
             

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
  
  <!-- ======= Footer ======= -->
 
 <?php 
 
 include 'footer.php'

 ?>

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
            <div class="form-group last mb-5 ">
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