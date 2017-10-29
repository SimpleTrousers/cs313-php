<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <script src="login.js"></script>
</head>
<body>
    <h1>Please Login or Register an Account</h1>

    <form action="redirect.php" onsubmit="return validate()" method="post">
        Username:
        <input type="text" id="uname" name="uname" autofocus required>
        <br>
        Password:
        <input type="password" id="pass" name="pass" required>
        <br>
        <br>
        <input type="hidden" name="pageFrom" value="loginPage">
        <input type="submit" class="submit" value="Login">
    </form>
    <form action="register.php" method="post">
        <input type="submit" class="submit" value="Register">
    </form>
</body>
</html>