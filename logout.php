<?php
session_start();
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $_SESSION['logout_msg'] = "You have successfully Logout. $email.";
    unset($_SESSION['email']);
} 
header("Location: login.php");
exit();
?>