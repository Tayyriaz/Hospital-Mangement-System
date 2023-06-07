<?php

$servername="localhost";
$username = "root";
$password ="";
$database ="project";
$connection = mysqli_connect($servername,$username,$password,$database);
$id= $_GET['id'];
$name= $_GET['name'];
$nl= $_GET['nl'];

$des= $_GET['des'];
$pay= $_GET['pay'];
$dob= $_GET['dob'];
$gender= $_GET['gender'];
$ward= $_GET['ward'];




if(isset($_POST['submit'])){


    
   $name=trim($_POST['name']);
   $no=trim($_POST['no']);
    $ssn=trim($_POST['ssn']);
    $patno=trim($_POST['patno']);
    $age=trim($_POST['age']);
    $rad1=trim($_POST['rad1']);
    $medicinestogive=trim($_POST['medicinestogive']);
    $revisitdate=trim($_POST['revisitdate']);
   

    $sql = "update dischargesheet  set name = '$name',no ='$no',ssn='$ssn', patno= '$patno',age = '$age', gender= '$rad1' , medtogive = '$medicinestogive' , revistdate = '$revisitdate'  where  no = '$id'" ;

     
     if($connection->query($sql)){

      header("Location: disshow.php");


   
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
<title>Discharge Sheet</title>
<style>
body{
background-color: blck;
}
div{
background-color: white;
width: 500px;
height: 850px;
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


.btn{
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
 <h1>Discharge Sheet</h1>
  <br><br>
   <label>Name :</label><br>
  <input type="text" name="name" required placeholder="Enter name" class="input"value="<?php echo "$name" ?>"><br><br><br>
   <label>No :</label><br>
  <input type="text" name="no" required placeholder="Enter no" class="input" value="<?php echo "$id" ?>"><br><br><br>
  <label>SSN</label><br>
  <input type="text" name="ssn"  placeholder="Enter SSN" class="input"value="<?php echo "$nl" ?>"><br><br><br>
  <label>pat-no</label><br>
  <input type="text" name="patno" placeholder="Enter pat-no" class="input"value="<?php echo "$des" ?>"><br><br><br>
  <label>age</label><br>
  <input type="text" name="age"  placeholder="Enter  age" class="input"value="<?php echo "$pay" ?>"><br><br><br>

  <label for="female">Gender</label><br>
  <input type="radio" id="female" name="rad1" class="radio" checked><span>Male</span><br>
  <input type="radio" id="male" name="rad1" class="radio" ><span>Female</span><br><br>

  <label> medicines-to-give</label><br>
  <input type="text" name="medicinestogive" placeholder="Enter  medicines-to-give " class="input" value="<?php echo "$gender" ?>"><br><br><br>
  <label>re-visit-date</label><br>
  <input type="date" name="revisitdate" placeholder="Enter  re-visit-date " class="input"value="<?php echo "$ward" ?>"><br><br>
   <input type="submit" value="Submit" name="submit" class="btn">
 </form>
</div>
</body>
</html>

