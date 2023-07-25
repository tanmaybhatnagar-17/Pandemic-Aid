<?php
session_start();
if (isset($_POST['login'])) {
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	require '../config/control.php';

	$c=new control();
	$result=$c->login($username,$password);
}
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Pandemic Aid | Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="../assets/css/font-awsome.css">
	<link href="../assets/img/logo pandemic.png" rel="icon">
	<link rel="stylesheet" href="../login-form-11/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<i class="fa fa-user-o" style="color:white;"></i>
		      	</div>
		      	<h3 class="text-center mb-4">Admin</h3>
						<form action="" method="post" class="">
		      		<div class="form-group">
		      			<input type="text" name="username" class="form-control rounded-left" placeholder="Username" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
	            </div>
				
                  <button type="submit" name="submit" class="col-lg-3 btn btn-primary">Submit</button>
                  
                
                </div>

              </div>
            </form>
          </div>

	</section>

	<script src="../login-form-11/js/jquery.min.js"></script>
  <script src="../login-form-11/js/popper.js"></script>
  <script src="../login-form-11/js/bootstrap.min.js"></script>
  <script src="../login-form-11/js/main.js"></script>
  <script src="../assets/js/use.font-awesome.js"></script>

	</body>
</html>