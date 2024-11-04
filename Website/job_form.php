<?php include("connection.php");?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="job1.css">
<title>JOB REGISTERATION</title>
</head>
<body>
<div class="container">
    <form  action="#" method="POST" enctype="multipart/form-data">
<div class="title">
 JOB REGISTERATION FORM
 </div>
 <div class="form">
     <div class="form">
     <div class="input_field" >
         <label>UPLOAD IMAGE</label>
         <input type="file"  name="uploadfile"  style="width: 100%;" required >
         </div>
     
 <div class="input_field">
  <label>JOB TITLE</label>
  <input type="text" class="input" name="cname" required>
 </div>
 <div class="input_field">
  <label>COMPANY NAME </label>
  <input type="text" class="input" name="ename" required>
 </div>
 <div class="input_field">
  <label>JOB TYPE</label>
  <input type="text" class="input" name="password" required>
 </div>
 <div class="input_field">
  <label>JOB POST DATE</label>
  <input type="text" class="input" name="pnumber" required>
 </div>
 <div class="input_field">
   <label>SKILLS REQUIRED</label>
   <input type="text" class="input" name="cityname" required>
 </div>
 <div class="input_field">
   <label>CITY</label>
   <input type="text" class="input" name="statename" required>
 </div>
 <div class="input_field">
   <label>STATE</label>
   <input type="text" class="input" name="countryname" required>
 </div>
 <div class="input_field">
 <label>JOB DESCRIPTION</label>
 <textarea class="textarea" name="description" required></textarea>		
 </div>
 <div class="input_field terms">
    <label class="check">
    <input type="checkbox" required>
    <span class="checkmark"></span>
    </label>
 <p>Agree to terms and conditions</p>
 </div>
<div  class="input_field">
 <input type="submit" value="Register" class="btn" name="register"> 
 </div>
 </div>
    </form>
 </div>
 </body>
 </html>
 
 <?php 
    if($_POST['register'])
 {
        
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder ="images/".$filename;
move_uploaded_file($tempname, $folder);
     $cname   = $_POST['cname'];
     $ename   = $_POST['ename'];
     $pwd     = $_POST['password'];
     $pno     = $_POST['pnumber'];
     $ciname  = $_POST['cityname'];
     $stname  = $_POST['statename'];
     $conname = $_POST['countryname'];
     $desc    = $_POST['description'];
     $query = "INSERT INTO FILE(std_image,jobname,cname,jobtype,postdate,skills,city,state,description) VALUES('$folder','$cname','$ename','$pwd','$pno','$ciname','$stname','$conname','$desc')";
     $data = mysqli_query($conn,$query);
     if($data)
     {
         echo "<script>alert('Data Inserted Sucessfully!!')</script>";

     }
      else 
     {
        echo "<script>alert('Failed to inserted')</script>";

     }
 }

 
 ?>
