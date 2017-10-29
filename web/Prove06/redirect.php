<?php
session_start();

$_SESSION['username'] = $_POST['uname'];
$_SESSION['password'] = $_POST['pass'];

if ($_POST['pageFrom'] == 'loginPage') {
    header("Location: https://cryptic-refuge-67781.herokuapp.com/Prove05/appointment.php");
}
?>