<?php
session_start();

include 'config/control.php';
$c=new control();
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['mail'];
$mobno=$_POST['mob'];
$pass=$_POST['pass'];
$result1=$c->adduser($name,$email,$mobno,$pass);
if ($result1){
    header ('location:login.php');
  }
  else{
    echo "<script>alert('404 Error Occured!!! 😒');</script>";
  }

}

?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="login/fonts/icomoon/style.css">

    <link href="assets/img/logo pandemic.png" rel="icon">

    <link rel="stylesheet" href="login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="login/css/style.css">

    <title>Pandemic Aid | Sign Up</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="login/images/tanmay logo.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign Up</h3>
            </div>
            <form action="#" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="name">

              </div>
              <div class="form-group first">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="mail">

              </div>
              <div class="form-group first">
                <label for="mobileno">Mobile No.</label>
                <input type="tel" class="form-control" name="mobno">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="pass">
                
              </div>

              <button type="submit"  class="btn btn-block btn-primary" name="submit">Sign Up</button>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="login/js/jquery-3.3.1.min.js"></script>
    <script src="login/js/popper.min.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
    <script src="login/js/main.js"></script>
  </body>
</html>

