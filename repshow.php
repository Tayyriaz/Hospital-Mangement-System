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
				
				<li><a href="report1.php">add more record</a></li>
				
			</ul>
			
		</div>
	</div>
	<h1>REPORT</h1>
</body>
</html>

<?php

include 'connection.php';

$sql = "select * from report";
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
          <th scope='col'>DELETE</th>
       <th scope='col'>UPDATE</th>
     
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
		<td> <div><button  class='btn btn-sm btn-outline-secondary' type='button'   ><a href ='delrep.php?id=".$row['reportno']."' >delete</a></button></div>
		<br></div></td>
    <td>
		<div><button class='btn btn-sm btn-outline-secondary' type='button' ><a href = 'uprep.php?id=".$row['reportno']."&&
    name=".$row['name']." && des=".$row['medconaft']." && pay=".$row['medi']." && dob=".$row['labtest']."&& gender=".$row['gohome']."&& ward=".$row['transtoward']."&& icu=".$row['transtoicu']."&& emer=".$row['stayinemer']."&& bill=".$row['hosbill']."&& date=".$row['paybydate']."&& ss=".$row['ssn']."' >update</a></button></div>
		</td>			


	</tr>
		";

	}

	echo"</table>";

}

echo"<br>.<br>";

