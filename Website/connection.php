<?php
error_reporting(0);
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP is empty
$database = "mgit"; // Change this to your database name
// Create connection
$conn =  mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn) {
    //echo "Connected successfully";
}
// Now you can perform database operations using $conn
else 
    {
    echo "Connection Failed".mysqli_connect_error();
}
// Close connection
//$conn->close();
?>
