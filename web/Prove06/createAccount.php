<?php
session_start();

// get the data from the POST
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
// Let's not allow HTML in our usernames. It would be best to also detect this before
// submitting the form and preven the submission.
$username = htmlspecialchars($username);
// Get the hashed password.
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
// Connect to the database
require("dbConnect.php");
get_db();
$query = 'INSERT INTO public.user(username, password, first_name, last_name, admin) VALUES(:username, :password, :fname, :lname, false)';
$stmnt = $_SESSION['db']->prepare($query);
$stmnt->bindValue(':username', $username);
$stmnt->bindValue(':password', $hashedPassword);
$stmnt->bindValue(':fname', $fname);
$stmnt->bindValue(':lname', $lname);
$stmnt->execute();
// finally, redirect them to the login page
header("Location: login.php");
die();
?>