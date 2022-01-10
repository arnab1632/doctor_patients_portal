<?php
	session_start();
	include('header.php');
	require_once("/xampp/htdocs/Doctor/model/doctorModel.php");
	$userlist = getAllDonors();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Donor Checklist</title>
	</head>

	<body>
	<center>

		<table border="1" align="center" width=1000 >
			<tr>
				<th>Name</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Blood Group</th>
			</tr>
			<?php for($i=0; $i< count($userlist); $i++){ ?>
				<tr>
					<td><?=$userlist[$i]['name']?></td>
					<td><?=$userlist[$i]['age']?></td>
					<td><?=$userlist[$i]['gender']?></td>
					<td><?=$userlist[$i]['blood_group']?></td>
				</tr>
			<?php } ?>
		</table>
		</table>
	</center>
	</body>
</html>

<?php 
	include('footer.php')
?>