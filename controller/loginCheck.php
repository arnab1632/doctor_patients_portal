<?php
	session_start();
	require_once('../model/doctorModel.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$_SESSION['user_detail'] = getUserByName($username);
		$flag = $_SESSION['user_detail']['flag'];

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{

			$status = validateDoctors($username, $password, $flag);
			if($status){
				$_SESSION['flag'] = true;
				$_SESSION['username'] = $username;
				$_SESSION['user_detail'] = getUserByName($username);

				header('location: ../view/profile.php');

			}else{
				echo "invalid user";
			}
		}

	}
?>