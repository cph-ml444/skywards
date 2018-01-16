<?php

$servername = "";
$username = "";
$password = "";
$dbname = "marcliljeqvist_dk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
if (isset($_POST['submit'])) {
    
    $user_first = filter_input(INPUT_POST, 'user_first')
		or die('Missing/illegal un parameter');
    $user_last = filter_input(INPUT_POST, 'user_last')
		or die('Missing/illegal un parameter');
    $user_email = filter_input(INPUT_POST, 'user_email')
		or die('Missing/illegal un parameter');
    $user_uid = filter_input(INPUT_POST, 'user_uid')
		or die('Missing/illegal un parameter');
    $user_pwd = filter_input(INPUT_POST, 'user_pwd')
		or die('Missing/illegal un parameter');
    $skywards = filter_input(INPUT_POST, 'skywards')
		or die('Missing/illegal un parameter');
    
    $user_pwd = password_hash($user_pwd, PASSWORD_DEFAULT);
    
    $sql = 'INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd, skywards) VALUES (?, ?, ?, ?, ?, ?)';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('ssssss', $user_first, $user_last, $user_email, $user_uid, $user_pwd);
	$stmt->execute();
	
	if ($stmt->affected_rows > 0){
		echo 'user_uid '.$user_uid.' added ';
	}
	else {
		echo 'Could not add the user... Please try with another username.';
	}
}
