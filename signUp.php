<?php
	SESSION_START();
	require('db_config/PDO_connect.php');
	if(isset($_POST['register']))
	{
		$studentID = $_POST['studentID'];
		$password = $_POST['password'];
		$cPassword = $_POST['cPassword'];
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
		else if(empty($cPassword)){
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
			$errorMsg = "Please enter your faculty.";
		}
		else if(empty($yearOfStudy)){
			$errorMsg = "Please enter year of study.";
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
			$studentData=$con->prepare('INSERT INTO student (studentID, password, cPassword, sName, sEmail, sPhoneNo, 
										faculty, yearOfStudy, picProfile) VALUES 
									    (:studentID, :password, :cPassword, :sName, :sEmail, :sPhoneNo, :faculty, 
										:yearOfStudy, :picProfile)');
			$studentData->bindParam(':studentID',$studentID);
			$studentData->bindParam(':password',$password);
			$studentData->bindParam(':cPassword',$cPassword);
			$studentData->bindParam(':sName',$sName);
			$studentData->bindParam(':sEmail',$sEmail);
			$studentData->bindParam(':sPhoneNo',$sPhoneNo);
			$studentData->bindParam(':faculty',$faculty);
			$studentData->bindParam(':yearOfStudy',$yearOfStudy);
			$studentData->bindParam(':picProfile',$picProfile);
			
			if($studentData->execute())
			{
				$successMsg = "New record successfully added.";
				header("refresh:5;signUp.php");
			}
			else
			{
				$errorMsg = "Error.";
			}
		}
	}	
?>
<!DOCTYPE>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css
<link rel="stylesheet" href="Counselling/style.css">
<style>

body {
	font-family: Arial, Helvetica, sans-serif;
	background-color: #bdc3c7;
}

.bg{
	height: 100%;
	font: caption;
	font-family: Arial, Helvetica, sans-serif;
	font-size: small;
	font-style: oblique;
	font-weight: bold;
	text-decoration: none;
	text-transform: none;
	display: inherit;
	float: none;
	position: inherit;
	text-align: center;
	color: #000000;
}

.navbar {
  width: 100%;
  background-color: #2d3436;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.dropdown {
    float: right;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #006266;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #bdc3c7;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: ##bdc3c7;
}

.dropdown:hover .dropdown-content {
    display: block;
}


@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
.auto-style1 {
	margin-top: 67px;
	background-image: http://www.e2abs.com/wp-content/uploads/2017/12/Website-Background.jpg;
}



.auto-style2 {
	margin-right: 22px;
}
.auto-style3 {
	margin-top: 0px;
	text-align: center;
	float: none;
}
.auto-style4 {
	margin-top: 0px;
	text-align: center;
	float: none;
	margin-left: 0px;
}

form{
	align: center;
}
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
	position: center;
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
<body background = "data:image/jpeg;base64,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" style="background-size:200%">

<h2>
<img src="images/ump.png" style="float:left; border:0px; padding:10px;" width="200px" height="150px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="images/kpm.png" style="float:rightwards; border:0px; padding:10px;" width="235px" height="140px"></h2>
<p></p>

<div class="navbar">
  <a class="active" href="inde.html"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="information.php"><i class=""></i> Counselling</a> 
  <a href="#"><i class=""></i> Program</a> 
  <a href="dassInfo.php"><i class=""></i> DASS</a>
  <a href="#"><i class=""></i> eConfession</a>
  <a href="#"><i class=""></i> About Us</a>
  <div class="dropdown">
    <button class="dropbtn">Login 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a  href="adminLogin.php">Admin</a>
      <a href="staffLogin.php">Staff</a>
      <a href="studentLogin.php">Student</a>
    </div>
  </div> 
  <a style="float:right" href="signUp.php"><i class=""></i> Register</a>
</div><br><br><br>

<form align="center" class="form-horizontal" action="signUp.php" method="POST" enctype="multipart/form-data">
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
        <td><input class="form-control" type="password" name="cPassword" placeholder="" value="" required// /></td>
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