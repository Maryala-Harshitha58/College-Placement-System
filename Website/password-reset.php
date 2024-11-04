<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
$page_title ="Password Reset Form";
include('connection.php');
?>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                
              <?php
                if(isset($_SESSION['status']))
                {
                    ?>
                <div class="alert alert-success">
                    <h5><?=$_SESSION['status'];?></h5>
                </div>
                <?php
                unset($_SESSION['status']);
                }
              ?>
                <div> 
<html>
    <head>
        <title>Reset password</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="lo-s.css">
       

    </head>
    <body>
        <div class="wrapper">
            <form action="password-reset-code.php" method="post">
                <h1>Reset Password</h1>
                <div class="input-box">
                    <label>Email Address</label>
                    <input type="email" placeholder="Enter Email Address" name="email" required >
                </div>
          
            
                <button  type="submit" class="btn" name="reset">Send Password Resent Link</button>
                  
            </form>
        </div>
    </body>
</html>
                </div>
               </div>
            </div>
        </div>
    </div>
