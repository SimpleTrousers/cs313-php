<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <title>Login Page</title>
<body>
    <h1>Please Log In!</h1>

    <form action="redirect.php" method="post">
        Username:
        <input type="text" name="uname"><br>
        Password:
        <input type="password" name="pass"><br>
        <input type="submit">
    </form>
</body>
</html>