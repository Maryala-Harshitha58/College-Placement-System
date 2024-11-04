<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Admin_login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="lo-a.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    </head>
    <body>
        <div class="wrapper">
            <form action="" method="post">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="email" placeholder="Email" name="ename" required >
                    
                </div>
            <div class="input-box">
                    <input type="password" placeholder="password" name="pass" required >
                    
                </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
               
                </div>
                <button  type="submit" class="btn">Login</button>
                <div class="register-link">
                    <p>Don't have an account?<a href="A_registeration.php">Register</a></p>
                </div>
            </form>
        </div>
    </body>
</html>
<?php
include("connection.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $ename=$_POST['ename'];
    $pass=$_POST['pass'];
    if(!empty($ename)&& !empty($pass)&& !is_numeric($ename))
    {
        $query="select * from admin where email ='$ename' limit 1";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data= mysqli_fetch_assoc($result);
                if($user_data['password']==$pass)
                {
                    header("Location:a_webpage.php");
                    die;
                    
                }
            }
        }
        echo"<script>alert('invalid email id or password')</script>";
    }
 else {
    echo"<script>alert('Sucessfully login')</script>";     
 }
}
?>

