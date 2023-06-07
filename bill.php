
<?php
$servername="localhost";
$username = "root";
$password ="";
$database ="project";
$connection = mysqli_connect($servername,$username,$password,$database);



if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $pas = $_POST['pas'];
 







 


 

 $sql = "select * from bill where Ssn='$pas' && Name ='$name'";
$result = $connection->query($sql);

if($result->num_rows>0){

	echo '<h1>Bill</h1>';

	echo "<table  class='table table-dark table-striped' border = 1>
	<tr>
		<th>name</th>
		<th>no</th>
		<th>ssn</th>
		<th>patno</th>
		<th>age</th>
		<th>gender</th>
		<th>stay_days</th>
		<th>charges</th>
		<th>docfee</th>
		<th>surgen fee</th>
		<th>icu fee</th>
		<th>medicine</th>
		<th>labfee</th>
		<th>food</th>

	</tr>
	";
	while( $row = $result->fetch_assoc()){


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
		
				
		


	</tr>
		";

	}

	echo"</table>";

}

echo"<br>.<br>";


}

?>






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
			background-color: #bdc6c9;
		}
		table{
			margin-top: 250px;
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

		
	

  
  <button type="button" class="btn btn-info  btn-lg btn1" data-toggle="modal" data-target="#myModal">Pay Bill</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pay Bill</h4>
        </div>
        <div class="modal-body">
        	<form method="POST" action="disshow1.php">
        		<input type="text" name="name" placeholder="cnic"><br>
          
          <label for="female">Use Payment Method</label><br>
					<input type="radio" id="c" name="rad1"  checked><span> Credit Card</span><br>
					<input type="radio" id="d" name="rad1"  ><span> Debit Card</span><br>
					<input type="radio" id="p" name="rad1"  ><span> Paypal</span><br>
					<input type="radio" id="b" name="rad1"  ><span> Bank Transfer</span><br><br>
					<input type="text" name="amount" class="time" placeholder="Enter Amount"><br><br>
					
					<a href=""><input type="submit" name="submit" class="btne"></a>
					</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
 
  
</div>
</body>
</html>