<?php
	session_start();
	include('header.php');
	require_once("/xampp/htdocs/Doctor/model/doctorModel.php");
	$time_schedule = getTimeScheduleById($_GET['id']);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Update Schedule</title>
	</head>

	<body>
		<center>
			<form action="../controller/updateTimeScheduleCheck.php" method="POST">
				<input type="hidden" name="id" value="<?=$_GET['id']?>">
				<p>Morning: <input type="time" name="morningtime1" min="06:01" max="12:00" value="<?=$time_schedule['morning1']?>"> - <input type="time" name="morningtime2" min="06:01" max="12:00" value="<?=$time_schedule['morning2']?>"></p>
				<p>Moring time is 06:01 AM to 12:00 PM.</p>
				<p>Afternoon: <input type="time" name="afternoontime1" min="12:01" max="18:00" value="<?=$time_schedule['afternoon1']?>"> - <input type="time" name="afternoontime2" min="12:01" max="18:00" value="<?=$time_schedule['afternoon2']?>"></p>
				<p>Afternoon time is 12:01 PM to 06:00 PM.</p>
				<p>Night: <input type="time" name="nighttime1" min="18:01" max="06:00" value="<?=$time_schedule['night1']?>"> - <input type="time" name="nighttime2" min="18:01" max="06:00" value="<?=$time_schedule['night2']?>"></p>
				<p>Night time is 06:01 PM to 06:00 AM.</p>
				<input type="submit" name="submit" value="Submit"></a>
			</form>
		</center>
	</body>
</html>
<?php 
	include('footer.php')
?>