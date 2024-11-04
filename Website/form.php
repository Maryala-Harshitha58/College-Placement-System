<?php include("connection.php");?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="company.css">
<title>COMPANY REGISTRATION</title>
</head>
<body>
<div class="container">
    <form  action="#" method="POST" enctype="multipart/form-data">
<div class="title">
 COMPANY REGISTRATION FORM
 </div>
 <div class="form">
     <div class="input_field" >
         <label>Upload Image</label>
         <input type="file"  name="uploadfile"  style="width: 100%;" required >
         </div>
 <div class="input_field">
  <label>Company Name</label>
  <input type="text" class="input" name="cname" required>
 </div>
 <div class="input_field">
  <label>Email </label>
  <input type="email" class="input" name="ename" required>
 </div>
 <div class="input_field">
  <label>Password</label>
  <input type="password" class="input" name="password" required>
 </div>
 <div class="input_field">
  <label>Phone Number</label>
  <input type="number" class="input" name="pnumber" required>
 </div>
 <div class="input_field">
   <label>City</label>
   <input type="text" class="input" name="cityname" required>
 </div>
 <div class="input_field">
   <label>State</label>
   <input type="text" class="input" name="statename" required>
 </div>
 <div class="input_field">
   <label>Country</label>
   <input type="text" class="input" name="countryname" required>
 </div>
 <div class="input_field">
 <label>Company Description</label>
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
     $query = "INSERT INTO FORM VALUES('$cname','$ename','$pwd','$pno','$ciname','$stname','$conname','$folder','$desc')";
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
