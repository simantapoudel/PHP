<?php 

$servername = 'localhost';
$username = 'simanta';
$password = '';

//Creating a connection object 
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connection established";
}
$conn->close();