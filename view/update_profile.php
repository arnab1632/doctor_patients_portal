<?php
	session_start();
	include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>
</head>
<body>

	<center>
	<h1>Update Profile</h1>
		<form action="../controller/updateCheck.php" method="POST">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td>
						<p>Name: </p>
						<input type="text" name="name" value="<?=$_SESSION['user_detail']['name']?>"/>
					</td>
				</tr>
				<tr>
					<td>
						<p>Username: </p>
						<input type="text" name="username" value="<?=$_SESSION['user_detail']['username']?>"/>
					</td>
				</tr>
				<tr>
					<td>
						<p>Email: </p>
						<input type="text" name="email" value="<?=$_SESSION['user_detail']['email']?>"/>
					</td>
				</tr>
				<tr>
					<td>
						<p>Password: </p>
						<input type="text" name="password" value="<?=$_SESSION['user_detail']['password'] ?>"/>
					</td>
				</tr>				
				<tr>
					<td>
						</br><input type="submit" name="submit" value="Update">
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