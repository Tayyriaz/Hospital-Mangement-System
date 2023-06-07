<!DOCTYPE html>
<html>
<head>
	<title>report Record</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
body{
	background-color: black;
}
	table{
		margin-top: 30px;
	}
	h1{
		text-align: center;
		color: #4BB543;
		font-family: cursive;
		margin-top: 30px;

	}
</style>
<body>
	<h1>report Record</h1>
</body>
</html>

<?php

include 'connection.php';

if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $pas = $_POST['pas'];
 


$sql = "select * from report where name ='$name' and ssn = '$pas'";
$result = $connection->query($sql);

if($result->num_rows>0){

	echo " <table class='table table-success table-striped' border=2>
  
    <tr>
      <th scope='col'>name</th>
      <th scope='col'>ssn</th>
      <th scope='col'>report no</th>
      <th scope='col'>med con after</th>
      <th scope='col'>medicines</th>
       <th scope='col'>lab test </th>
      <th scope='col'>go home</th>
      <th scope='col'>transfer to ward</th>
       <th scope='col'>transfer to icu</th>
        <th scope='col'>stay in emergency</th>
         <th scope='col'>hos bill</th>
         <th scope='col'>pay by date</th>
          
     
    </tr>
	";
	while( $row = $result->fetch_assoc()){

		echo"
		<tr>
		<td>$row[name]</td>
		<td>$row[ssn]</td>
		<td>$row[reportno]</td>
		<td>$row[medconaft]</td>
		<td>$row[medi]</td>
		<td>$row[labtest]</td>
		<td>$row[gohome]</td>
		<td>$row[transtoward]</td>	
		<td>$row[transtoicu]</td>
		<td>$row[stayinemer]</td>
		<td>$row[hosbill]</td>
		<td>$row[paybydate]</td>	
		


	</tr>
		";

	}

	echo"</table>";

}

echo"<br>.<br>";

}
?>