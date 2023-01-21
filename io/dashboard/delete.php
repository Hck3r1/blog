<?php
include('dataconn.php');
if(isset($_REQUEST['id'])){
$sql = "SELECT * FROM news WHERE id='$_REQUEST[id]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
//$_REQUEST['fileno']=$row['fileno'];
?>

<?php

// sql to delete a record
$sql = "DELETE FROM news WHERE id=$_REQUEST[id]";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('News Successfully DELETED')
location.href='news_inventory.php'</script>";
// } else {
//     echo "Error deleting Record: " . mysqli_error($conn);
// }

}
}
?>
