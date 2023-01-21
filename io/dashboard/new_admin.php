<?php
include('session.php');
include('dataconn.php');
$id = 1;
$sql="SELECT * FROM admin WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $session_fullname; ?>| Modal Window</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <?php include('menu.php'); ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Modal Window</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Tables</a>
                        </li>
                        <li class="active">
                            <strong>Modal Window</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content  animated fadeInRight">

            <div class="row">
                <div class="col-lg-4">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Inspinia modal window</h5>

                        </div>
                        <div class="ibox-content">
                            
                            <div class="text-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                               Add Admin
                            </button>
                                </div>
                            <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-user modal-icon"></i>
                                            <h4 class="modal-title">ADMIN REGISTRATION</h4>
                                            
                                        </div>
                                        <form method="post" enctype="multipart/form-data">
                                        <?php
            $rand = rand(000,999);
            $today = date("Y");
            $ID = "ADMIN/".$today."/".$rand;
    include("dataconn.php");
        
    error_reporting(E_ALL);
    if(isset($_REQUEST['submit'])){
        $uin=trim(addslashes($_REQUEST['uin']));
        $name=trim(addslashes($_REQUEST['name']));
        $emailreg=trim(addslashes($_REQUEST['email']));
        $phone=trim(addslashes($_REQUEST['phone']));
        $passwordreg=trim(addslashes($_REQUEST['password']));
        $passport = $_FILES["passport"]['name'];
        $target1="../me/passport/";
        $target1=$target1.$_FILES["passport"]['name'];
        if(move_uploaded_file($_FILES["passport"]['tmp_name'], $target1)>0){ 
        $designation=trim(addslashes($_REQUEST['designation']));
      
			$check=mysqli_query($conn, "SELECT * FROM admin WHERE phone='$phone' AND email='$emailreg'");
    $checkrows=mysqli_num_rows($check);
    if($checkrows>0) {
        echo "<script>alert('$designation already exist')
        location.href='new_admin.php'</script>";
        
    } else
    
    {
        $sql="INSERT INTO admin (uin, name, email, phone, password, passport, designation) VALUES ('$uin','$name','$emailreg','$phone',PASSWORD('$passwordreg'),'$passport','Admin')";

		mysqli_query($conn,$sql) or die (mysqli_error($conn));
		$num=mysqli_insert_id($conn);
							if(mysqli_affected_rows($conn)!=1){
								$message= "Error inserting the application information.";
							}
		echo "<script>alert('Success.')</script>";
								 
							}
						}
							
						}
						?>
                                        <div>
                                            <div class="form-group"><label>UIN</label> <input type="text" readonly class="form-control" name="uin" value="<?php echo $ID; ?>"></div>
                                            <div class="form-group"><label>FULLNAME</label> <input type="text" placeholder="Enter your fullname" class="form-control" name="name"></div>
                                            <div class="form-group"><label>EMAIL ADDRESS</label> <input type="email" placeholder="Enter your email" class="form-control" name="email"></div>
                                            <div class="form-group"><label>PHONE NUMBER</label> <input type="tel" placeholder="Enter your phone" class="form-control" name="phone"></div>
                                            <div class="form-group"><label>PASSWORD</label> <input type="text" placeholder="Enter your password" class="form-control" name="password"></div>
                                            <div class="form-group"><label>PASSPORT</label> <input type="file" class="form-control" name="passport" accept=".jpg, .JPG, .png, .PNG"></div>
                                            <div class="form-group"><input type="hidden" placeholder="Enter your designation" class="form-control" name="designation"></div>
                                            
                                            
                                        </div>
                                        <div class="modal-footer">
                                           <button class="btn btn-primary" id="submit" type="submit" name="submit" value="submit">REGISTER</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div>
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
            </div>
        </div>

        </div>
        </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>



</body>

</html>
