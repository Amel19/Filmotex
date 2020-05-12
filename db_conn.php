<?php
$servername = "localhost";
$username = "amelsabovic";
$password = "eurotec11";
$dbname = "filmotex";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>