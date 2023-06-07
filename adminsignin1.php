<?php

include 'connection.php';
if(isset($_POST['login'])){

	$name = $_POST['log'];
	$pas = $_POST['pas'];
	$sql = "select * from adminsignup where name = '$name' and cnic = '$pas'";

$result = $connection->query($sql);

if($result->num_rows>0){
	
	
   
   
    header("Location: Adminwork.html");

     
     
    
     $connection->close();



}
 else{
     	echo '<script>alert("unsuccesful")</script>';	
     	
     	
     }



  }
    


?>
