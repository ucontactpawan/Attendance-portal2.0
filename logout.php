<?php  

session_start();
session_destroy(); // Destroy the session to log out the user
header('Location: login.php');
exit();
?>