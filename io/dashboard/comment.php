<form  method="post" enctype="multipart/form-data">
<?php
            $rand = rand(000,100);
            $today = date("y");
            $ID = "COM/".$today."/".$rand;
    include("dataconn.php");
        
    error_reporting(E_ALL);
    if(isset($_REQUEST['submit'])){
        $uin=trim(addslashes($_REQUEST['uin']));
        $name=trim(addslashes($_REQUEST['name']));
        $emailreg=trim(addslashes($_REQUEST['email']));
        $message=trim(addslashes($_REQUEST['message']));
        
      
			  $sql="INSERT INTO comment (uin, name, email, message) VALUES ('$uin','$name','$emailreg','$message')";

		mysqli_query($conn,$sql) or die (mysqli_error($conn));
		$num=mysqli_insert_id($conn);
							if(mysqli_affected_rows($conn)!=1){
								$message= "Sorry! Message was not sent, Try again Later.";
							}
		echo "<script>alert('Your Comment was sent successfully.')</script>";
								 
							}
						
							
						
						?>
<div>
                                            <div class="form-group"> <input type="hidden" readonly require class="form-control" name="uin" value="<?php echo $ID; ?>"></div><br>
                                            <div class="form-group"><label>FULLNAME</label> <br><input type="text" require placeholder="Enter your fullname" class="form-control" name="name"></div><br>
                                            <div class="form-group"><label>EMAIL ADDRESS</label> <br><input type="email" require placeholder="Enter your email" class="form-control" name="email"></div><br>
                                            <div class="form-group"><label>COMMENT</label><br><textarea placeholder="Enter Message" name="message" class="form-control" require></textarea>
                                            
                                        </div>
                                        <div class="modal-footer">
                                           <button class="btn btn-primary" id="submit" type="submit" name="submit" value="submit">COMMENT</button>
                                        </div>
</form>