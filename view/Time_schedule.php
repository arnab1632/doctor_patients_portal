<?php
	session_start();
	include('header.php');
	require_once("/xampp/htdocs/Doctor/model/doctorModel.php");
	$time_schedule=getTimeSchedule();
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Time Shedule</title>
	</head>

	<body>
	<center>
		<h2>Do you want to <a href="add_new_schedule.php">add new schedule</a>?</h2>
		<table border="1" align="center" width=1000 >
			<tr>
				<th>Morning</th>
				<th>Afternoon</th>
				<th>Night</th>
				<th></th>
			</tr>
			<?php for($i=0; $i< count($time_schedule); $i++){ ?>
				<tr>
					<td><?=$time_schedule[$i]['morning1']?> - <?=$time_schedule[$i]['morning2']?></td>
					<td><?=$time_schedule[$i]['afternoon1']?> - <?=$time_schedule[$i]['afternoon2']?></td>
					<td><?=$time_schedule[$i]['night1']?> - <?=$time_schedule[$i]['night2']?></td>
					<td><a href="Update_schedule.php?id=<?=$time_schedule[$i]['id']?>"><input type="submit" name="change" value="Change"></a></td>			
				</tr>
			<?php } ?>
		</table> 
	</center>
	</body>
</html>
<?php 
	include('footer.php')
?>