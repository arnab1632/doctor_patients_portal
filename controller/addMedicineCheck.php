<?php
	session_start();
	require_once('../model/doctorModel.php');

	if(isset($_POST['add'])){

		$medicine_name = $_POST['medicine_name'];
		$medicine_company = $_POST['medicine_company'];

		$data = [
			'medicine_name' => $medicine_name,
			'medicine_company' => $medicine_company
		];

		$status = insertMedicines($data);

		if($status){
			header('location: ../view/Check_medicine_list.php');
		}else{
			echo "error";
		}

	}
?>