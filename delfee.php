<?php

 $servername="localhost";
$username = "root";
$password ="";
$database ="project";
$connection = mysqli_connect($servername,$username,$password,$database);



if(isset($_GET['id'])){
	$id= $_GET['id'];
	// echo $id;
	 $sql = "delete from fee where feeno = $id" ;

     echo "<br>";
     if($connection->query($sql)){
     	header("Location: feerec.php");
     }else{
     	echo $connection->error;
     }
     
     
    
     $connection->close();
}

?>