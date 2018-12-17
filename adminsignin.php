<?php
	require 'db_config/config.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login Page</title>
<link rel="stylesheet" href="Counselling/style.css">

</head>
<body style="background-color:white">

<img src="images/ump.png" style="float:center; border:0px; padding:10px;" width="200px" height="150px">
	<div id="main.wrapper">
		<h2><center> Admin Login Form</h2></center>

	
	
		<h3><center><form class="myform" action="adminHome.php" method="post">
			<label> Username: </label><br>
			<input type="text" name="adminUser" class="inputvalues" placeholder="Type your username"/><br>
			<label> Password: </label><br>
			<input type="password" name="adminPass" class="inputvalues" placeholder=""/><br>
			<input name="adminLogin" type="submit" id="login_btn" value="Login"/><br><br>
			
		</form></center></h3>
		
		<h4 align="center" style="color:black;"><?php echo @$_GET["success"]; ?></h4>
		<h4 align="center" style="color:black;"><?php echo @$_GET["invalid"]; ?></h4>
		
		<?php
		if(isset($_POST['adminLogin']))
		{
			
			$adminID = $_POST['adminUser'];
			$password = $_POST['password'];
			
			
			$query = "select * from admin where adminID='$adminID' and password='$password'";
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				$row = mysqli_fetch_assoc($query_run);
				//valid
				$_SESSION['adminID'] = $row['adminID'];
				header("location:adminHome.php");
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