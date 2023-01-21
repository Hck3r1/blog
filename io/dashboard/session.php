<?php
include('dataconn.php');
session_start();
$user_check=$_SESSION['email'];

$sql = mysqli_query($conn,"SELECT * FROM admin WHERE email='$user_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$session_uin =$row['uin'];
$session_fullname =$row['fullname'];
$session_phone = $row['phone'];
$session_email = $row['email'];
$session_passport = $row['passport'];

if(!isset($user_check))
{
header("Location: ../");
}
?>




