<?php
include  '../config/control.php';

$c=new control();
$res=$c->fetchcategory();

if(isset($_POST['submit']))
{
  $designation="Dr ";
  $name=$_POST['fname'];
$doctorname=$designation.$name;
$email=$_POST['mail'];
$mobno=$_POST['mob'];
$gender=$_POST['r1'];
$des=$_POST['bio'];
$category=$_POST['category'];
move_uploaded_file($_FILES["attachment"]["tmp_name"],"../uploads/doctor/".$_FILES["attachment"]["name"]);
$image=$_FILES["attachment"]["name"];
$password=$_POST['pass'];

$c=new control();

$results=$c->adddoc($doctorname,$email,$mobno,$gender,$des,$category,$image,$password);
 if ($results){
    echo "<script>alert('Doctor added successfully 😊');</script>";
  }
  else{
    echo "<script>alert('404 Error Occured!!! 😒');</script>";
  }
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
          <li>Doc Registration Form</li>
        </ol>
        
      </div>
    </section><!-- End Breadcrumbs -->

<section id="Doc Registration form" class="contact">

<div class="container">
<div class="col-lg-6 ">
            <form action="" method="post" class="" enctype="multipart/form-data" >
              <div class="row gy-4">

                <div class="col-md-12">
                  <p>Name</p>
                  <input type="text" name="fname" class="form-control" placeholder="Enter your name" required>
                </div>
                    
                <div class="col-md-12">
                  <p>E-mail</p>
                  <input type="email" name="mail" class="form-control" placeholder="Enter your E-mail ID" required>
                </div>

                <div class="col-md-12">
                  <p>Phone Number</p>
                  <input type="text" name="mob" maxlength="11" class="form-control" placeholder="Enter your Mobile Number" required>
                </div>

                <div class="col-md-6 mt-4 form-check">
                    <p>Gender</p>
                    <input type="radio" name="r1" id="male" value="Male" checked>
                    <label class="form-check-label col-lg-4" for="exampleRadios1">
                        &nbspMale
                    </label>
                    
                    <input type="radio" name="r1" id="female" value="Female">
                    <label class="form-check-label col-lg-4" for="exampleRadios2">
                        &nbspFemale
                    </label>
                    </div>
                </div>

                <div class="col-md-12 mt-4">
                <p>Bio</p>  
                <textarea class="form-control" name="bio" rows="6" placeholder="Enter your bio" required></textarea>
                </div>

                <div class="col-md-12 mt-4">
                    <p>Category</p>
                    <select class="col-md-8 form-control drop-down mt-4 " name="category" id="category">
                        <option value="">Select Category</option>
                        <?php foreach($res as $row): ?>
                        <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?> </option>
                        <?php endforeach; ?>  
                      </select>    
                </div>

                <div class="col-md-12 mt-4">
                  <p>Upload your picture</p>
                  <input type="file" class="form-control" name="attachment" placeholder="Choose a file" required>
                </div>

                <div class="col-md-12 mt-4">
                  <p>Password</p>
                  <input type="text" name="pass" class="form-control" placeholder="Enter your password" required>
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