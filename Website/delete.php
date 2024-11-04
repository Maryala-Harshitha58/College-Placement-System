<?php
include("connection.php");
$cn= $_GET['cn'];
$query="DELETE FROM form WHERE cname='$cn'";  
$data = mysqli_query($conn,$query);

if($data){

    echo "<script>alert('Record Deleted')</script>";

    ?>
<meta http-equiv = "refresh" content = "0; url = http://localhost/Website/display.php" />

   <?php
}
else{
    echo "<script>alert('Failed To Delete')</script>";

}
?>