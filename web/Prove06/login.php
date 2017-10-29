<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div>
        <h1>Please Login or Register an Account</h1>

        <form action="redirect.php" onsubmit="return validate()" method="post">
            Username:
            <input type="text" id="uname" name="uname" placeholder="Username" autofocus required>
            <br>
            Password:
            <input type="password" id="pass" name="pass" placeholder="Password" required>
            <br>
            <br>
            <input type="hidden" name="pageFrom" value="loginPage">
            <input type="submit" class="submit" value="Login">
        </form>
        <form action="register.php" method="post">
            <input type="submit" class="submit" value="Register">
        </form>
    </div>
</body>
</html>