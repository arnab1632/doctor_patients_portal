<?php
	session_start();
	include('header.php');
	require_once("/xampp/htdocs/Doctor/model/doctorModel.php");
	$user = getPatientsById($_GET['patient_id']);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Patient Profile</title>
	</head>

	<body>
		<center>
		   <img src="/Doctor/view/image/profile1.png" height="100" width="100">
			<p>First name: <?=$user['name']?> </p>
			<p>Age: <?=$user['age']?></p>
			<p>Gender: <?=$user['gender']?></p>
			<p>Description: <?=$user['details']?></p>
			<form action="../controller/acceptPatientCheck.php" method="POST">
				<input type="hidden" name="patient_id" value="<?=$user['patient_id']?>">
				<input type="hidden" name="name" value="<?=$user['name']?>">
				<input type="hidden" name="age" value="<?=$user['age']?>">
				<input type="hidden" name="gender" value="<?=$user['gender']?>">
				<input type="hidden" name="details" value="<?=$user['details']?>">
				<input type="submit" name="accept" value="Accept">
			</form>
		<center>
	</body>
</html>
<?php 
	include('footer.php')
?>