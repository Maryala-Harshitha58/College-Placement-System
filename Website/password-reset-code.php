<?php
session_start();
include('connection.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function send_password_reset($get_name, $get_email, $token)
{ 
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = "smtp.gmail.com";
    $mail->SMTPAuth   = true;
    $mail->Username   = "maryalaharshitha7@gmail.com";
    $mail->Password   = "***";
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;

    $mail->setFrom('maryalaharshitha7@gmail.com', $get_name);
    $mail->addAddress($get_email);

    $mail->isHTML(true);
    $mail->Subject = "Reset Password Notification";

    $email_template = "<h2> Hello</h2>
           <h3>You are receiving this email because we received a password reset request for your account.</h3>
           <br><br>
           <a href='http://localhost/Website/password-change.php?token=$token&email=$get_email'>click Me</a>";

    $mail->Body = $email_template;

    // Enable verbose debug output
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    try {
        $mail->send();
        echo 'Email sent successfully!';
    } catch (Exception $e) {
        echo 'Email could not be sent. Error: ', $mail->ErrorInfo;
    }
}

if (isset($_POST['reset'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $token = md5(rand());
    $check_email = "SELECT * FROM reg WHERE email='$email' LIMIT 1";
    $check_email_run = mysqli_query($con, $check_email);

    // Debug the query
    echo 'Query: ', $check_email, '<br>';
    echo 'Rows: ', mysqli_num_rows($check_email_run), '<br>';

    if (mysqli_num_rows($check_email_run) > 0) {
        $row = mysqli_fetch_array($check_email_run);
        $get_name = $row['fullName'];
        $get_email = $row['email'];
        $update_token = "UPDATE reg SET verify_token='$token' WHERE email='$get_email' LIMIT 1";
        $update_token_run = mysqli_query($con, $update_token);

        if ($update_token_run) {
            send_password_reset($get_name, $get_email, $token);
            $_SESSION['status'] = "We e-mailed you a password reset link";
            header("Location:password-reset.php");
            exit(0);
        } else {
            $_SESSION['status'] = "Something went wrong";
            header("Location:password-reset.php");
            exit(0);
        }
    } else {
        $_SESSION['status'] = "No Email Found";
        header("Location:password-reset.php");
        exit(0);
    }
}