<?php
// Include the database configuration file
include('regphp.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $fullName=$_POST['fullName'];
    $userName = $_POST['userName'];
    $email = $_POST['email'];
	$phoneNumber=$_POST['phoneNumber'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
	$conformPassword=conformPassword_hash($_POST['conformPassword'],CONFORMPASSWORD_DEFAULT);

    // Insert data into the database
    $query = "INSERT INTO registartion (fullName,userName,email,phoneNumber,password,conformPassword) VALUES ('$fullName','$username','$email'
	,'$phoneNumber','$password','$conformPassword')";

    if (mysqli_query($conn, $query)) {
        echo "Registration successful!";
    }
    else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
}
?>
