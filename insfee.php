<?php
	include 'connection.php';
	If(isset($_POST['submit'])){
		$feeno=trim($_POST['feeno']);
		$roomcharges=trim($_POST['roomcharges']);
		$wardcharges=trim($_POST['wardcharges']);
		$surgeonfee=trim($_POST['surgeonfee']);
		$theatrefee=trim($_POST['theatrefee']);
		$ICUfee=trim($_POST['ICUfee']);
		$other=trim($_POST['other']);
		$ssn=trim($_POST['ssn']);
		


	$sql= "INSERT INTO fee(roomchar,feeno,wardchar,surgeonfee,theatrefee,icucost,otherexp,ssn) 
			VALUES('$roomcharges','$feeno','$wardcharges','$surgeonfee','$theatrefee','$ICUfee','$other','$ssn')";

	if ($connection->query($sql)){
		header("Location: feerec.php");
	}else{
		echo "Not inserted.$connection->error";
	}
	$connection->close();

}


?>
<!DOCTYPE html>
<html>
<head>
<title>General hospital fee</title>
<style>
body{
background-color: black;
}
div{
background-color: white;
width: 500px;
height: 900px;
margin-top: 50px;
margin-left: 400px;
border-radius: 10px;
}
h1{
font-family: cursive;
text-align: center;
padding: 15px;
color: black;
}

div form label{
margin-left: 50px;
color: black;
font-family: cursive;
}
div form .b{
margin-left: 50px;
padding: 5px;
border: none;
border-bottom: 2px solid black;
width: 370px;
outline: none;
}
div form input[type = "text"]{
background-color: white;
color: black;
}


#a{
margin-left: 50px;
width: 380px;
margin-top: 20px;
background-color:black;
color: white;
outline: none;
border:none;
padding: 10px;
cursor: pointer;
}

		
</style>
</head>
<body>

<div>
 <form action="" method="post">
 	<h1>General Hospital Fee</h1>
  <br><br>
  <label>Fee No</label><br>
	<input type="text" name="feeno" class="b" placeholder="Enter feeno"><br><br><br>
	<label>SSN</label><br>
	<input type="text" name="ssn" class="b" placeholder="Enter  ssn"><br><br><br>
  	<label>Room charges</label><br>
	<input type="text" name="roomcharges" class="b" placeholder="Enter  charges"><br><br><br>
	<label>Ward charges</label><br>
	<input type="text" name="wardcharges" class="b" placeholder="Enter  charges"><br><br><br>
	<label>surgeon-fee</label><br>
	<input type="text" name="surgeonfee" class="b" placeholder="Enter surgeon-fee"><br><br><br>
	<label>Theatre-fee</label><br>
	<input type="text" name="theatrefee" class="b" placeholder="Enter surgeon-fee"><br><br><br>
	<label>ICU-Cost</label><br>
	<input type="text" name="ICUfee" class="b" placeholder="Enter ICU-fee"><br><br><br>
	<label>Other Expenses</label><br>
	<input type="text" name="other" class="b" placeholder="Enter  medicines"><br><br><br>
	 
	<input type="submit" name="submit" value="submit" id="a"><br>
 </form>
</div>
</body>
</html>
