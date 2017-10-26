<?php
// Start the session
session_start();
?>

<!DOCTYPE <html>
<html>
<body>
    <h1>Please Log In!</h1>

    <form action="redirect.php" method="post">
        Username:
        <input type="text" name="uname"><br>
        Password:
        <input type="text" name="pass"><br>
        <input type="submit">
    </form>
</body>
</html>