<?php
session_start();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['uname'];
$password = $_POST['pass'];

if (!isset($username) || $username == ""
	|| !isset($password) || $password == "")
{
	header("Location: register.php");
	die();
}

$username = htmlspecialchars($username);

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

require("connectDB.php");
$db = get_db();
$query = 'INSERT INTO public.user(username, password, first_name, last_name, admin) VALUES(:username, :password, :fname, :lname, false)';
$stmnt = $db->prepare($query);
$stmnt->bindValue(':username', $username);
$stmnt->bindValue(':password', $hashedPassword);
$stmnt->bindValue(':fname', $fname);
$stmnt->bindValue(':lname', $lname);
$stmnt->execute();

header("Location: login.php");
die();
?>