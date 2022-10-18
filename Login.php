

<?php 
include 'PHPFiles/LoginPHP.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>JOB PORTAL | LOGIN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Raims" />
	<!-- Favicon icon -->
	<link rel="icon" href="resources\template\assets\AuthAssets\images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="resources\template\assets\AuthAssets\css/style.css">

</head>



<div class="auth-wrapper align-items-stretch aut-bg-img">
	<div class="flex-grow-1">
		<div class="h-100 d-md-flex align-items-center auth-side-img">
			<div class="col-sm-10 auth-content w-auto">
				<!-- <img src="resources\template\assets\AuthAssets\images/auth/auth-logo.png" alt="" class="img-fluid"> -->
				<h1 class="text-white my-4">Welcome Back!</h1>
				<h4 class="text-white font-weight-normal">Please Signin to your Job Portal Account.<br/></h4>
			</div>
		</div>
		<div class="auth-side-form">
			<form method="post">
			<div class=" auth-content">
				<img src="assets/images/auth/auth-logo-dark.png" alt="" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
				<h3 class="mb-4 f-w-400">Signin</h3>
				<div class="form-group mb-3">
					<label class="floating-label" for="u-email">Email address</label>
					<input type="text" class="form-control" name="u-email" id="u-email" required placeholder="">
				</div>
				<div class="form-group mb-4">
				<label class="floating-label" for="Password">Password</label>
					<input type="password" class="form-control" name="u-password" id="u-password" placeholder="" required>
				</div>
				<button name="log" type="submit"class="btn btn-block btn-primary mb-4">Signin</button>
                <div class="text-center">
					<div class="saprator my-4"><span>OR</span></div>
					<p class="mb-0 text-muted">Don’t have an account? <a href="Register.php" class="f-w-400">Signup</a></p>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>


<script type="text/javascript">
        var d = new Date();
        var elem = document.getElementById("reg_date"); 
        elem.value = d.toISOString().slice(0,16);
      </script>



<!-- Required Js -->
<script src="resources\template\assets\AuthAssets\js/vendor-all.min.js"></script>
<script src="resources\template\assets\AuthAssets\js/plugins/bootstrap.min.js"></script>
<script src="resources\template\assets\AuthAssets\js/ripple.js"></script>
<script src="resources\template\assets\AuthAssets\js/pcoded.min.js"></script>


</body>

</html>