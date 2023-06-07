<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php
$id=trim($_POST['id']);
$room=trim($_POST['room']);
$ward=trim($_POST['ward']);
$patmname=trim($_POST['patname']);
$blood=trim($_POST['blood']);
$med=trim($_POST['med']);
$disease=trim($_POST['disease']);
$gender=trim($_POST['gender']);
echo"
<table border = 1>
<tr>
<th>Report ID</th>
<th>Room</th>
<th>Ward</th>
<th>PatName</th>
<th>Blood</th>
<th>Medicine</th>
<th>Disease</th>
<th>Gender</th>

</tr>
<td>".$id."</td>
<td>".$room."</td>
<td>".$ward."</td>
<td>".$patname."</td>
<td>".$blood."</td>
<td>".$med."</td>
<td>".$disease."</td>
<td>".$gender."</td>

</table>";
?>