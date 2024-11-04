 <?php include("connection.php");
 $id= $_GET['id'];
 $query = "SELECT * FROM File  where id='$id' ";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="job1.css">
<title>JOB UPDATE REGISTRATION</title>
</head>
<body>
<div class="container">
    <form  action="#" method="POST">
<div class="title">
 JOB UPDATE FORM
 </div>
 <div class="form">
 <div class="input_field">
  <label>JOB NAME</label>
  <input type="text"  value="<?php echo $result['jobname']; ?>" class="input"  name="cname" required>
 </div>
 <div class="input_field">
  <label>COMPANY NAME</label>
  <input type="text" value="<?php echo $result['cname']; ?>"class="input" name="ename" required>
 </div>
 <div class="input_field">
  <label>JOB TYPE</label>
  <input type="text" value="<?php echo $result['jobtype']; ?>"class="input" name="password" required>
 </div>
 <div class="input_field">
  <label>POST DATE</label>
  <input type="text" value="<?php echo $result['postdate']; ?>"class="input" name="pnumber" required>
 </div>
 <div class="input_field">
   <label>SKILLS</label>
   <input type="text"value="<?php echo $result['skills']; ?>" class="input" name="cityname" required>
 </div>
 <div class="input_field">
   <label>CITY</label>
   <input type="text" value="<?php echo $result['city']; ?>" class="input" name="statename" required>
 </div>
 <div class="input_field">
   <label>STATE</label>
   <input type="text"  value="<?php echo $result['state']; ?>"class="input" name="countryname" required>
 </div>
 <div class="input_field">
 <label>JOB Description</label>
 <textarea  class="textarea" name="description" required><?php echo $result['description']; ?></textarea>		
 </div>
 <div class="input_field terms">
    <label class="check">
    <input type="checkbox" required>
    <span class="checkmark"></span>
    </label>
 <p>Agree to terms and conditions</p>
 </div>
<div  class="input_field">
 <input type="submit" value="Update Details" class="btn" name="update"> 
 </div>
 </div>
    </form>
 </div>
 </body>
 </html>
 <?php 
    if($_POST['update'])
 {
     $cname   = $_POST['cname'];
     $ename   = $_POST['ename'];
     $pwd     = $_POST['password'];
     $pno     = $_POST['pnumber'];
     $ciname  = $_POST['cityname'];
     $stname  = $_POST['statename'];
     $conname = $_POST['countryname'];
     $desc    = $_POST['description'];
     $query = "update file set jobname='$cname',cname='$ename',jobtype='$pwd',postdate='$pno',skills='$ciname',city='$stname',state='$conname',description='$desc' WHERE id='$id' ";
     $data = mysqli_query($conn,$query);
     if($data)
     {
                       ?> 
           
           <meta http-equiv = "refresh" content = "0; url = http://localhost/Website/job_display.php" />
            <?php
     }
      else 
     {
        echo "Failed"; 
     }
 }
 ?>
