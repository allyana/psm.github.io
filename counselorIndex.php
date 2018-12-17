<?php

	SESSION_START();
	require('db_config/PDO_connect.php');
	
	if(isset($_POST['addStaff']))
	{
		$staffID = $_POST['staffID'];
		//$image = $_POST['image'];
		$password = $_POST['password'];
		$newPassword = $_POST['newPassword'];
		$staffName = $_POST['staffName'];
		$field = $_POST['field'];
		$email = $_POST['email'];
		$phoneNo = $_POST['phoneNo'];
		$officeRoom = $_POST['officeRoom'];
		
		$imgFile = $_FILES['image']['name'];
		$tmp_dir = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];
		
		if(empty($staffID)){
			$errorMsg = "Please enter staff ID.";
		}
		else if(empty($password)){
			$errorMsg = "Please enter password.";
		}
		else if(empty($newPassword)){
			$errorMsg = "Please enter new password.";
		}
		else if(empty($staffName)){
			$errorMsg = "Please enter counsellor's name.";
		}
		else if(empty($field)){
			$errorMsg = "Please enter field.";
		}
		else if(empty($email)){
			$errorMsg = "Please enter email address.";
		}
		else if(empty($phoneNo)){
			$errorMsg = "Please enter mobile number.";
		}
		else if(empty($officeRoom)){
			$errorMsg = "Please room number.";
		}
		else if(empty($imgFile)){
			$errorMsg = "Please select image file.";
		}
		else
		{
			$upload_dir = 'staffPic/';
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
			$valid_extension = array('jpeg', 'jpg', 'png', 'gif'); //valid extension to upload image file
			$image = rand(1000,1000000).".".$imgExt;
			
			if(in_array($imgExt, $valid_extension)){
				if($imgSize < 5000000){
					move_uploaded_file($tmp_dir,$upload_dir.$image);
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
			$staffData=$con->prepare('INSERT INTO counsellor (staffID, password, newPassword, staffName, field, email, phoneNo, officeRoom, image) VALUES (:staffID, :password, :newPassword, :staffName, :field, :email, :phoneNo, :officeRoom, :image)');
			$staffData->bindParam(':staffID',$staffID);
			$staffData->bindParam(':password',$password);
			$staffData->bindParam(':newPassword',$newPassword);
			$staffData->bindParam(':staffName',$staffName);
			$staffData->bindParam(':field',$field);
			$staffData->bindParam(':email',$email);
			$staffData->bindParam(':phoneNo',$phoneNo);
			$staffData->bindParam(':officeRoom',$officeRoom);
			$staffData->bindParam(':image',$image);
			
			if($staffData->execute())
			{
				$successMsg = "New record successfully added.";
				header("refresh:5;counselorIndex.php");
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
<title>Counselor Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {
	
	font-family: "Raleway", sans-serif
	
	}
	
	form {
    width: 35%;
    margin: 35px auto;
    text-align: left;
    padding: 10px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}

.form-control {
    margin: 10px 0px 10px 0px;
}
.control-label {
    display: block;
    text-align: left;
    margin: 3px;
}
.form-control input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
	align: center;
}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px; background-size:100%; background-color:#95a5a6;">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-CadetBlue w3-animate-left" style="z-index:3;width:22.5%;background-color:#95a5a6;" id="mySidebar"><br>
  <div class="w3-container" >
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
	
    <img src="images/ump.png" width="190px" height="150px" />
    <h4><b></b></h4><br>
    
  </div >
  <div class="w3-bar-block" >
	<a href="" style="background-color:#2f4f4f" class="w3-bar-item w3-button w3-padding"><i class="fa fa-list-alt w3-margin-right"></i>Menu</a>
	<a href="adminHome.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home w3-margin-right"></i>Home</a>
    <!--<a href="studentProfile.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user w3-margin-right"></i>My Profile</a>-->
	<a href="addProgram.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>Manage Program</a>
	<a href="manageUser.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>Manage User</a>
    <a href="dass21.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-file fa-fw w3-margin-right"></i>Report</a> 
    <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out fa-fw w3-margin-right"></i>Logout</a>
  </div><br>

  
  <div class="w3-panel w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i><br>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">
<header id="portfolio" style="background-color:#95a5a6">
    <!--<a href="#"><img src="studentPic/icon.png" style="width:75px; height:50px;"></a>-->
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">

    <div class="w3-section w3-bottombar w3-padding-16">
	

      <span class="w3-margin-right"></span>
      <!--<button class="w3-button w3-black">ALL</button>-->
      <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Home</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Program</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Announcement</button>
    </div>
    </div>
  </header>
  
<div align="center">

<h2 align="center"> Counselor Information</h2>
	<table align="center" border="1px" cellpadding="5px" cellspacing="0">
		<tr>
			<td>Profile Picture</td>
			<td>Staff ID</td>
			<td>Name</td>
			<td>Password</td>
			<td>Field</td>
			<td>Email</td>
			<td>Mobile</td>
			<td>Office Room</td>
			<td>Action</td>
		</tr>
		
		<?php
			$staffData = $con->prepare("select image, staffID, staffName, password, field, email, phoneNo, officeRoom from counsellor");
			$staffData->execute();
			$result = $staffData->fetchAll();
			foreach($result as $row){
?>
		<tr>
			<td><img src="staffPic/<?=$row['image'];?>" width="120px" height="120px"/></td>
			<td><?=$row['staffID'];?></td>
			<td><?=$row['staffName'];?></td>
			<td><?=$row['password'];?></td>
			<td><?=$row['field'];?></td>
			<td><?=$row['email'];?></td>
			<td><?=$row['phoneNo'];?></td>
			<td><?=$row['officeRoom'];?></td>
			<td>
				<!--<a href="updateAdmin.php?adminID=<?//=$row['adminID'];?>">Edit</a>-->
				<a href="updateCounselor.php?edit_id=<?php echo $row['staffID'];?>" title="click for edit" onlick="return confirm('Sure to edit this record')">Edit</a>
				<a onclick="return confirm('Are you sure you want to delete this user?')" href="deleteCounselor.php?staffID=<?=$row['staffID'];?>">Delete</a>
			
		</tr>
	
<?php
			}
?>
	</table>
	
	
 <form method="post" enctype="multipart/form-data" class="form-horizontal">
     
 <table class="table table-bordered table-responsive">
 
    <tr>
     <td><label class="control-label">Staff ID</label></td>
        <td><input class="form-control" type="text" name="staffID" placeholder="" value="" /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">Password</label></td>
        <td><input class="form-control" type="text" name="password" placeholder="" value="" /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">New Password</label></td>
        <td><input class="form-control" type="text" name="newPassword" placeholder="" value="" /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">Staff Name</label></td>
        <td><input class="form-control" type="text" name="staffName" placeholder="" value="" /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">Field</label></td>
        <td><select name="field">
				<option value="academic">Academic Issue</option>
				<option value="financial">Financial Issue</option>
				<option value="health">Health Issue</option>
				<option value="family">Family Issue</option>
				<option value="career">Career Issue</option>
				<option value="relationship">Relationship Issue</option>
				<option value="time">Time Management Issue</option>
				<option value="residence">Residence Issue</option>
			</select><td>
    </tr>
	
	<tr>
     <td><label class="control-label">Email</label></td>
        <td><input class="form-control" type="text" name="email" placeholder="" value="" /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">Mobile</label></td>
        <td><input class="form-control" type="" name="phoneNo" placeholder="" value="" /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">Office Room</label></td>
        <td><input class="form-control" type="text" name="officeRoom" placeholder="" value="" /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">Profile Image</label></td>
        <td><input class="input-group" type="file" name="image" accept="profile/*" /></td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="addStaff" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; Add
        </button>
        </td>
    </tr>
    
    </table>
    
</form>

</div>
</div>


<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
