<?php 

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'file-management';

//Making connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Failed " . $conn->connect_error);
}


?>