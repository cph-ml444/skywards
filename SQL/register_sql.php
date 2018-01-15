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


if (isset($_POST['submit'])) {
    
    $user_first = mysqli_real_escape_string($conn, $_POST['user_first']);
    $user_last = mysqli_real_escape_string($conn, $_POST['user_last']);
    $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $user_uid = mysqli_real_escape_string($conn, $_POST['user_uid']);
    $user_pwd = mysqli_real_escape_string($conn, $_POST['user_pwd']);
    $skywards = mysqli_real_escape_string($conn, $_POST['skywards']);
    
    //undersøg tomme felter
    
    if (empty($user_first) || empty($user_last) || empty($user_email) || empty($user_uid) || empty($user_pwd) || empty($skywards)) {
        
       header("location: ../register.php?register=empty");
       exit();
        
    } else {
        if (!preg_match("/^[a-zA-Z]*$/", $user_first) || !preg_match("/^[a-zA-Z]*$/", $user_last)) {
            header("location: ../register.php?invalid");
            exit();
            
        } else {
            if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
                header("location: ,,/register.php?register=empty");
                exit();
                
            } else {
                $sql = "SELECT * FROM users WHERE user_uid='$user_uid'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                
                if ($resultCheck > 0) {
                    header("location: ../register.php?register=usertaken");
                    exit();
                    
                } else {
                    $hashedPwd = password_hash($user_pwd, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd, skywards) VALUES ('$user_first', '$user_last', '$user_email', '$user_uid', '$hashedPwd', '$skywards');";
                    mysqli_query($conn, $sql); 
                     header("location: ../login.php");
                    exit();
                }
            }
        }
    }
    
}  else {
        header("location: ../register.php");
        exit();
}