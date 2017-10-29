<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>

<body>
<div>

<h1>Sign up for new account</h1>

<form id="mainForm" action="createAccount.php" method="post">

	<input type="text" id="uname" name="uname" placeholder="Username">
	<label for="uname">Username</label>
	<br /><br />

	<input type="password" id="pass" name="pass" placeholder="Password"></input>
	<label for="pass">Password</label>
	<br /><br />

	<input type="submit" value="Create Account" />

</form>


</div>

</body>
</html>