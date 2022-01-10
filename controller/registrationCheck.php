<?php
	session_start();
	require_once('../model/doctorModel.php');

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirm_password = $_POST['cpassword'];
		$_SESSION['name'] = $name;
		$_SESSION['username'] = $username;
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;

		if($name == "" || $username == "" || $email == "" || $password == "" || $confirm_password == ""){
			echo "null submission...";
		}
		else{

			if($password == $confirm_password){

				$user = [
					'name' => $name,
					'username' => $username,
					'email' => $email,
					'password' => $password
				];

				$status = insertDoctors($user);

				if($status){
					header('location: ../view/login.php');
				}else{
					echo "error";
				}

			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>