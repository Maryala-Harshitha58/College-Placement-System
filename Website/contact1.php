<?php include("connection.php");?>

<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Responsive Contact us page</title>
<link rel="stylesheet" href="Con.css">
</head>
<body>
<div class="contact">
<div class="title">
<h2>CONTACT </h2>
</div>
<div class="box">

<div class="contact form">
<h3> Send a Message</h3>
 <form method="post">
<div class="formBox">
<div class="row50">
<div class="inputBox">
<span>First name</span>
<input type="text" placeholder="Maryala" name="fname">
</div>
<div class="inputBox">
<span>Last Name</span>
<input type="text" placeholder="Harshitha" name="lname">
</div>
</div>
<div class="row50">
<div class="inputBox">
<span>Email</span>
<input type="text" placeholder= "maryalaharshitha@gmail.com" name="email">
</div>
<div class="inputBox">
<span>Mobile</span>
<input	type="text" placeholder="+91 7093423924" name="number">
</div>
</div>
<div class="row100">
<div class="inputBox">
<span>Message</span>
<textarea placeholder="Write your message here..." name="message"></textarea>
</div>
</div>	
<div class="row100">
<div class="inputBox">
<input type="submit" value="Send" name="register">						`
</div>
</div>
</div>
</form>
</div>
<div class="contact info">
<h3>Contact Info</h3>
<div class="infoBox">
<div>
<span><ion-icon name="location"></ion-icon></span>
<p> Near Mgit college, Gandipet<br>Hyderabad(Ranga Reddy),Telangana.</p>
</div>
<div>
<span><ion-icon name="mail"></ion-icon></span>
<a href="mailto:maryalaharshitha@gmail.com">maryalaharshitha@gmail.com</a>
</div>
<div>
<span><ion-icon name="call"></ion-icon></span>
<a href="tel:+917093423924">+91 7093423924</a>
</div>
<ul class="sci">
<li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
<li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
<li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
<li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
</ul>
</div>
</div>
<div class="contact map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8211.727542631394!2d78
.31688321369612!3d17.390636466206452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb94ebf56f09a7%3A0xf748e727e9b5122c
!2sMahatma%20Gandhi%20Institute%20of%20Technology%20(MGIT)!5e0!3m2!1sen!2sin!4v1709128446053!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php 
    if($_POST['register'])
 {
     $cname   = $_POST['fname'];
     $ename   = $_POST['lname'];
     $pwd     = $_POST['email'];
     $pno     = $_POST['number'];
     $ciname  = $_POST['message'];
     $query = "INSERT INTO CON VALUES('$cname','$ename','$pwd','$pno','$ciname')";
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
