<?php
	
	require_once('db.php');

	function validateDoctors($username, $password, $flag){
		$conn = getConnection();
		$sql = "select * from doctors where username='{$username}' and password='{$password}' and flag='1'";
		
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		
		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}

	function getUserByName($username){
		$conn = getConnection();
		$sql = "select * from doctors where username='{$username}'";
		
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getDoctorsById($doctor_id){
		$conn = getConnection();
		$sql = "SELECT * from doctors where doctor_id='{$doctor_id}'";
		
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}

	function insertDoctors($user){
		$conn = getConnection();
		$flag=1;
		$sql = "insert into doctors values('','{$user['name']}','{$user['username']}','{$user['email']}', '{$user['password']}','{$flag}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateDoctors($user){
		$conn = getConnection();
		$sql = "UPDATE doctors set name='{$user['name']}', username='{$user['username']}',email='{$user['email']}', password='{$user['password']}' WHERE doctor_id='{$user['doctor_id']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteDoctors($doctor_id){
		$conn = getConnection();
		$sql = "UPDATE doctors set flag='0' WHERE doctor_id={$doctor_id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllPatients(){
		$conn = getConnection();
		$sql = "SELECT * from patients where flag='1'";

		$result = mysqli_query($conn, $sql);
		$patients = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($patients, $row);
		}

		return $patients;
	}

	function getPatientsById($patient_id){
		$conn = getConnection();
		$sql = "SELECT * from patients where patient_id='{$patient_id}'";
		
		$result = mysqli_query($conn, $sql);
		$patients = mysqli_fetch_assoc($result);

		return $patients;
	}

	function getAllDonors(){
		$conn = getConnection();
		$sql = "SELECT * from donors";

		$result = mysqli_query($conn, $sql);
		$donors = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($donors, $row);
		}

		return $donors;
	}

	function getAllMedicines(){
		$conn = getConnection();
		$sql = "SELECT * from medicines";

		$result = mysqli_query($conn, $sql);
		$medicines = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($medicines, $row);
		}

		return $medicines;
	}


	function search(){
    	$conn = getConnection();
		$sql = "SELECT * FROM medicines WHERE name LIKE '".$_GET['search']."%'";
		
		$result = mysqli_query($conn, $sql);
		$medicines = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($medicines, $row);
		}

		return $medicines;
        
    }

    function insertAcceptPatients($data){
		$conn = getConnection();
		$sql = "INSERT into accept_patients values('','{$data['patient_id']}','{$_SESSION['user_detail']['doctor_id']}','{$data['name']}','{$data['age']}','{$data['gender']}','{$data['details']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAcceptPatients(){
		$conn = getConnection();
		$sql = "SELECT * from accept_patients where doctor_id={$_SESSION['user_detail']['doctor_id']}";

		$result = mysqli_query($conn, $sql);
		$time_schedule = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($time_schedule, $row);
		}

		return $time_schedule;
	}

	function getAcceptPatientsById($id){
		$conn = getConnection();
		$sql = "SELECT * from accept_patients where id='{$id}'";
		
		$result = mysqli_query($conn, $sql);
		$patients = mysqli_fetch_assoc($result);

		return $patients;
	}

	function updatePatients($patient_id){
		$conn = getConnection();
		$sql = "UPDATE patients set flag='0' WHERE patient_id={$patient_id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function insertMedicines($data){
		$conn = getConnection();
		$sql = "insert into medicines values('','{$data['medicine_name']}','{$data['medicine_company']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function insertTimeSchedule($data){
		$conn = getConnection();
		$sql = "insert into time_schedule values('','{$_SESSION['user_detail']['doctor_id']}','{$data['morning1']}','{$data['morning2']}','{$data['afternoon1']}','{$data['afternoon2']}','{$data['night1']}','{$data['night2']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getTimeSchedule(){
		$conn = getConnection();
		$sql = "SELECT * from time_schedule where doctor_id='{$_SESSION['user_detail']['doctor_id']}'";

		$result = mysqli_query($conn, $sql);
		$time_schedule = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($time_schedule, $row);
		}

		return $time_schedule;
	}

	function getTimeScheduleById($id){
		$conn = getConnection();
		$sql = "SELECT * from time_schedule where id='{$id}'";
		
		$result = mysqli_query($conn, $sql);
		$patients = mysqli_fetch_assoc($result);

		return $patients;
	}

	function updateTimeSchedule($data){
		$conn = getConnection();
		$sql = "UPDATE time_schedule set doctor_id='{$_SESSION['user_detail']['doctor_id']}',morning1='{$data['morning1']}', morning2='{$data['morning2']}',afternoon1='{$data['afternoon1']}', afternoon2='{$data['afternoon2']}',night1='{$data['night1']}', night2='{$data['night2']}' WHERE id='{$data['id']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>