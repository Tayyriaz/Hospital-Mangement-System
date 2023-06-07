<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
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
		padding-top: 70px;

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
				
				<li><a href="member.php">add more patient</a></li>
				
			</ul>
			
		</div>
	</div>
	<h1>Patients</h1>
</body>
</html>

<?php

include 'connection.php';


 
  
  $sql = "select * from regpat ";

$result = $connection->query($sql);

if($result->num_rows>0){

	echo " <table class='table table-success table-striped' border=2>
  
    <tr>
      <th scope='col'>name</th>
      <th scope='col'>ssn</th>
      <th scope='col'>patno</th>
      <th scope='col'>age</th>
       <th scope='col'>gender</th>
      <th scope='col'>phoneno</th>
      <th scope='col'>mwed con</th>
      <th scope='col'>s level</th>
       <th scope='col'>docs</th>
     <th scope='col'>ward</th>
      <th scope='col'>bed</th>
      
       <th scope='col'>police cAse</th>
        <th scope='col'>patcarename</th>
      <th scope='col'>pat care mob</th>
      <th scope='col'>cnic</th>
       <th scope='col'>doc assign</th>
       <th scope='col'>delete</th>
       <th scope='col'>update</th>
     
    </tr>
	";
	while( $row = $result->fetch_assoc()){

	

		echo"
		<tr>
		<td>$row[name]</td>
		<td>$row[ssn]</td>
		<td>$row[patno]</td>
		<td>$row[age]</td>
		<td>$row[gender]</td>
		<td>$row[phoneno]</td>
		<td>$row[medcon]</td>		
		<td>$row[slevel]</td>
		<td>$row[docs]</td>
		<td>$row[ward]</td>
		<td>$row[bed]</td>
		<td>$row[policecase]</td>
		<td>$row[patcarename]</td>
		<td>$row[patcaremob]</td>	
		<td>$row[cnic]</td>
		<td>$row[docAssign]</td>		
		<td> <div><button  class='btn btn-sm btn-outline-secondary' type='button' ><a href ='delpatient.php?id=".$row['ssn']."' >delete</a></button></div>
		<br></div></td>
    <td>
		<div><button class='btn btn-sm btn-outline-secondary' type='button' ><a href = 'uppatient.php?id=".$row['ssn']."&&
    name=".$row['name']." && des=".$row['patno']." && pay=".$row['age']." && dob=".$row['gender']."&& gender=".$row['phoneno']."&& ward=".$row['medcon']."&& icu=".$row['slevel']."&& emer=".$row['docs']."&& bill=".$row['ward']."&& date=".$row['bed']."&& sa=".$row['policecase']."&& pat=".$row['patcarename']."&& mob=".$row['patcaremob']."&& cn=".$row['cnic']."&& bill=".$row['docAssign']."' >update</a></button></div>
		</td>			


		


	</tr>
		";

	}

	echo"</table>";

}

echo"<br>.<br>";

?>