<?php
include("connection.php");
$cn= $_GET['cn'];
$query="DELETE FROM reg WHERE email='$cn'";  
$data = mysqli_query($conn,$query);

if($data){

    echo "<script>alert('Record Deleted')</script>";

    ?>
<meta http-equiv = "refresh" content = "0; url = http://localhost/Website/s_report.php" />

   <?php
}
else{
    echo "<script>alert('Failed To Delete')</script>";

}
?>