<?php
// remove all session variables
session_unset();

// destroy the session 
session_destroy();

header("Location: https://cryptic-refuge-67781.herokuapp.com/Prove05/login.php");
?>