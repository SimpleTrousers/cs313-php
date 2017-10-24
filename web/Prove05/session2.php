<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// to change a session variable, just overwrite it 
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>

</body>
</html>