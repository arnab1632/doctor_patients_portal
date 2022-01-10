<!DOCTYPE html>
<html>
<head>
	<title>Registraion Page</title>
	
	
	<script type="text/javascript">
		function validate(){
			let name = document.getElementById("name").value;
			let username = document.getElementById("username").value;
			let email = document.getElementById("email").value;
			let password = document.getElementById("password").value;
			let cpassword = document.getElementById("cpassword").value;
				
			if (name == "") {
		        document.getElementById("name_error").innerHTML="*Please enter your name.";
		        return false;
		    }
		    if (username == "") {
		        document.getElementById("username_error").innerHTML="*Please enter your username.";
		        return false;
		    }
		    if (email == "") {
		        document.getElementById("email_error").innerHTML="*Please enter a valid e-mail address.";
		        return false;
		    }
		    if (password == "") {
		        document.getElementById("password_error").innerHTML="*Please enter password";
		        return false;
		    }
		    if ((password.length <= 4) || (password.length >= 9) ) {
		        document.getElementById("password_error").innerHTML="*Password length must be between 5 to 10";
		        return false;
		    }
		    if (password != cpassword) {
		        document.getElementById("cpassword_error").innerHTML="*Password and Confirm password are not same";
		        return false;
		    }
		    return true;
		}	
	</script> 
</head>
<body>
	<center>
	<h1>Welcome to Doctor's Registration Page</h1>
	<h2><a href="../index.php">Home</a></h2>
		<form name="form" method="POST" action="../controller/registrationCheck.php" onsubmit="return validate()">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td><h1>Registration</h1></td>
				</tr>
				<tr>
					<td><p>Name:</p><input type="text" name="name" id="name"></td>
					<td><p id="name_error"></p></td>
				</tr>
				<tr>
					<td><p>Username:</p><input type="text" name="username" id="username"></td>
					<td><p id="username_error"></p></td>
				</tr>
				<tr>
					<td><p>Email:</p><input type="text" name="email" id="email"></td>
					<td><p id="email_error"></p></td>
				</tr>
				<tr>
					<td><p>Password:</p><input type="password" name="password" id="password"></td>
					<td><p id="password_error"></p></td>
				</tr>
				<tr>
					<td><p>Confirm Password:</p><input type="password" name="cpassword" id="cpassword"></td>
					<td><p id="cpassword_error"></p></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit">
						<a href="login.php">login</a>
					</td>
				</tr>

			</table>
		</form>
	</center>
	
</body>
</html>