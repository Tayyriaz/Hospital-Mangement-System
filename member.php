<?php
$servername="localhost";
$username = "root";
$password ="";
$database ="project";
$connection = mysqli_connect($servername,$username,$password,$database);

 if(isset($_POST['submit'])){

 	$name = $_POST['name'];
 	$ssn = $_POST['SSN'];
 	$patno = $_POST['patno'];
 	$age = $_POST['age'];
 	$gender = $_POST['rad1'];
 	$phoneno = $_POST['phone'];
 	$medcon = $_POST['MedCon'];
 	$level = $_POST['serlvl'];
 	$doc = $_POST['relevant'];
 	$ward =$_POST['Ward'];
 	$bed = $_POST['Bed'];
 	$case = $_POST['rad2'];
 	$patname =$_POST['patname'];
 	$patmonb  = $_POST['patmob'];
 	$cnic = $_POST['cnic'];
 	$doc = $_POST['doc'];

 	 $sql = "insert into regpat(name,ssn,patno,age,gender,phoneno,medcon,slevel,docs,ward,bed,policecase,patcarename,patcaremob,cnic,docAssign) 
 	 values('$name','$ssn','$patno','$age','$gender','$phoneno','$medcon','$level','$doc','$ward','$bed','$case','$patname','$patmonb','$cnic','$doc')";
 	  if($connection->query($sql)){

      header("Location: patientshow1.php");


   
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
	<title>Register Patint</title>
	<style>
		body{
			background-color: back;
		}
		div{
			background-color: white;
			width: 500px;
			height: 1450px;
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
			font-weight: bold;
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
			color: ;
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
		  		<h1>Register Patient</h1>
		  		<br><br>
			    <label for="name">Name</label><br>
			    <input type="text" id="name" name="name" placeholder="Enter name" class="input"><br><br><br>

			    <label>SSN</label><br>
				<input type="text" name="SSN"  placeholder="Enter SSN" class="input"><br><br><br>
				 <label>doc assigned</label><br>
				<input type="text" name="doc"  placeholder="Enter SSN" class="input"><br><br><br>

				<label>pat-no</label><br>
				<input type="text" name="patno" placeholder="Enter pat-no" class="input"><br><br><br>
				<label>age</label><br>
				<input type="text" name="age"  placeholder="Enter  age" class="input"><br><br><br>

				<label for="female">Gender</label><br>
				<input type="radio" id="female" name="rad1" class="radio" value="MALE" checked><span>Male</span><br>
				<input type="radio" id="male" name="rad1" class="radio" value="FEMALE" ><span>Female</span><br><br>

				<label for="phone no">Phone No</label><br>
			    <input type="text" id="phone no" name="phone" placeholder="Enter phone number" class="input"><br><br><br>

			    <label for="Med-Con">Med-Con</label><br>
			    <input type="text" id="Med-Con" name="MedCon" placeholder="Enter Med-Con" class="input"><br><br><br>

			    <label for="ser-lvl">Seriousness Level</label><br>
			    <input type="text" id="ser-lvl" name="serlvl" placeholder="Enter Seriousness Level" class="input"><br><br><br>

			    <label for="relevant">Relevant-docs-assigned</label><br>
			    <input type="text" id="relevant" name="relevant" placeholder="Enter Relevant-docs-assigned" class="input"><br><br><br>

			    <label for="Ward">Ward-assigned</label><br>
			    <input type="text" id="Ward" name="Ward" placeholder="Enter Ward-assigned" class="input"><br><br><br>

				<label for="Bed">Bed-assigned</label><br>
			    <input type="text" id="Bed" name="Bed" placeholder="Enter Bed-assigned" class="input"><br><br><br>

			    <label for="female">Police case</label><br>
			    <input type="radio" id="female" name="rad2" class="radio" value="YES" checked><span>Yes</span><br>
			    <input type="radio" id="male" name="rad2" class="radio" value="NO"><span>No</span><br><br>

			    <label for="pat-name">Pat-care-name</label><br>
			    <input type="text" id="pat-name" name="patname" placeholder="Enter Pat-care-name" class="input"><br><br>

			    <label for="pat-mob">Pat-care-mob</label><br>
			    <input type="text" id="pat-mob" name="patmob" placeholder="Enter pat-mob " class="input"><br><br>

			    

			    <label for="cnic">CNIC</label><br>
			    <input type="text" id="cnic" name="cnic" placeholder="enetr cnic " class="input" id="q"><br><br>

			   
			<input type="submit" name="submit" value="submit" class="btn">
		  </form>
</div>
</body>
</html>