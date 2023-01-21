
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mainstreetjournal.co/login/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Sep 2020 22:55:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Super Admin Register | Main Street Journal</title>
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
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" enctype="multipart/form-data">
					<span class="login100-form-title">
						SUPER ADMIN Registration
					</span>
					<?php
            $rand = rand(000,999);
            $today = date("Y");
            $ID = "ADMIN/".$today."/".$rand;
    include("dataconn.php");
        
    error_reporting(E_ALL);
    if(isset($_REQUEST['submit'])){
        $uin=trim(addslashes($_REQUEST['uin']));
        $fullname=trim(addslashes($_REQUEST['fullname']));
        $emailreg=trim(addslashes($_REQUEST['email']));
        $phone=trim(addslashes($_REQUEST['phone']));
        $passwordreg=trim(addslashes($_REQUEST['password']));
        $passport = $_FILES["passport"]['name'];
        $target1="passport/";
        $target1=$target1.$_FILES["passport"]['name'];
        if(move_uploaded_file($_FILES["passport"]['tmp_name'], $target1)>0){ 
        $designation=trim(addslashes($_REQUEST['designation']));
      
			$check=mysqli_query($conn, "SELECT * FROM admin WHERE phone='$phone' AND email='$emailreg'");
    $checkrows=mysqli_num_rows($check);
    if($checkrows>0) {
        echo "<script>alert('$designation already exist')
        location.href='../index.php'</script>";
        
    } else
    
    {
        $sql="INSERT INTO admin (uin, fullname, email, phone, password, passport, designation) VALUES ('$uin','$fullname','$emailreg','$phone',PASSWORD('$passwordreg'),'$passport','Admin')";

		mysqli_query($conn,$sql) or die (mysqli_error($conn));
		$num=mysqli_insert_id($conn);
							if(mysqli_affected_rows($conn)!=1){
								$message= "Error inserting the application information.";
							}
		echo "<script>alert('Dear $designation, you have been registered successfully.')</script>";
								 
							}
						}
							
						}
						?>
					<div class="wrap-input100 validate-input" data-validate = "Staff ID is required">
						<input class="input100" type="text" value="<?php echo $ID; ?>" name="uin" readonly placeholder="UIN">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-card" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Fullname is required">
						<input class="input100" type="text" name="fullname" placeholder="Fullname">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Email is required">
						<input class="input100" type="email" name="email" placeholder="Email Address">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Phone Number is required">
						<input class="input100" type="tel" name="phone" placeholder="Phone Number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Passport is required">
						<input class="input100" type="file" id="validatedCustomFile" name="passport" accept=".jpg, .JPG, .png, .PNG">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-picture-o" aria-hidden="true"></i>
						</span>
					</div>

					<div >
					<input  class="input100" type="hidden" name="designation" placeholder="Designation">
                    </div>
					
					<div class="container-login100-form-btn">
                        <button id="submit" type="submit" class="login100-form-btn" name="submit">Register</button>
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