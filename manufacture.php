	<?php
	if(isset($_POST['Sign up'])){
	}

		if(empty($_POST['id'])){
			echo "<font color=red>Please Enter ID......!!!!!!!! </font><br>";
			}
			else{
				$id = trim($_POST['id']);
			}

			if(empty($_POST['fname'])){
			echo "<font color=red>Please Enter First Name......!!!!!!!! </font><br>";
			}
			else{
				$fname = trim($_POST['fname']);
			}

			if(empty($_POST['lname'])){
			echo "<font color=red>Please Enter last Name........!!!!!!!! </font><br>";
			}
			else{
				$lname = trim($_POST['lname']);
			}

			if(empty($_POST['numb'])){
				echo "<font color=red>Please Enter Contact Number........!!!!!!!! </font><br>";
				}
				else{
					$cnumb = trim($_POST['numb']);
			}
		
		echo "<table border=1>
			<tr>
			<th>Student_id</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Contact Number</th>

			</tr>
			<tr>
			<td>$id</td>
			<td>$fname</td>
			<td>$lname</td>
			<td>$cnumb</td>

			</tr>
		</table>";
	?>
