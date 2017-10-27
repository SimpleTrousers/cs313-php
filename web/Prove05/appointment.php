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

	var_dump($_SESSION);
	// $stmt = $db->prepare('select * from appointment where doctor_id=:did');

	echo '<h1> Welcome back, ';
	// echo $_SESSION['username'];
	echo ' ';
	// echo $_SESSION['password'];
	echo '! ';
	echo $_SESSION['test'];

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