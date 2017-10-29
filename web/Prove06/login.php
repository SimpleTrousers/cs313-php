<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="appointment.css">
</head>
<body>
    <h1>Please Login or Register an Account</h1>

    <form action="redirect.php" method="post">
        Username:
        <input type="text" name="uname" autofocus><br>
        Password:
        <input type="password" name="pass"><br>
        <input type="hidden" name="pageFrom" value="loginPage">
        <input type="submit" class="submit" value="Login">
    </form>
    <form action="register.php" method="post">
        <input type="submit" class="submit" value="Register">
    </form>
</body>
</html>