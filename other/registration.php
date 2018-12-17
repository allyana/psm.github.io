<?php

	SESSION_START();
	require('db_config/PDO_connect.php');
	
	if(isset($_POST['register']))
	{
		$studentID = $_POST['studentID'];
		$password = $_POST['password'];
		$newPassword = $_POST['newPassword'];
		$sName = $_POST['sName'];
		$sEmail = $_POST['sEmail'];
		$sPhoneNo = $_POST['sPhoneNo'];
		$faculty = $_POST['faculty'];
		$yearOfStudy = $_POST['yearOfStudy'];
		
		$imgFile = $_FILES['picProfile']['name'];
		$tmp_dir = $_FILES['picProfile']['tmp_name'];
		$imgSize = $_FILES['picProfile']['size'];
		
		if(empty($studentID)){
			$errorMsg = "Please enter student ID.";
		}
		else if(empty($password)){
			$errorMsg = "Please enter password.";
		}
		else if(empty($newPassword)){
			$errorMsg = "Please enter new password.";
		}
		else if(empty($sName)){
			$errorMsg = "Please enter your name.";
		}
		else if(empty($sEmail)){
			$errorMsg = "Please enter email address.";
		}
		else if(empty($sPhoneNo)){
			$errorMsg = "Please enter mobile number.";
		}
		else if(empty($faculty)){
			$errorMsg = "Please room number.";
		}
		else if(empty($yearOfStudy)){
			$errorMsg = "Please room number.";
		}
		else if(empty($imgFile)){
			$errorMsg = "Please select image file.";
		}
		else
		{
			$upload_dir = 'studentPic/';
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
			$valid_extension = array('jpeg', 'jpg', 'png', 'gif'); //valid extension to upload image file
			$picProfile = rand(1000,1000000).".".$imgExt;
			
			if(in_array($imgExt, $valid_extension)){
				if($imgSize < 5000000){
					move_uploaded_file($tmp_dir,$upload_dir.$picProfile);
				}
				else{
					$errorMsg = "Sorry, your file is too large.";
				}
			}
			else{
				$errorMsg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			}
		}
		
		
		if(!isset($errorMsg))
		{
			$studentData=$con->prepare('INSERT INTO student (studentID, password, newPassword, sName, sEmail, sPhoneNo, faculty, yearOfStudy, picProfile) VALUES (:studentID, :password, :newPassword, :sName, :sEmail, :sPhoneNo, :faculty, :yearOfStudy, :picProfile)');
			$studentData->bindParam(':studentID',$studentID);
			$studentData->bindParam(':password',$password);
			$studentData->bindParam(':newPassword',$newPassword);
			$studentData->bindParam(':sName',$sName);
			$studentData->bindParam(':sEmail',$sEmail);
			$studentData->bindParam(':sPhoneNo',$sPhoneNo);
			$studentData->bindParam(':faculty',$faculty);
			$studentData->bindParam(':yearOfStudy',$yearOfStudy);
			$studentData->bindParam(':picProfile',$picProfile);
			
			if($studentData->execute())
			{
				$successMsg = "New record successfully added.";
				header("refresh:5;reg.php");
			}
			else
			{
				$errorMsg = "Error.";
			}
		}
	}	
?>

   
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


<style>
#main-wrapper
{
	align: center;
	font-size: 15px;
	width:500px;
	margin: 0 auto;
	background: white;
	padding: 5px;
	border-radius: 10px;
	border: 1px solid;
}

.icon
{
	width:150px;
	text-align: center;
}

.form-horizontal
{
	align: center;
	display: center;
	width: 250px;
	margin: 0 auto;
}
.form-control
{
	width: 250px;
	margin: 0 auto;
	padding: 5px;
}

</style>
<body>


<form align="center" class="form-horizontal" action="register.php" method="POST" enctype="multipart/form-data">
	<div id="main-wrapper">
		<center>
			<h2>Registration Form</h2>
			<img id="uploadPreview" style="width:200px;, height:200px;" src="images/ump.png" class="avatar"/><br>
		</center>
     
 <table class="table table-bordered table-responsive">
 
    <tr>
     <td><label class="control-label">Student ID</label></td>
        <td><input class="form-control" type="text" name="studentID" placeholder="" value="" required// /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">Password</label></td>
        <td><input class="form-control" type="password" name="password" placeholder="" value="" required// /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">Confirm Password</label></td>
        <td><input class="form-control" type="password" name="newPassword" placeholder="" value="" required// /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">Student Name</label></td>
        <td><input class="form-control" type="text" name="sName" placeholder="" value="" /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">Email</label></td>
        <td><input class="form-control" type="email" name="sEmail" placeholder="" value="" /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">Mobile</label></td>
        <td><input class="form-control" type="" name="sPhoneNo" placeholder="" value="" /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">Faculty</label></td>
        <td><select name="faculty">
				<option value="fskkp">FSKKP</option>
				<option value="fim">FIM</option>
				<option value="ftek">FTEK</option>
				<option value="fist">FIST</option>
				<option value="fkasa">FKASA</option>
				<option value="fkee">FKEE</option>
				<option value="fkm">FKM</option>
				<option value="fkksa">FKKSA</option>
				<option value="fkp">FKP</option>
			</select></td>
    </tr>
	
	<tr>
     <td><label class="control-label">Year of Study</label></td>
        <td><input class="form-control" type="" name="yearOfStudy"  /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">Profile Image</label></td>
        <td><input class="form-control" type="file" name="picProfile" accept="studUploads/*" /></td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="register" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; Register
        </button>
        </td>
    </tr>
	
	  <tr>
		<td>
        <label align="center"> Already have an account? <a href="studentLogin.php">Login <a/>
        </td>
    </tr>
    
    </table>
    
</form>

</body>
</html>
