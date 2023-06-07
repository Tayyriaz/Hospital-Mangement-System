<?php
	include 'connection.php';
	if(isset($_POST['submit'])){
	$name=trim($_POST['name']);
		$SSN=trim($_POST['SSN']);
		$patno=trim($_POST['patno']);
		$age=trim($_POST['age']);
		$rad1=trim($_POST['rad1']);
		$numberofdaysstay=trim($_POST['numberofdaysstay']);
		$charges=trim($_POST['charges']);
		$docfee=trim($_POST['docfee']);
		$surgeonfee=trim($_POST['surgeonfee']);
		$ICUfee=trim($_POST['ICUfee']);
		$medicines=trim($_POST['medicines']);
		$labfee=trim($_POST['labfee']);
		$food=trim($_POST['food']);
		$no=trim($_POST['no']);


	$sql= "INSERT INTO bill(Name,Ssn,pat_no,age,gender,stay_days,chareges,doc_fee,surgeon_fee,ICU_fee,medicine,lab_fee,food,no) 
			VALUES('$name','$SSN','$patno','$age','$rad1',$numberofdaysstay*1000,$charges*200,$docfee*1500,$surgeonfee*2000,$ICUfee*20000,'$medicines',$labfee*15000,'$food','$no')";
		

	if ($connection->query($sql)){
		header("Location: adminbill.php");
	}else{
		echo "Not inserted.$connection->error";
	}
	$connection->close();

}


?>
<!DOCTYPE html>
<html>
<head>
<title>Bill</title>
<style>
body{
background-color:black ;
}
div{
background-color: white;
width: 500px;
height: 1350px;
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
.radio{
			margin-left: 50px;
			

		}
		span {
			color: black;
		}
		.btn{
			margin-left: 50px;
			width: 380px;
			margin-top: 20px;
			background-color: black;
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
 	<h1>Bill</h1>
  <br><br>
   <label>Name :</label><br>
	<input type="text" name="name" required class="b" placeholder="Enter Name"><br><br><br>
	 <label>no :</label><br>
	<input type="text" name="no" required class="b" placeholder="Enter no"><br><br><br>
	<label>SSN</label><br>
	<input type="text" name="SSN" class="b" placeholder="Enter SSN"><br><br><br>
	<label>pat-no</label><br>
	<input type="text" name="patno" placeholder="Enter pat-no" class="b"><br><br><br>
	<label>age</label><br>
	<input type="text" name="age"  placeholder="Enter  age" class="b"><br><br><br>
	<label for="female">Gender</label><br>
	<input type="radio" id="female" name="rad1" class="radio" value="Male" checked><span>Male</span><br>
	<input type="radio" id="male" name="rad1" class="radio" value="FEMALE" ><span>Female</span><br><br>
	<label>number-of-days-stay</label><br>
	<input type="text" name="numberofdaysstay" class="b" placeholder="Enter number-of-days-stay"value = "<?php echo "0" ?>"><br><br><br>
	<label>charges</label><br>
	<input type="text" name="charges" class="b" placeholder="Enter  charges" value = "<?php echo "0" ?>"><br><br><br>
	<label>doc-fee days</label><br>
	<input type="text" name="docfee" class="b" placeholder="Enter doc-fee" value = "<?php echo "0" ?>"><br><br><br>
	<label>surgeon-fee days</label><br>
	<input type="text" name="surgeonfee" class="b" placeholder="Enter surgeon-fee" value = "<?php echo "0" ?>"><br><br><br>
	<label>ICU-fee-days</label><br>
	<input type="text" name="ICUfee" class="b" placeholder="Enter ICU-fee"value = "<?php echo "0" ?>"><br><br><br>
	<label>medicines</label><br>
	<input type="text" name="medicines" class="b" placeholder="Enter  medicines" value = "<?php echo "0" ?>" ><br><br><br>
	<label>lab-fee-days</label><br>
	<input type="text" name="labfee" class="b" placeholder="Enter  lab-fee" value = "<?php echo "0" ?>"><br><br><br>
	<label>food</label><br>
	<input type="text" name="food" class="b" placeholder="Enter food" value = "<?php echo "0" ?>"><br><br><br>
	 
<input type="submit" name="submit" value="submit" id="a"><br>
 </form>
</div>
</body>
</html>
