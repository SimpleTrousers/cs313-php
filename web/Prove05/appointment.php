<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Appointments Page</title>
	<link rel="stylesheet" type="text/css" href="doctor.css">
	<script src="appointment.js"></script>
</head>
<body>

<?php
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

$stmt = $_SESSION['db']->prepare('SELECT * FROM public.user where username=:uname and password=:pword');
$stmt->bindValue(':pword', $_SESSION['username'], PDO::PARAM_STR);
$stmt->bindValue(':uname', $_SESSION['password'], PDO::PARAM_STR);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	$_SESSION['fname'] = $row['first_name'];
	$_SESSION['lname'] = $row['last_name'];
}

echo '<h1> Welcome back, ';
echo $_SESSION['fname'];
echo ' ';
echo $_SESSION['lname'];
echo '! ';

?>

<h1>Make an Appointment!</h1>

<form action="redirect.php" meethod="post">
	<table>
		<tr>
			<th>Military Hour</th>
			<th>Day</th>
			<th>Month</th>
			<th>Year</th>
		</tr>
		<tr>
			<td>
				<select name="militaryHour">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
				</select>
			</td>
			<td>
				<input type="number" name="day" maxlength="2" max="31" size="2">
			</td> 
			<td>
				<input type="number" name="month" maxlength="2" max="12" size="2">
			</td>
			<td>
				<input type="number" name="year" maxlength="2" max="18" size="2">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Make Appointment">
			</td>
		</tr>
	</table>
</form>

<table>
	<tr>
		<th>My Appointments</th>
	</tr>
	<tr>
		<th>Military Hour</th>
		<th>Day</th>
		<th>Month</th>
		<th>Year</th>
	</tr>
	<tr>
		<td>
			<select name="militaryHour">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
			</select>
		</td>
		<td>
			<input type="number" name="day" maxlength="2" max="31" size="2">
		</td> 
		<td>
			<input type="number" name="month" maxlength="2" max="12" size="2">
		</td>
		<td>
			<input type="number" name="year" maxlength="2" max="18" size="2">
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" value="Make Appointment">
		</td>
	</tr>
</table>

<?php

function EndSession() {
	// remove all session variables
	session_unset();

	// destroy the session 
	session_destroy();

	echo '<h1>Session Ended!</h1>';
}

?>

<a href="https://cryptic-refuge-67781.herokuapp.com/Prove05/login.php" onclick="document.write('<?php EndSession(); ?>');">Logout!</a>

</body>
</html>