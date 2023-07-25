<?php
include  '../config/control.php';

$c=new control();
$ser=$c->fetchhospi();
$ers=mysqli_fetch_array($ser);


if(isset($_POST['add']))
{
$hospitalname=$_POST['hname'];
$email=$_POST['mail'];
$mobno=$_POST['mob'];
$address=$_POST['address'];
$nbed=$_POST['nbed'];
$hcategory=$_POST['hcategory'];
move_uploaded_file($_FILES["about"]["tmp_name"],"../uploads/hospitalpdf/".$_FILES["about"]["name"]);
$about=$_FILES["about"]["name"];
move_uploaded_file($_FILES["attachment"]["tmp_name"],"../uploads/hospital/".$_FILES["attachment"]["name"]);
$image=$_FILES["attachment"]["name"];

$c=new control();

$results=$c->addhospi($hospitalname,$email,$mobno,$address,$nbed,$hcategory,$about,$image);
 if ($results) {
    echo "<script>alert('Hospital added successfully 😊');</script>";
  }else{
    echo "<script>alert('404 Error Occured!!! 😒');</script>";
  }

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
          <li><a href="index.php">Admin</a></li>
          <li>Add Hospital</li>
        </ol>
        
      </div>
    </section><!-- End Breadcrumbs -->

<section id="Doc Registration form" class="contact">

<div class="container">
<div class="col-lg-6 ">
            <form action="" method="post" class="" enctype="multipart/form-data" >
              <div class="row gy-4">

                <div class="col-md-12">
                  <p>Hospital Name</p>
                  <input type="text" name="hname" class="form-control" value="<?php echo $ers['hname']; ?>" required>
                </div>
                    
                <div class="col-md-12">
                  <p>E-mail</p>
                  <input type="email" name="mail" class="form-control" value="<?php echo $ers['email']; ?>" required>
                </div>

                <div class="col-md-12">
                  <p>Phone Number</p>
                  <input type="text" name="mob" class="form-control" value="<?php echo $ers['mob']; ?>" required>
                </div>

                <div class="col-md-12 mt-4">
                <p>Address</p>  
                <textarea class="form-control" name="address" rows="4" value="" required><?php echo $ers['address']; ?></textarea>
                </div>

                <div class="col-md-12 mt-4">
                <p>About the Hospital</p>  
                <p><a href="../uploads/hospitalpdf/<?php echo $ers['about']; ?>"> <?php echo $ers['about']; ?></a></p>
                
                <input type="file" class="form-control" name="about" value="" required>
                </div>

                <div class="col-md-12 mt-4">
                <p>Total number of Beds</p>  
                <input type="text" class="form-control" name="nbed" value="<?php echo $ers['nbed']; ?>" required></textarea>
                </div>

                <div class="col-md-12 mt-4 ">
                    <p>Category</p>
                    <select class="col-md-8 form-control drop-down mt-4 " name="hcategory" id="hcategory" required>
                    <option value="<?php echo $ers['category']; ?>" selected><?php echo $ers['category']; ?></option>
                        <option value="Private">Private</option>
                        <option value="Government">Government</option>
                        </select>    
                </div>

                <div class="col-md-12 mt-4">
                  <p>Your picture</p>
                  <div class="pkroks">
                    <img  src="../uploads/hospital/<?php echo $ers['image']; ?>" required>
                 </div>
                </div>
                <div class="col-md-12 mt-4">
                 <input type="file" class="form-control" name="image" value="" required>
                 </div>

                <button class="btn btn-primary col-lg-3 mt-4" type="submit" name="add">Submit</button>
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