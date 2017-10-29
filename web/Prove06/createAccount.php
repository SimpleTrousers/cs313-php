<?php
session_start();

// get the data from the POST
$_SESSION["username"] = $_POST['uname'];
$_SESSION["password"] = $_POST['pass'];

if (!isset($_SESSION["username"]) || $_SESSION["username"] == ""
	|| !isset($_SESSION["password"]) || $_SESSION["password"] == "")
{
	header("Location: register.php");
	die();
}
// Let's not allow HTML in our usernames. It would be best to also detect this before
// submitting the form and preven the submission.
$_SESSION["username"] = htmlspecialchars($_SESSION["username"]);
// Get the hashed password.
$hashedPassword = password_hash($_SESSION["password"], PASSWORD_DEFAULT);
// Connect to the database
require("dbConnect.php");
get_db();
$query = 'INSERT INTO public.user(username, password) VALUES(:username, :password)';
$stmnt = $_SESSION['db']->prepare($query);
$stmnt->bindValue(':username', $_SESSION["username"]);
$stmnt->bindValue(':password', $hashedPassword);
$stmnt->execute();
// finally, redirect them to the sign in page
header("Location: login.php");
die();
?>