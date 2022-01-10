<?php
	session_start();
	include('header.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add New Schedule</title>
	</head>

	<body>
		<center>
			<form action="../controller/addTimeScheduleCheck.php" method="POST">
				<p>Morning: <input type="time" name="morningtime1" min="06:01" max="12:00"> - <input type="time" name="morningtime2" min="12:00" max="12:00"></p>
				<p>Moring time is 06:01 AM to 12:00 PM.</p>
				<p>Afternoon: <input type="time" name="afternoontime1" min="12:01" max="18:00"> - <input type="time" name="afternoontime2" min="12:01" max="18:00"></p>
				<p>Afternoon time is 12:01 PM to 06:00 PM.</p>
				<p>Night: <input type="time" name="nighttime1" min="18:01" max="06:00"> - <input type="time" name="nighttime2" min="18:01" max="06:00"></p>
				<p>Night time is 06:01 PM to 06:00 AM.</p>
				<input type="submit" name="add" value="Add"></a>
			</form>
		</center>
	</body>
</html>
<?php 
	include('footer.php')
?>