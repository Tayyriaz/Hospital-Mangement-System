<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Register Patient Data</title>
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
	</style>
</head>
<body>
		<h1>Patient Info</h1>
	<?php

include 'connection.php';

$sql = "select * from doctorsignup";
$result = $connection->query($sql);

if($result->num_rows>0){

	echo " <table class='table table-success table-striped' border=2>
  
    <tr>
      <th scope='col'>name</th>
      <th scope='col'>specifiction</th>
      <th scope='col'>cnic</th>
      <th scope='col'>password</th>
       <th scope='col'>gender</th>
     <th scope='col'>mail</th>
     
      
     
    </tr>
	";
	while( $row = $result->fetch_assoc()){

		echo"
		<tr>
		<td>$row[name]</td>
		<td>$row[specification]</td>
		<td>$row[cnic]</td>
		<td>$row[password]</td>
		<td>$row[gender]</td>
		<td>$row[mail]</td>
		
		


	</tr>
		";

	}

	echo"</table>";

}

echo"<br>.<br>";

?>


  
  <button type="button" class="btn btn-info  btn-lg btn1" data-toggle="modal" data-target="#myModal">Call Doctor</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Send Message to Doctor</h4>
        </div>
        <div class="modal-body">

          <input type="email" name="email" class="time" placeholder="Enter email"><br><br>
          <textarea placeholder="Write Message"></textarea><br><br>

          <input type="time" name="time" class="time"><br><br>
          <input type="submit" name="submit" class="btne">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
 
  
</div>
</body>
</html>