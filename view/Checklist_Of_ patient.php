<?php
	session_start();
	include('header.php');
	require_once("/xampp/htdocs/Doctor/model/doctorModel.php");
	$userlist=getAllPatients();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Patient Checklist</title>
	</head>

	<body>
	<center>
		<table border="1" align="center" width=1000 >
			<tr>
				<th>Name</th>
				<th>Age</th>
				<th>Gender</th>
			</tr>
			<?php for($i=0; $i< count($userlist); $i++){ ?>
				<tr>
					<td><?=$userlist[$i]['name']?></td>
					<td><?=$userlist[$i]['age']?></td>
					<td><?=$userlist[$i]['gender']?></td>
					<td>
						<a href="Patient_profile.php?patient_id=<?=$userlist[$i]['patient_id']?>"><input type="button" name="submit" value="Full Details"></a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</center>
	</body>
</html>

<?php 
	include('footer.php')
?>