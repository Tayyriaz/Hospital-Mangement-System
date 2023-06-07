<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Discharege Sheet Info</title>
	<style>
		body{
			background-color: black;
		}
		table{
			margin-top: 40px;
			background-color: white;
			border: none;

		}
		table th,td{
			width:250px;
			height: 20px;
			text-align: left;
			font-family: cursive;
			padding: 5px;
		}
		h1{
			color: white;
			text-align: center;
			font-family: cursive;
		}
	</style>
</head>
<body>
	<h1>Discharge Sheet</h1>
	<?php

		$name=trim($_POST['name']);
		$SSN=trim($_POST['SSN']);
		$patno=trim($_POST['patno']);
		$age=trim($_POST['age']);
		$rad1=trim($_POST['rad1']);
		$medicinestogive=trim($_POST['medicinestogive']);
		$revisitdate=trim($_POST['revisitdate']);
		

		echo"
		<table border = 1 cellspacing=5 cellpadding=5 align=center>
		

		<tr>
		<th>Name</th>
		<td>".$name."</td>
		</tr>
		<tr>
		<th>SSN</th>
		<td>".$SSN."</td>
		</tr>
		<tr>
		<th>Patient No</th>
		<td>".$patno."</td>
		</tr>
		<tr>
		<th>Age</th>
		<td>".$age."</td>
		</tr>
		<tr>
		<th>Gender</th>
		<td>".$rad1."</td>
		</tr>
		<tr>
		<th>Phone Number</th>
		<td>".$medicinestogive."</td>
		</tr>
		<tr>
		<th>Med Condition</th>
		<td>".$revisitdate."</td>
		</tr>
		

		</table>";
?>

</body>
</html>