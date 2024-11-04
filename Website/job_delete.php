<?php
include("connection.php");
$id= $_GET['id'];
$query="DELETE FROM file WHERE id='$id'";  
$data = mysqli_query($conn,$query);

if($data){

    echo "<script>alert('Record Deleted')</script>";

    ?>
<meta http-equiv = "refresh" content = "0; url = http://localhost/Website/job_display.php" />

   <?php
}
else{
    echo "<script>alert('Failed To Delete')</script>";

}
?>