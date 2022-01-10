<?php
	session_start();
	include('header.php');

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add Medicine</title>
	</head>

<body>
	<center>
	<h1>Add Medicine</h1>
		<form action="../controller/addMedicineCheck.php" method="POST">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td>
						<p>Medicine Name: </p>
						<input type="text" name="medicine_name"/>
					</td>
				</tr>
				<tr>
					<td>
						<p>Medicine Company: </p>
						<input type="text" name="medicine_company"/>
					</td>
				</tr>
				<tr>
					<td>
						</br><input type="submit" name="add" value="Add">
					</td>
				</tr> 				
			</table>
		</form>
	</center>
</body>
</html>

<?php 
	include('footer.php')
?>