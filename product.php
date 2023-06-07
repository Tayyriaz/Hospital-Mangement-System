	<?php
	if(isset($_POST['Sign up'])){
    }

		if(empty($_POST['co'])){
			echo "<font color=red>Please Enter Product_code......!!!!!!!! </font><br>";
			}
			else{
				$co = trim($_POST['co']);
			}

			if(empty($_POST['id'])){
			echo "<font color=red>Please Enter Manufacture_id......!!!!!!!! </font><br>";
			}
			else{
				$id = trim($_POST['id']);
			}

			if(empty($_POST['ti'])){
			echo "<font color=red>Please Enter Product title........!!!!!!!! </font><br>";
			}
			else{
				$ti = trim($_POST['ti']);
			}

			if(empty($_POST['ta'])){
				echo "<font color=red>Please EnterTax rate........!!!!!!!! </font><br>";
				}
				else{
					$ta = trim($_POST['ta']);
			}
		
		echo "<table border=1>
			<tr>
			<th>Course_code</th>
			<th>Student_id</th>
			<th>Course credit_hour</th>
			<th>Course Fee</th>

			</tr>
			<tr>
			<td>$co</td>
			<td>$id</td>
			<td>$ti</td>
			<td>$ta</td>

			</tr>
		</table>";
	?>
