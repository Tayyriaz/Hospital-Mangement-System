<!DOCTYPE html>
<html>
<head>
	<title>Fee Record</title>
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
		padding-top: 50px;

	}
	.div1 .heading{
	color:  #03fc8c;
	font-family: cursive;
	font-size: 50px;
	margin-top: 250px;
	font-weight: bold;
	text-align: center;
}
.div1 .heading:hover{
	color:  #03fc8c;
}

.div1 div{
	background-color: aqua;
	position: absolute;
	top: 0;
	width: 100%;
	left: 0px;
	height: 60px;
	margin: 0;
}
.div1 div ul{
	list-style-type: none;
}
.div1 div ul li{
	display: inline;
	float: right;
	margin-right: 50px;
}

.div1 div ul li a{
	text-decoration: none;
	color: #03fc8c;
	font-size: 18px;
	font-family: cursive;
	font-weight: bold;
	padding: 20px 10px;
}
.div1 div ul li a:hover{
	background-color: #03fc8c;
	color: black;
}
</style>
<body>
	
	<div class="div1">
			<div>
			<ul>
				
				<li><a href="insfee.php">add more record</a></li>
				
			</ul>
			
		</div>
	</div>

	<h1>Fee Record</h1>
</body>
</html>

<?php

include 'connection.php';

$sql = "select * from fee";
$result = $connection->query($sql);

if($result->num_rows>0){

	echo " <table class='table table-success table-striped' border=2>
  
    <tr>
      <th scope='col'>Room charges</th>
      <th scope='col'>Fee no</th>
      <th scope='col'>Ward charges</th>
      <th scope='col'>Surgeon fee</th>
       <th scope='col'>Theatre fee</th>
      <th scope='col'>ICU cost</th>
      <th scope='col'>other expensives</th>
      <th scope='col'>patient ssn</th>
     <th scope='col'>DELETE</th>
       <th scope='col'>UPDATE</th>
    </tr>
	";
	while( $row = $result->fetch_assoc()){

		echo"
		<tr>
		<td>$row[roomchar]</td>
		<td>$row[feeno]</td>
		<td>$row[wardchar]</td>
		<td>$row[surgeonfee]</td>
		<td>$row[theatrefee]</td>
		<td>$row[icucost]</td>
		<td>$row[otherexp]</td>	
		<td>$row[ssn]</td>		
		<td> <div><button  class='btn btn-sm btn-outline-secondary' type='button' ><a href ='delfee.php?id=".$row['feeno']."' >Delete</a></button></div>
		<br></div></td>
    <td>
		<div><button class='btn btn-sm btn-outline-secondary' type='button' ><a href = 'upfee.php?feeno=".$row['feeno']."'>Update</a></button></div>


	</tr>
		";

	}

	echo"</table>";

}

echo"<br>.<br>";

