<?php
session_start();
session_destroy();
if(isset($_COOKIE['name'])) {
    setcookie('name', '', time() - 3600); 
    setcookie('email', '', time() - 3600); 
}
header("Location: login.php");