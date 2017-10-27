<?php
session_start();

// default Heroku Postgres configuration URL
$dbUrl = getenv('DATABASE_URL');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

try
{
	// Create the PDO connection
	$_SESSION['db'] = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
	// this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
    $_SESSION['db']->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $ex)
{
	// If this were in production, you would not want to echo
	// the details of the exception.
	echo "Error connecting to DB. Details: $ex";
	die();
}

function appointment() {

    $_SESSION['test2'] = "This is another test";

    $_SESSION['username'] = $_POST['uname'];
    $_SESSION['password'] = $_POST['pass'];

    $stmt = $_SESSION['db']->prepare('SELECT * FROM public.user where username=:uname and password=:pword');
    $stmt->bindValue(':pword', $_SESSION['username'], PDO::PARAM_STR);
    $stmt->bindValue(':uname', $_SESSION['password'], PDO::PARAM_STR);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
        // The variable "row" now holds the complete record for that
        // row, and we can access the different values based on their
        // name
        // echo '<h1> Hello! Welcome back, ';
    $_SESSION['fname'] = $row['first_name'];
        // echo ' ';
    $_SESSION['lname'] = $row['last_name'];
        // echo '!';
        // echo '</h1>';
    }

    // $_SESSION['test'] = 'app1';
    // ++$_SESSION['test'];
    
    header("Location: https://cryptic-refuge-67781.herokuapp.com/Prove05/appointment.php");
}

if ($_POST['pageFrom'] == 'loginPage') {
    appointment();
}
?>