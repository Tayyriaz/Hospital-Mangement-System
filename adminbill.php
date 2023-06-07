
<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Bill data</title>
	<style>
		body{
			background-color:black ;
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
			padding-top: 70px;
		}
		.btn1{
			margin-left: 620px;
			margin-top: 50px;
			background-color: white;
			color: black;
		}
		textarea{
			width: 200px;
			height: 200px;
		}
		.time{
			width: 200px;
			height: 30px;
		}
		.btne{
			background-color: black;
			color: white;
			width: 200px;
			height: 30px;
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
</head>
<body>
	<div class="div1">
			<div>
			<ul>
				
				<li><a href="insert.php">add more record</a></li>
				
			</ul>
			
		</div>
	</div>
	<h1 style="align:center">BILL</h1>
</body>
</html>

<?php
$servername="localhost";
$username = "root";
$password ="";
$database ="project";
$connection = mysqli_connect($servername,$username,$password,$database);

 

 $sql = "select * from bill";
$result = $connection->query($sql);

if($result->num_rows>0){

	echo "<table  class='table table-dark table-striped' border = 1>
	<tr>
		<th>name</th>
		<th>no</th>
		<th>ssn</th>
		<th>patno</th>
		<th>age</th>
		<th>gender</th>
		<th>stay_days charges</th>
		<th>charges</th>
		<th>docfee</th>
		<th>surgen fee</th>
		<th>icu fee</th>
		<th>medicine charges</th>
		<th>labfee</th>
		<th>food</th>
		<th scope='col'>DELETE</th>
       <th scope='col'>UPDATE</th>

	</tr>
	";
	while( $row = $result->fetch_assoc()){

// $total = $row[doc_fee] + $row[chareges];


		echo"
		<tr>
		<td>$row[Name]</td>
		<td>$row[no]</td>
		<td>$row[Ssn]</td>
		<td>$row[pat_no]</td>
		<td>$row[age]</td>
		<td>$row[gender]</td>
		<td>$row[stay_days]</td>
		<td>$row[chareges]</td>
		<td>$row[doc_fee]</td>
		<td>$row[surgeon_fee]</td>
		<td>$row[ICU_fee]</td>
		<td>$row[medicine]</td>
		<td>$row[lab_fee]</td>
		<td>$row[food]</td>
			<td> <div><button  class='btn btn-sm btn-outline-secondary' type='button' ><a href ='delbill.php?id=".$row['no']."' >delete</a></button></div>
		<br></div></td>
		<td>

		<div><button class='btn btn-sm btn-outline-secondary' type='button' ><a href = 'upbill.php?id=".$row['no']."&& name=".$row['Name']." && des=".$row['pat_no']." && pay=".$row['age']." && dob=".$row['gender']."&& gender=".$row['stay_days']."&& ward=".$row['chareges']."&& icu=".$row['doc_fee']."&& emer=".$row['surgeon_fee']."&& bill=".$row['ICU_fee']."&& date=".$row['medicine']." && dep=".$row['lab_fee']."&& del=".$row['food']." && nl=".$row['Ssn']."'  >update</a></button></div>
		</td>		
				
		


	</tr>
		";

	}

	echo"</table>";

}

echo"<br>.<br>";




?>