<!DOCTYPE html>
<html>
<head>
	<title>Appointments Page</title>
	<link rel="stylesheet" type="text/css" href="appointment.css">
</head>
<body>

<form action="logout.php" method="post">
	<ul>
		<li><a href="https://cryptic-refuge-67781.herokuapp.com/Prove06/appointment.php">Appointments</a></li>
		<li><input type="submit" value="Logout"></li>
	</ul>
</form>

<?php
session_start();

if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}
else
{
	header("Location: login.php");
	die();
}

require("connectDB.php");
get_db();

$stmt = $_SESSION['db']->prepare('SELECT * FROM public.user where username=:uname');
$stmt->bindValue(':uname', $username, PDO::PARAM_STR);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	$_SESSION['id'] = $row['id'];
	$_SESSION['admin'] = $row['admin'];
	$_SESSION['fname'] = $row['first_name'];
	$_SESSION['lname'] = $row['last_name'];
}

echo '<h1> Welcome back, ';
echo $_SESSION['fname'];
echo ' ';
echo $_SESSION['lname'];
echo '! ';

echo $_SESSION['username'];

?>

<h1>Make an Appointment!</h1>

<form action="redirect.php" method="post">
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
				<input type="number" name="year" maxlength="2" min="2017" max="2018" size="2">
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<input type="submit" value="Make Appointment">
			</td>
		</tr>
	</table>
</form>

<table>
	<tr>
		<th colspan="4">My Appointments</th>
	</tr>
	<tr>
		<th>Military Hour</th>
		<th>Day</th>
		<th>Month</th>
		<th>Year</th>
	</tr>
	
	<?php

	$stmt = $_SESSION['db']->prepare('SELECT * FROM appointment where doctor_id=:did');
	$stmt->bindValue(':did', $_SESSION['id'], PDO::PARAM_STR);
	$stmt->execute();

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		$mhour = $row['military_hour'];
		$day = $row['day'];
		$month = $row['month'];
		$year = $row['year'];

		echo '<tr>';
		echo '<td>';
		echo $mhour;
		echo '</td>';
		echo '<td>';
		echo $day;
		echo '</td>';
		echo '<td>';
		echo $month;
		echo '</td>';
		echo '<td>';
		echo $year;
		echo '</td>';
		echo '</tr>';
	}

	$stmt = $_SESSION['db']->prepare('SELECT * FROM appointment where patient_id=:pid');
	$stmt->bindValue(':pid', $_SESSION['id'], PDO::PARAM_STR);
	$stmt->execute();

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		$mhour = $row['military_hour'];
		$day = $row['day'];
		$month = $row['month'];
		$year = $row['year'];

		echo '<tr>';
		echo '<td>';
		echo $mhour;
		echo '</td>';
		echo '<td>';
		echo $day;
		echo '</td>';
		echo '<td>';
		echo $month;
		echo '</td>';
		echo '<td>';
		echo $year;
		echo '</td>';
		echo '</tr>';
	}

	?>
</table>

</body>
</html>