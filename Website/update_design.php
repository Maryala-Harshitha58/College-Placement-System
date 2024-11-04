 <?php include("connection.php");
 $cn= $_GET['cn'];
 $query = "SELECT * FROM FORM  where cname='$cn' ";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="company.css">
<title>COMPANY UPDATE REGISTRATION</title>
</head>
<body>
<div class="container">
    <form  action="#" method="POST">
<div class="title">
 UPDATE COMPANY DETAILS
 </div>
 <div class="form">
 <div class="input_field">
  <label>Company Name</label>
  <input type="text"  value="<?php echo $result['cname']; ?>" class="input"  name="cname" required>
 </div>
 <div class="input_field">
  <label>Email </label>
  <input type="email" value="<?php echo $result['ename']; ?>"class="input" name="ename" required>
 </div>
 <div class="input_field">
  <label>Password</label>
  <input type="password" value="<?php echo $result['password']; ?>"class="input" name="password" required>
 </div>
 <div class="input_field">
  <label>Phone Number</label>
  <input type="number" value="<?php echo $result['pnumber']; ?>"class="input" name="pnumber" required>
 </div>
 <div class="input_field">
   <label>City</label>
   <input type="text"value="<?php echo $result['cityname']; ?>" class="input" name="cityname" required>
 </div>
 <div class="input_field">
   <label>State</label>
   <input type="text" value="<?php echo $result['statename']; ?>" class="input" name="statename" required>
 </div>
 <div class="input_field">
   <label>Country</label>
   <input type="text"  value="<?php echo $result['countryname']; ?>"class="input" name="countryname" required>
 </div>
 <div class="input_field">
 <label>Company Description</label>
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
     $query = "update form set cname='$cname',ename='$ename',password='$pwd',pnumber='$pno',cityname='$ciname',statename='$stname',countryname='$conname',description='$desc' WHERE cname='$cn' ";
     $data = mysqli_query($conn,$query);
     if($data)
     {
                       ?> 
           
           <meta http-equiv = "refresh" content = "0; url = http://localhost/Website/display.php" />
            <?php
     }
      else 
     {
        echo "Failed"; 
     }
 }
 ?>
