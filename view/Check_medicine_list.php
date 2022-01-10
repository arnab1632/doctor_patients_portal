<?php
	session_start();
	include('header.php');
	require_once("/xampp/htdocs/Doctor/model/doctorModel.php");
	$medicinelist = getAllMedicines();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Medicine Checklist</title>
	</head>

	<body>
		<center>
			<input type="text" name="search" id="search" placeholder="Name of medicine" onkeyup="searchByAjax(this.value)" />
			<input type="submit" name="submit" value="Search"/>
			<p id="result"></p>


			<div id="allmedicine">
				<h2>Do you want to <a href="add_medicine.php">add medcicine</a> in medicine list?</h2>
				<table border="1" align="center" width=1000>
					<tr>
						<th>Medicine Name</th>
						<th>Company Name</th>
						
					</tr>
					<?php for($i=0; $i< count($medicinelist); $i++){ ?>
						<tr>
							<td><?=$medicinelist[$i]['name']?></td>
							<td><?=$medicinelist[$i]['company']?></td>
						</tr>
					<?php }?>
				</table>
			</div>
		</center>
		<script>                          
          	function searchByAjax(search){
				let name=document.getElementById("search");
				let result=document.getElementById("result");
				let allmedicine=document.getElementById("allmedicine");
				let xhttp=new XMLHttpRequest();
				
				xhttp.onreadystatechange=function(){
						
					if(this.readyState==4 && this.status==200){
							allmedicine.style.display = "none";
							result.innerHTML=this.responseText;
						}
					};
				xhttp.open("GET","search.php?search="+search,true);
				xhttp.send();
			}
		</script>
	</body>
</html>

<?php 
	include('footer.php')
?>