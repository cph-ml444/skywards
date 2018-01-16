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
session_start();

if (isset($_POST['submit'])) {
    $user_uid = mysqli_real_escape_string($conn, $_POST['user_uid']);
    $user_pwd = mysqli_real_escape_string($conn, $_POST['user_pwd']);
    
    if (empty($user_uid) || empty($user_pwd)) {    
            header("location: ../login.php?login=empty");
            exit();
        
        
    } else {
        $sql = "SELECT * FROM users WHERE user_uid='$user_uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("location: ../login.php?login=error");
            exit();
            
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                $hashedPwdCheck = password_verify($user_pwd, $row['user_pwd']);
                if ($hashedPwdCheck == false) {
                    header("location: ../login.php?login=error");
                    exit();
                } elseif ($hashedPwdCheck == true) {
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['user_first'] = $row['user_first'];
                    $_SESSION['user_last'] = $row['user_last'];
                    $_SESSION['user_email'] = $row['user_email'];
                    $_SESSION['user_uid'] = $row['user_uid'];
                    header("location: ../home.php");
            exit();
                }
            }
        }
    }
    
} else {
    header("location: ../login.php?login=error");
    exit();
}
