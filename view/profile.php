<?php
	session_start();
	include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<center>
		<h1>Profile</h1>
		<hr>
		<p>Name: <?=$_SESSION['user_detail']['name'] ?></p>
		<p>Username: <?=$_SESSION['user_detail']['username'] ?> </p>
		<p>Email: <?=$_SESSION['user_detail']['email'] ?> </p>
		<p>Password: <?=$_SESSION['user_detail']['password']?></p>
		<a href="update_profile.php?id=<?=$_SESSION['user_detail']['doctor_id']?>"><input type="button" name="submit" value="Update Profile"></a>
		<form action="../controller/deleteCheck.php" method="POST">
			<input type="submit" name="delete" value="Delete Account" onclick="return confirm('Do you want to delete your account?');">
		</form>
	</center>

</body>
</html>
