<?php
$servername="localhost";
$username = "root";
$password ="";
$database ="project";
$connection = mysqli_connect($servername,$username,$password,$database);

 if(isset($_POST['submit'])){

 	$name = $_POST['name'];
 	$ssn = $_POST['ssn'];
 	$no =$_POST['no'];
 	$medafter = $_POST['med-cond-after'];
 	$medicines = $_POST['medicines-to-give'];
 	$labtest = $_POST['rad5'];
 	$home = $_POST['rad1'];
 	$ward = $_POST['rad2'];
 	$icu = $_POST['rad3'];
 	$emerg = $_POST['rad4'];
 	$bill = $_POST['hospital-bill'];
 	$date =$_POST['pay-by-date'];
 	

 	 $sql = "INSERT into report(name,ssn,reportno,medconaft,medi,labtest,gohome,transtoward,transtoicu,stayinemer,hosbill,paybydate) 
 	 values('$name','$ssn','$no','$medafter','$medicines','$labtest','$home','$ward','$icu','$emerg','$bill','$date')";

 	  if($connection->query($sql)){

      header("Location: repshow1.php");


   
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
	<title>Report</title>
	<style>
		body{
			background-color: black;
		}
		div{
			background-color: white;
			width: 500px;
			height: 1050px;
			margin-top: 50px;
			margin-left: 400px;
			border-radius: 10px;
		}
		h1{
			font-family: cursive;
			text-align: center;
			color: black;
			padding: 15px;
		}
		
		div form label{
			margin-left: 50px;
			color: black;
			font-family: cursive;
		}
		div form .input{
			margin-left: 50px;
			padding: 5px;
			border: none;
			border-bottom: 2px solid  black;
			width: 370px;
			outline: none;
		}
		div form input[type = "text"]{
			background-color: white;
			color: black;
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
		  <form method="POST" action="">
		  		<h1>Report</h1>
		  		<br><br>
			    <label for="name">Name</label><br>
			    <input type="text" id="name" name="name" placeholder="Enter name" class="input"><br><br><br>
			    <label for="name">ssn</label><br>
			    <input type="text" id="name" name="ssn" placeholder="Enter name" class="input"><br><br><br>
			    <label for="name">no</label><br>
			    <input type="text" id="name" name="no" placeholder="Enter no" class="input"><br><br><br>


			    <label for="med-cond-after">med-cond-after</label><br>
			    <input type="text" id="med-cond-after" name="med-cond-after" placeholder="med-cond-after " class="input"><br><br><br>

			    <label for="medicines-to-give">medicines-to-give</label><br>
			    <input type="text" id="medicines-to-give" name="medicines-to-give" placeholder="medicines-to-give " class="input"><br><br><br>

			    <label for="lab-test">lab-test-needed</label><br>
			    <input type="radio" id="female" name="rad5" class="radio" value="yes" checked><span>Yes</span><br>
			    <input type="radio" id="male" name="rad5" class="radio"  value="no"><span>No</span><br>

			    <label for="female">go-home</label><br>
			    <input type="radio" id="female" name="rad1" class="radio" value="yes" checked><span>Yes</span><br>
			    <input type="radio" id="male" name="rad1" class="radio" value="no"><span>No</span><br>

			    <label for="female">transfer-to-ward</label><br>
			    <input type="radio" id="female" name="rad2" class="radio" value="yes" checked><span>Yes</span><br>
			    <input type="radio" id="male" name="rad2" class="radio" value="no"><span>No</span><br>

			    <label for="female">transfer-to-ICU</label><br>
			    <input type="radio" id="female" name="rad3" class="radio" value="yes" checked><span>Yes</span><br>
			    <input type="radio" id="male" name="rad3" class="radio" value="no"><span>No</span><br>

			    <label for="female">stay-in-emergency</label><br>
			    <input type="radio" id="female" name="rad4" class="radio" value="yes" checked><span>Yes</span><br>
			    <input type="radio" id="male" name="rad4" class="radio" value="no"><span>No</span><br><br>

			     <label for="hospital-bill">hospital-bill</label><br>
			    <input type="text" id="hospital-bill" name="hospital-bill" placeholder="hospital-bill " class="input"><br><br><br>

			    <label for="pay-by-date">pay-by-date</label><br>
			    <input type="date" id="pay-by-date" name="pay-by-date" placeholder="pay-by-date " class="input"><br><br><br>
			  
			    <input type="submit" name="submit" value="Submit" class="btn">
		  </form>
</div>
</body>
</html>