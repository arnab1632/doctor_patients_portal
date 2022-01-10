<?php
	session_start();
	require_once("/xampp/htdocs/Doctor/model/doctorModel.php");
	$searchlist = search();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Search</title>
	</head>

	<body>
		<center>
		<table border=1 align=center width=1000>
			<tr>
				<td>Name</td>
				<td>Email</td>
			</tr>
			<?php for($i=0; $i< count($searchlist); $i++){ ?>
			<tr>
				<td><?=$searchlist[$i]['name']?></td>
				<td><?=$searchlist[$i]['company']?></td>
			</tr>
			<?php } ?>
		</table>	
		</center>
	</body>
</html>