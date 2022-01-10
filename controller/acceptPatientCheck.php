<?php
	session_start();
	require_once('../model/doctorModel.php');

	if(isset($_POST['accept'])){

		$patient_id = $_POST['patient_id'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$details = $_POST['details'];

		$data = [
			'patient_id' => $patient_id,
			'name' => $name,
			'age' => $age,
			'gender' => $gender,
			'details' => $details
		];

		$status = insertAcceptPatients($data);
		$status1 = updatePatients($patient_id);


		if($status && $status1){
			header('location: ../view/accepted_patient_list.php');
		}else{
			echo "error";
		}
	}
?>