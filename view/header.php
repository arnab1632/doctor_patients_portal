<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<table width="100%">
		<tr>
			<td align="center">
				<img src="/Doctor/view/image/img1.png" height="150" width="170">
				<h1>Welcome, <br><?php echo $_SESSION['user_detail']['username'];?>
				</h1>
			</td>
			<td align="right" valign="bottom">
				<h2></h2>
			</td>
			</tr>
		</table>
		<hr>
		<table width="100%">
		<tr>
			<td> 
				<h3><a href="/Doctor/view/profile.php">Profile</a><h3>
			</td>
			<td> 
				<h3><a href="/Doctor/view/Checklist_Of_ patient.php">Patient List</a><h3>
			</td>
			<td> 
				<h3><a href="/Doctor/view/accepted_patient_list.php">Accepted Patient List</a><h3>
			</td>
			<td>
				<h3><a href="/Doctor/view/Checklist_Of_donors.php">Donor List</a><h3>
			</td>
			<td>
				<h3><a href="/Doctor/view/Check_medicine_list.php">Medicine List</a><h3>
			</td>
			<td>
				<h3><a href="/Doctor/view/Time_schedule.php">Time Schedule</a><h3>	
			</td>
			<td>
				<h3><a href="../controller/logOut.php">Logout</a><h3>	
			</td>	
		</tr>
	</table>
</body>
</html>