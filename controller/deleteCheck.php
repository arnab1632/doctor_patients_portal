<?php
	session_start();
	require_once('../model/doctorModel.php');

	if(isset($_POST['delete'])){

		$status = deleteDoctors($_SESSION['user_detail']['doctor_id']);

		if($status){
			header('location: logout.php');
		}else{
			echo "error";
		}
	}
?>