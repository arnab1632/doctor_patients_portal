<?php
	session_start();
	require_once('../model/doctorModel.php');

	if(isset($_POST['add'])){

		$morningtime1 = $_POST['morningtime1'];
		$morningtime2 = $_POST['morningtime2'];
		$afternoontime1 = $_POST['afternoontime1'];
		$afternoontime2 = $_POST['afternoontime2'];
		$nighttime1 = $_POST['nighttime1'];
		$nighttime2 = $_POST['nighttime2'];

		$data = [
			'morning1' => $morningtime1,
			'morning2' => $morningtime2,
			'afternoon1' => $afternoontime1,
			'afternoon2' => $afternoontime2,
			'night1' => $nighttime1,
			'night2' => $nighttime2,
		];

		$status = insertTimeSchedule($data);

		if($status){
			header('location: ../view/Time_schedule.php');
		}else{
			echo "error";
		}

	}
?>