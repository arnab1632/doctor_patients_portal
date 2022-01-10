<?php
	session_start();
	require_once('../model/doctorModel.php');

	if(isset($_POST['submit'])){

		$doctor_id = $_SESSION['user_detail']['doctor_id'];
		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$_SESSION['user_detail']['name'] = $name;
		$_SESSION['user_detail']['username'] = $username;
		$_SESSION['user_detail']['email'] = $email;
		$_SESSION['user_detail']['password'] = $password;

		$user = [
			'doctor_id' => $doctor_id,
			'name' => $name,
			'username' => $username,
			'email' => $email,
			'password' => $password
		];

		$status = updateDoctors($user);

		if($status){
			header('location: ../view/profile.php');
		}else{
			echo "error";
		}
	}
?>