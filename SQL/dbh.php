<?php
$servername = "";
$username = "root";
$password = "root";
$dbname = "marcliljeqvist_dk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 