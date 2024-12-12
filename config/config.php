<?php
$host = 'localhost';  
$database = 'exam';  
$username = 'root';  
$password = '';  

$conn = new mysqli($host, $username, $password, $database);

if ($conn->error) {
    die("fail: " . $conn->error);
}
?>