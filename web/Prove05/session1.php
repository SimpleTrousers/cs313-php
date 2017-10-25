<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
// $_SESSION["favcolor"] = "green";
// $_SESSION["favanimal"] = "cat";
// Echo session variables that were set on previous page
// echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
// echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

// default Heroku Postgres configuration URL
$dbUrl = getenv('DATABASE_URL');

$dbopts = parse_url($dbUrl);

print "<p>$dbUrl</p>\n\n";

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

print "<p>pgsql:host=$dbHost;port=$dbPort;dbname=$dbName</p>\n\n";

try
{
	// Create the PDO connection
	$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
	// this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $ex)
{
	// If this were in production, you would not want to echo
	// the details of the exception.
	echo "Error connecting to DB. Details: $ex";
	die();
}

foreach ($db->query('SELECT now()') as $row)
{
 print "<p>$row[0]</p>\n\n";
}

$stmt = $db->prepare('SELECT * FROM public.user');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

print $rows;

?>

<a href="https://cryptic-refuge-67781.herokuapp.com/Prove04/session2.php">Next Session</a>

</body>
</html>