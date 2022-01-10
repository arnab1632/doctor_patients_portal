<?php
	session_start();
	include('header.php');
	require_once("/xampp/htdocs/Doctor/model/doctorModel.php");
	$patient =  getAcceptPatientsById($_GET['id']);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Accepted Patient Profile</title>
	</head>

	<body>
		<center>
		   <img src="/Doctor/view/image/profile1.png" height="100" width="100">
			<p>First name: <?=$patient['name']?> </p>
			<p>Age: <?=$patient['age']?></p>
			<p>Gender: <?=$patient['gender']?></p>
			<p>Description: <?=$patient['details']?></p>
		<center>
	</body>
</html>
<?php 
	include('footer.php')
?>