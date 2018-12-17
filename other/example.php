<?php
			$confessionData = $con->prepare("select * from confession where login_user=".$_SESSION['studentID']."");
			$confessionData->execute();
			$result = $confessionData->fetchAll();
			foreach($result as $row){
		?>
		<tr>
			<td><?=$row['date'];?></td>
			<td><?=$row['typeConfession'];?></td>
			<td><?=$row['subject'];?></td>
			<td><?=$row['confession'];?></td>
			
		</tr>
	
		<?php
			}
		?>
		
		
		
		
		
		
		if(isset($_POST['studLogin']))
		{
			
			$studentID = $_POST['studentID'];
			$password = $_POST['password'];
			$_SESSION['login_user']=$studentID;
			
			$query = "select * from student where studentID='$studentID' AND password='$password'";
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				$row = mysqli_fetch_assoc($query_run);
				//valid
				$_SESSION['studentID'] = $row['studentID'];
				//$_SESSION['picProfile'] = $row['picProfile'];
				
				header("location:studentHome.php");
			}
			else{
				//invalid
				echo '<script type="text/javascript"> alert ("Invalid username and password) </script>';
			}
		} 