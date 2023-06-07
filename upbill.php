<?php

include 'connection.php';

   $id= $_GET['id'];
   $nl= $_GET['nl'];
$name= $_GET['name'];
$des= $_GET['des'];
$pay= $_GET['pay'];
$dob= $_GET['dob'];
$gender= $_GET['gender'];
$ward= $_GET['ward'];
$icu= $_GET['icu'];
$emer= $_GET['emer'];
$bill= $_GET['bill'];
$date= $_GET['date'];
$dep= $_GET['dep'];
$del= $_GET['del'];


   





If(isset($_POST['submit'])){
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
   
   
    $sql = "update bill set Ssn ='$SSN',no ='$no',name='$name', pat_no= '$patno' , age = '$age', gender= '$rad1' , stay_days = 'numberofdaysstay', chareges = '$charges' ,doc_fee = '$docfee',surgeon_fee = '$surgeonfee',
    ICU_fee = '$ICUfee' ,medicine = '$medicines' ,lab_fee = '$labfee' ,food = '$food' where  no = $id" ;

     
     if($connection->query($sql)){

      header("Location: adminbill.php");


   
     }else{

     echo"not inserted";
      echo $connection->error;
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
background-color: ;
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
	<input type="text" name="name" required class="b" placeholder="Enter Name" value="<?php echo "$name" ?>"><br><br><br>
	<label>no :</label><br>
	<input type="text" name="no" required class="b" placeholder="Enter no" value="<?php echo "$id" ?>"><br><br><br>
	<label>SSN</label><br>
	<input type="text" name="SSN" class="b" placeholder="Enter SSN" value="<?php echo "$nl" ?>"><br><br><br>
	<label>pat-no</label><br>
	<input type="text" name="patno" placeholder="Enter pat-no" class="b" value="<?php echo "$des"?>"><br><br><br>
	<label>age</label><br>
	<input type="text" name="age"  placeholder="Enter  age" class="b" value="<?php echo "$pay"?>"><br><br><br>
	<label for="female">Gender</label><br>
	<input type="radio" id="female" name="rad1" class="radio" checked><span>Male</span><br>
	<input type="radio" id="male" name="rad1" class="radio" ><span>Female</span><br><br>
	<label>number-of-days-stay</label><br>
	<input type="text" name="numberofdaysstay" class="b" placeholder="Enter number-of-days-stay" value="<?php echo "$gender"?>"><br><br><br>
	<label>charges</label><br>
	<input type="text" name="charges" class="b" placeholder="Enter  charges" value="<?php echo "$ward"?>"><br><br><br>
	<label>doc-fee</label><br>
	<input type="text" name="docfee" class="b" placeholder="Enter doc-fee" value="<?php echo "$icu"?>"><br><br><br>
	<label>surgeon-fee</label><br>
	<input type="text" name="surgeonfee" class="b" placeholder="Enter surgeon-fee" value="<?php echo "$emer"?>"><br><br><br>
	<label>ICU-fee</label><br>
	<input type="text" name="ICUfee" class="b" placeholder="Enter ICU-fee" value="<?php echo "$bill"?>"><br><br><br>
	<label>medicines</label><br>
	<input type="text" name="medicines" class="b" placeholder="Enter  medicines" value="<?php echo "$date"?>" ><br><br><br>
	<label>lab-fee</label><br>
	<input type="text" name="labfee" class="b" placeholder="Enter  lab-fee" value="<?php echo "$dep"?>"><br><br><br>
	<label>food</label><br>
	<input type="text" name="food" class="b" placeholder="Enter food" value="<?php echo "$del"?>"><br><br><br>
	 
	<input type="submit" name="submit" value="submit" id="a"><br>
 </form>
</div>
</body>
</html>
