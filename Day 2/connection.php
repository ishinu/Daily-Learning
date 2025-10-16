<?php
$servername = "localhost";
$username = "root";
$password = ""; // Default password for XAMPP is an empty string
$db_name = "phplogin";

$conn = new mysqli($servername, $username, $password, $db_name, 3306); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "";
?>