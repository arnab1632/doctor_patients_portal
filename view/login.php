<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<script type="text/javascript">
		function validate(){
			let username = document.getElementById("username").value;
			let password = document.getElementById("password").value;
					
		    if (username == "") {
		        document.getElementById("username_error").innerHTML="*Please enter your username.";
		        return false;
		    }
		   
		    if (password == "") {
		        document.getElementById("password_error").innerHTML="*Please enter password";
		        return false;
		    }
		    return true;
		}	
	</script> 
	
</head>
<body>
	<center>
	<h1>Welcome to Doctor's Login Page</h1>
	<h2><a href="../index.php">Home</a></h2>
		<form method="post" action="../controller/loginCheck.php" onsubmit="return validate()">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td><h1>Login</h1></td>
				</tr>
				<tr>
					<td><p>Username:</p><input type="text" name="username" id="username"></td>
					<td><p id="username_error"></p></td>
				</tr>				
				<tr>
					<td><p>Password:</p><input type="password" name="password" id="password"><br/></td>
					<td><p id="password_error"></p></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Login">
						<a href="registration.php">Register</a>
					</td>
				</tr>                          
			</table>
		</form>
	</center>
</body>
</html>