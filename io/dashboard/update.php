<?php
include('session.php');
include('dataconn.php');
$id = 1;
$sql="SELECT * FROM admin WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>

<?php
if(isset($_REQUEST['id'])){
$sql = "SELECT * FROM news WHERE id='$_REQUEST[id]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
}
?>

<!DOCTYPE html>
<html>
    
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $session_fullname; ?> | Update News</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="summernote.css" rel="stylesheet">


    <style>

        .wizard > .content > .body  position: relative; }

    </style>

</head>

<body>
<?php include('menu.php'); ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Wizard</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Forms</a>
                        </li>
                        <li class="active">
                            <strong>Wizard</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        
               
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Wizard with Validation</h5>
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
                        <div class="ibox-content">
                            
                            <form id="form" class="wizard-big" method="post">
                             <?php
            
include("dataconn.php");
        
    error_reporting(E_ALL);
    if(isset($_REQUEST['submit'])){
        $uin=trim(addslashes($_REQUEST['uin']));
        $date=trim(addslashes($_REQUEST['date']));
        $category=trim(addslashes($_REQUEST['category']));
        $headline=trim(addslashes($_REQUEST['headline']));
        $credit=trim(addslashes($_REQUEST['credit']));
        $embed=trim(addslashes($_REQUEST['embed']));
        $a=trim(addslashes($_REQUEST['a']));
        $content=trim(addslashes($_REQUEST['content']));
       
           

       
    
 $sql="UPDATE news SET date='$date', category='$category', headline='$headline', credit='$credit', embed='$embed', a='$a', content='$content' WHERE id='$_REQUEST[id]'";

    mysqli_query($conn,$sql) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
                    if(mysqli_affected_rows($conn)!=1){
                        $message= "Error updating news.";
                        }
echo "<script>alert('News successfully updated')
    location.href='news_inventory.php'</script>";
                    }  

    mysqli_close($conn);
  
    

?> 
                                
                                <h1>NEWS</h1>
                                <fieldset>
                                    <h2>NEWS UPDATE</h2>
                                    <div class="row">
                                         <div class="col-lg-4">
                                            
                                            <div class="form-group">
                                                <label>UIN *</label>
                                                <input id="uin" name="uin" type="text" class="form-control readonly required" value="<?php echo $row['uin']; ?>" >
                                            </div>
                                         </div>
                                         
                                         <div class="col-lg-4">
                                            
                                            <div class="form-group">
                                                <label>DATE ADDED *</label>
                                                <input id="date" name="date" type="date"  class="form-control required" value="<?php echo $row['date']; ?>" >
                                            </div>
                                         </div>

                                         <div class="col-lg-4">
                                            
                                            <div class="form-group">
                                                <label>CATEGORY *</label>
                                                <input id="category" name="category" type="text"  class="form-control  required" value="<?php echo $row['category']; ?>" >
                                            </div>
                                         </div>

                                         <div class="col-lg-4">
                                            
                                            <div class="form-group">
                                                <label>HEADLINE *</label>
                                                <input id="headline" name="headline" type="text"  class="form-control required" value="<?php echo $row['headline']; ?>" >
                                            </div>
                                         </div>

                                         <div class="col-lg-4">
                                            
                                            <div class="form-group">
                                                <label>PHOTO CREDIT *</label>
                                                <input id="credit" name="credit" type="text" class="form-control required" value="<?php echo $row['credit']; ?>" >
                                            </div>
                                         </div>

                                         <div class="col-lg-4">
                                            
                                            <div class="form-group">
                                                <label>EMBED CODE *</label>
                                                <input id="embed" name="embed" type="text" class="form-control  value="<?php echo $row['embed']; ?>" >
                                            </div>
                                         </div>

                                         <div class="col-lg-4">
                                            
                                            <div class="form-group">
                                                <label>LINK *</label>
                                                <input id="link" name="a" type="text"  class="form-control  value="<?php echo $row['a']; ?>" >
                                            </div>
                                         </div>

                                         <div class="col-lg-12">
                                            
                                            <div class="form-group">
                                                <label>CONTENT *</label>
                                                <textarea  id="summernote" name="content" class="form-control" required"><?php echo $row['content']; ?></textarea>
                                                
                                            </div>
                                         </div>
                                   

                                         <div class="col-lg-12">
                                            <div class="form-group">
                                                <input name="submit" type="submit" class="form-control  value="submit">
                                            </div>
                                         </div>
                                         
                                         

                                        
                                    </div>
                                </fieldset>

                               
                            </form>
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

    <!-- Steps -->
    <script src="js/plugins/staps/jquery.steps.min.js"></script>

    <!-- Jquery Validate -->
    <script src="js/plugins/validate/jquery.validate.min.js"></script>


   
    
    <!-- SUMMERNOTE -->
    <script src="summernote.js"></script>

    <script>
                                            $(document).ready(function() {
                                                $('#summernote').summernote();
                                                
                                            });
                                        </script>

</body>

</html>
