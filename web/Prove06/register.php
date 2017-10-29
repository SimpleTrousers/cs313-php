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

<h1>Register an Account</h1>

<form id="mainForm" action="createAccount.php" method="post">
	<input type="text" id="fname" name="fname" placeholder="First Name" required>
	<label for="fname">First Name</label>
	<br /><br />

	<input type="text" id="lname" name="lname" placeholder="Last Name" required>
	<label for="lname">Last Name</label>
	<br /><br />

	<input type="text" id="uname" name="uname" placeholder="Username" required>
	<label for="uname">Username</label>
	<br /><br />

	<input type="password" id="pass" name="pass" placeholder="Password" required>
	<label for="pass">Password</label>
	<br /><br />

	<input type="submit" value="Create Account" />
</form>


</div>

</body>
</html>