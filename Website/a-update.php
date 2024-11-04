<?php include("connection.php");
 $cn= $_GET['cn'];
 $query = "SELECT * FROM admin  where email='$cn' ";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title >Registration form</title>
<link rel="stylesheet"href="a_Frnd.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<div class="wrapper">

    <form  action="#" method="POST" enctype="multipart/form-data">
<h1>Registration</h1>
<div class="input-box">
<div class="input-field">
<input type="text" value="<?php echo $result['fullName']; ?>" placeholder="Full Name" name="fname"required>
<i class='bx bxs-user'></i>
</div>
<div class="input-field">
<input type="text" value="<?php echo $result['id']; ?>"
placeholder="ID" name="year" required>
<i class='bx bxs-graduation'></i>
</div>
</div>
<div class="input-box">
<div class="input-field">
<input type="email" value="<?php echo $result['email']; ?>"
placeholder="Email" name="email"required>
<i class='bx bxs-envelope'></i>
</div>
<div class="input-field">
<input type="number" value="<?php echo $result['pnumber']; ?>"
placeholder="Phone Number" name="pnumber"required>
<i class='bx bxs-phone'></i>
</div>
</div>
<div class="input-box">
<div class="input-field">
<input type="password" value="<?php echo $result['password']; ?>"
placeholder="Password" name="password"required>
<i class='bx bxs-lock-alt'></i>
</div>
<div class="input-field">
<input type="text" value="<?php echo $result['qualification']; ?>"
placeholder="Qualification" name="qualification"required>
<i class='bx bx-book-bookmark'></i>
</div>
</div>
<label><input type="checkbox">I hereby declare that the above information provided is true and correct</label>

<input type="submit" value="Register" class="btn" name="register">
</form>
</div>
</body>
</html>

<?php
include("connection.php");

if(isset($_POST['register'])) {
    $fname = $_POST['fname'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pnumber = $_POST['pnumber'];
    $qualification = $_POST['qualification'];
 $query = "update admin set fullName='$fname',id='$year',email='$email',password='$password',pnumber='$pnumber',qualification='$qualification' WHERE email='$cn' ";
     $data = mysqli_query($conn,$query);
     if($data)
     {
                       ?> 
           
           <meta http-equiv = "refresh" content = "0; url = http://localhost/Website/a_report.php" />
            <?php
     }
      else 
     {
        echo "Failed"; 
     }
 }
 ?>


