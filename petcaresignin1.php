
<?php

include 'connection.php';
if(isset($_POST['login'])){

  $name = $_POST['log'];
  $pas = $_POST['pas'];
  
  $sql = "select * from petsignup where name = '$name' and cnic = '$pas'";

$result = $connection->query($sql);

if($result->num_rows>0){
  
  
   header("Location: petcarework.html");

   
    
     
     
    
    



}
 else{


      echo '<script>alert ("unsuccesful")</script>';
     // header("Location: doctorsignin.php");

    }

     

  }
    


?>