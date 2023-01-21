
<?php
	require('dataconn.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['phone'])){
		
		$phone = stripslashes($_REQUEST['phone']); // removes backslashes
		$phone = mysqli_real_escape_string($conn,$phone); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($conn,$password);
		
		
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `admin` WHERE phone='$phone' AND password=PASSWORD('$password') AND designation='Staff'";
		$result = mysqli_query($conn,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['phone'] = $phone;
			echo '<script type="text/javascript"> window.open("dashboard/index_2.php","_self");</script>'; 
            }{
    echo "<script>alert('Invalid Login Credentials ')
	location.href='index_2.php'</script>";
   }
    }
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mainstreetjournal.co/login/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Sep 2020 22:55:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Staff Login | Hot Magazine</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="shortcut icon" href="images/favicon.fw.png">
<!--===============================================================================================-->
</head>
<body background="images/back1.html">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/logo-black.png" alt="IMG">
				</div>

				<form class="login100-form validate-form"  method="post"  enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<span class="login100-form-title">
						Staff Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "phone Number is required">
						<input class="input100" type="tel" name="phone" placeholder="Phone Number" require>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" require>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="submit" type="submit" name="submit" >Login</button>
					</div>
					<div class="container-login100-form-btn">
						<a href="index.php">Admin Login</a>
					</div>
					

					<div class="text-center p-t-12">
						<!--<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>-->
					</div>

					<div class="text-center p-t-136">
						<!--<a class="txt2" href="../register/">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>-->
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

<!-- Mirrored from mainstreetjournal.co/login/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Sep 2020 22:55:06 GMT -->
</html>