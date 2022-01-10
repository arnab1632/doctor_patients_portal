<?php
	session_start();
	include('header.php');
	require_once("/xampp/htdocs/Doctor/model/doctorModel.php");
	$patientlist = getAcceptPatients();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Accept Patientlist</title>
	</head>

	<body>
	<center>
		<table border="1" align="center" width=1000 >
			<tr>
				<th>Name</th>
				<th>Age</th>
				<th>Gender</th>
			</tr>
			<?php for($i=0; $i< count($patientlist); $i++){ ?>
				<tr>
					<td><?=$patientlist[$i]['name']?></td>
					<td><?=$patientlist[$i]['age']?></td>
					<td><?=$patientlist[$i]['gender']?></td>
					<td>
						<a href="accepted_patient_profile.php?id=<?=$patientlist[$i]['id']?>"><input type="button" name="submit" value="Full Details"></a>
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