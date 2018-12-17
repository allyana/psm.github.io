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
			$staffData=$con->prepare('INSERT INTO counsellor (staffID, password, newPassword, staffName, email, phoneNo, officeRoom, image) VALUES (:staffID, :password, :newPassword, :staffName, :email, :phoneNo, :officeRoom, :image)');
			$staffData->bindParam(':staffID',$staffID);
			$staffData->bindParam(':password',$password);
			$staffData->bindParam(':newPassword',$newPassword);
			$staffData->bindParam(':staffName',$staffName);
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

<div class="row">
<?php
	
	$staffData = $con->prepare('SELECT * FROM counsellor ORDER BY staffID ASC');
	$staffData->execute();
	
	if($staffData->rowCount() > 0)
	{
		while($row=$staffData->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<div class="col-xs-3">
			<img src="staffPic/<?php echo $row['image']; ?>" class="img-rounded" width="120px" height="120px" />
			<p class="page-header"><?php echo $staffID;?></p>
			<p class="page-header"><?php echo $password;?></p>
			<p class="page-header"><?php echo $newPassword;?></p>
			<p class="page-header"><?php echo $staffName;?></p>
			<p class="page-header"><?php echo $email;?></p>
			<p class="page-header"><?php echo $phoneNo;?></p>
			<p class="page-header"><?php echo $officeRoom;?></p>
			<p class="page-header">
			<span>
			<a href="try1.php?edit_id=<?php echo $row['staffID'];?>" title="click for edit" onlick="return confirm('Sure to edit this record')">Edit</a>
			<a onclick="return confirm('Are you sure you want to delete this user?')" href="deleteCounselor.php?staffID=<?=$row['staffID'];?>">Delete</a>
			</span>
			</p>
			</div>   
<?php
	}
	}
	else 
	{
  ?>
        <div class="col-xs-12">
         <div class="alert alert-warning">
             <span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found
            </div>
        </div>
        <?php
 }
 
?>
</div>
   
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>

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

</body>
</html>
