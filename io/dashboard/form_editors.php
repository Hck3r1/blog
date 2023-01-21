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
    
    <title>INSPINIA | Text Editor</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="summernote.css" rel="stylesheet">


</head>

<body>
    <?php include('menu.php'); ?>
        <div class="wrapper wrapper-content">

            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Wyswig Summernote Editor</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content no-padding">
                    <div class="ibox-content">
                        <div class="row">
                    <form role="form" enctype="multipart/form-data" method="post">
                           <?php
            $rand = rand(000,999);
            $today = date("Y");
            $ID = "NEWS/".$today."/".$rand;
    include("dataconn.php");
        
    error_reporting(E_ALL);
    if(isset($_REQUEST['submit'])){
        $uin=trim(addslashes($_REQUEST['uin']));
        $date=trim(addslashes($_REQUEST['date']));
        $category=trim(addslashes($_REQUEST['category']));
        $headline=trim(addslashes($_REQUEST['headline']));
        $content=trim(addslashes($_REQUEST['content']));
        $cover = $_FILES["cover"]['name'];
        $target1="cover/";
        $target1=$target1.$_FILES["cover"]['name'];
        if(move_uploaded_file($_FILES["cover"]['tmp_name'], $target1)>0){ 
        $credit=trim(addslashes($_REQUEST['credit']));
        $embed=trim(addslashes($_REQUEST['embed']));
        $link=trim(addslashes($_REQUEST['link']));
      
        $sql="INSERT INTO news (uin, date, category, headline, content, cover, credit, embed, link, postview) VALUES ('$uin','$date','$category','$headline','$content','$cover','$credit','$embed','$link','0')";

		mysqli_query($conn,$sql) or die (mysqli_error($conn));
        $num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=0){
						$message= "Error inserting news.";
						}
echo "<script>alert('News has been uploaded successfully')</script>";
}
else{
	echo "<script>alert('Error in Uploading Passport')</script>";	
}
	
		}
				?>
                                    <div class="form-group"><label>UIN</label> <input type="text"  class="form-control" name="uin" value="<?php echo $ID; ?>"></div>
                                    <div class="form-group"><label>Date Added:</label> <input type="date" class="form-control" name="date" require></div>
                                    <div class="form-group"><label>Category</label>
                                    <select class="form-control" require name="category" placeholder="Select Category">
                                        <option value="Select Category">Select News Category</option>
                                        <option value="Business">Business</option>
                                        <option value="Politics">Politics</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Crime">Crime</option>
                                        <option value="Health">Health</option>
                                        <option value="Nigeria News">Nigeria News</option>
                                    </select></div>
                                    <div class="form-group"><label>Headline</label> <input type="text" placeholder="Enter Headline" name="headline" class="form-control" require></div>
                                    <!-- <div class="form-group"><label>Content</label> <textarea name="content" placeholder="Enter News Content" class="form-control" require></textarea></div> -->
                                    <div class="form-group"><label>Cover Photo</label> <input type="file" class="form-control" name="cover" accept=".jpg, .JPG, .png, .PNG, .jpeg, .JPEG" require></div>
                                    <div class="form-group"><label>Photo Credit</label> <input type="text" class="form-control" name="credit" placeholder="Enter Photo Credit" require></div>
                                    <div class="form-group"><label>Embed code</label> <textarea  placeholder="Enter Embed code" name="embed" class="form-control" ></textarea></div>
                                    <div class="form-group"><label>Link</label> <textarea  placeholder="Enter Link" name="link" class="form-control" ></textarea></div>
                                    <div class="form-group"><label>Content</label> <textarea  id="summernote" name="content" class="form-control"></textarea>
                                                   
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" name="submit" value="submit"><strong>Upload</strong></button>
                                        
                                    </div>
                                </form>
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

    <!-- SUMMERNOTE -->
    <script src="summernote.js"></script>

    <script>
                                            $(document).ready(function() {
                                                $('#summernote').summernote();
                                                
                                            });
                                        </script>
                                                 

    <script>
       




        
    </script>

</body>

</html>
