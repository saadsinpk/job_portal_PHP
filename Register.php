<?php
include 'PHPFiles/RegisterPHP.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>JOB PORTAL | REGISTER</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Raims" />
	<!-- Favicon icon -->
	<link rel="icon" href="resources/assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="resources/assets/css/style.css">

</head>
<div class="auth-wrapper align-items-stretch aut-bg-img">
	<div class="flex-grow-1">
		<div class="h-100 d-md-flex align-items-center auth-side-img">
			<div class="col-sm-10 auth-content w-auto">
				<img src="assets/images/auth/auth-logo.png" alt="" class="img-fluid">
				<h1 class="text-white my-4">Welcome you!</h1>
				<h4 class="text-white font-weight-normal">Signup to your account and made member of the Able pro Dashboard Template.<br/>Do not forget to play with live customizer</h4>
			</div>
		</div>
		<div class="auth-side-form">
            <form method="post">
			<div class=" auth-content">
				<img src="resources/assets/images/auth/auth-logo-dark.png" alt="" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
				<h4 class="mb-3 f-w-400">Sign up</h4>
				<div class="form-group mb-3">
					<label class="floating-label" for="Username">Username</label>
					<input type="text" class="form-control" id="Username" placeholder="">
				</div>
				<div class="form-group mb-3">
					<label class="floating-label" for="Email">Email address</label>
					<input type="text" class="form-control" id="Email" placeholder="">
				</div>
				<div class="form-group mb-4">
					<label class="floating-label" for="Password">Password</label>
					<input type="password" class="form-control" id="Password" placeholder="">
				</div>
				<button type="submit" name="reg" class="btn btn-primary btn-block mb-4">Sign up</button>
				<div class="text-center">
					<div class="saprator my-4"><span>OR</span></div>
					<p class="mt-4">Already have an account? <a href="Login.php" class="f-w-400">Signin</a></p>
				</div>
			</div>
            </form>
		</div>
	</div>
</div>



    <form method="post">

        <input type="email" name="u-email" id="u-email" placeholder="Email" required><br><br>
        <input type="password" name="u-password" id="u-password" placeholder="Password" required><br><br>
        <input type="password" name="u-cpassword" id="u-cpassword" placeholder="Confirm Password" required><br><br>
        <span id="err"></span>
        <input type="submit" name="reg" value="Register">

    </form>


    <script type="text/javascript">
        var d = new Date();
        var elem = document.getElementById("reg_date"); 
        elem.value = d.toISOString().slice(0,16);
      </script>



<!-- Required Js -->
<script src="resources/assets/js/vendor-all.min.js"></script>
<script src="resources/assets/js/plugins/bootstrap.min.js"></script>
<script src="resources/assets/js/ripple.js"></script>
<script src="resources/assets/js/pcoded.min.js"></script>


</body>

</html>
