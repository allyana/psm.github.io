<?php
	require 'db_config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="Counselling/style.css">

</head>
<body style="background-color:white">

<img src="images/ump.png" style="float:center; border:0px; padding:10px;" width="200px" height="150px">
	<div id="main-wrapper">
		<h2><center> Student Login Form</h2></center>

	
	
		<h3><center><form class="myform" action="studentHome.php" method="post">
			<label> Username: </label><br>
			<input type="text" class="inputvalues" placeholder="Type your username"/><br>
			<label> Password: </label><br>
			<input type="password" class="inputvalues" placeholder=""/><br>
			<input name="login" type="submit" id="login_btn" value="Login"/><br><br>
			
		</form></center></h3>
		
		<?php
			if(isset($_POST['studLogin']))
		{
			
			$studentID = $_POST['studentID'];
			$password = $_POST['password'];
			
			
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
		?>
	</div>
</body>
</html>