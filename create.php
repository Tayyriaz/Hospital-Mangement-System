
<?php
	include 'connection.php';
	
	$sql="create table bill(
	Name varchar(20),
	Ssn int(20),
	pat_no int(10),
	age int(10),
	gender varchar(20),
	stay_days int(10),
	chareges int(10),
	doc_fee int(10),
	surgeon_fee int(10),
	medicine varchar(30),
	lab_fee int(20),
	food varchar(30)
	)";
if ($connection->query($sql)) {
	echo "Table Created";
}else{
	echo "Table not Created.$connection->error";
}
$connection->close();

?>


