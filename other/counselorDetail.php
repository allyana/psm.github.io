<?php

	require('db_config/PDO_connect.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
<script type="text/javascript">
	
	function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("staffImg").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
</head>
<style>

form {
    width: 35%;
    margin: 35px auto;
    text-align: left;
    padding: 10px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
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
}
</style>

<body>
<h2 align="center"> Counselor Information</h2>
	<table align="center" border="1px" cellpadding="5px" cellspacing="0">
		<tr>
			<td>Staff ID</td>
			<td>Staff Image</td>
			<td>Password</td>
			<td>New Password</td>
			<td>Staff Name</td>
			<td>Email</td>
			<td>Phone Number</td>
			<td>Office Room</td>
			<td>Action</td>
		</tr>
		
		<?php 
            $staffData=$con->prepare('SELECT * FROM counsellor ORDER BY staffID DESC');
            $staffData->execute();
            while($row=$staffData->fetch(PDO::FETCH_ASSOC))
            {
                     
        ?>
						
			<tr>
			<td><?php=$row['staffIDID'];?></td>
			<td><img src="staffPic/<?php echo $row['image'];?>"></td>
			<td><?php=$row['password'];?></td>
			<td><?php=$row['newPasswordassword'];?></td>
			<td><?php=$row['staffName'];?></td>
			<td><?php=$row['email'];?></td>
			<td><?php=$row['phoneNo'];?></td>
			<td><?php=$row['officeRoom'];?></td>
			<td>
				<a href="updateAdmin.php?staffID=<?php=$row['staffID'];?>">Edit</a>
				<a onclick="return confirm('Are you sure you want to delete this user?')" href="deleteAdmin.php?staffID=<?php=$row['staffID'];?>">Delete</a>
			</td>
			</tr>
		<?php
		
		?>
		
	
	</table>
	
	
	<form method="POST" encytype="multipart/form-data" action="counselorDetail.php">
		<div class="input-group">
			<label>Profile Picture</label>
			<input type="file" id="image" class="form-control" name="image" accept=".jpg,.jpeg,.png" required="" onchange="PreviewImage();"/>
		</div>
		<div class="input-group">
			<label>Staff ID</label>
			<input type="text" name="staffID">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password">
		</div>
		<div class="input-group">
			<label>New Password</label>
			<input type="text" name="newPassword">
		</div>
		<div class="input-group">
			<label>Staff Name</label>
			<input type="text" name="staffName">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email">
		</div>
		<div class="input-group">
			<label>Phone Number</label>
			<input type="text" name="phoneNo">
		</div>
		<div class="input-group">
			<label>Office Room</label>
			<input type="text" name="officeRoom">
		</div>
		<div class="input-group">
			<button type="submit" name="addStaff" class="btn">Add</button>
		</div>
	</form>
		
	
	<?php 
	 if(isset($_POST['addStaff']))
     {
		 try
		 {
			$staffID = $_POST['staffID'];
			$password = $_POST['password'];
			$newPassword = $_POST['newPassword'];
			$staffName = $_POST['staffName'];
			$email = $_POST['email'];
			$phoneNo = $_POST['phoneNo'];
			$officeRoom = $_POST['officeRoom'];
 
			$staffImage=$_FILES['image']['name'];
			$type  = $_FILES['image']["type"];
			$tmp_dir=$_FILES['image']['tmp_name'];
			$imageSize=$_FILES['image']['size'];
			$path='staffPic/'.$staffImage;
			
			if(empty($staffID)){
				$errorMsg="Please enter your staff ID";
			}
			else if(empty($staffImage)){
				$errorMsg="Please Select Image";
			}
			else if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') //check file extension
			{ 
				if(!file_exists($path)) //check file not exist in your upload folder path
				{
					if($size < 5000000) //check file size 5MB
						{
							move_uploaded_file($tmp_dir, "upload/" .$staffImage); //move upload file temperory directory to your upload folder
						}
					else
					{
						$errorMsg="Your File To large Please Upload 5MB Size"; //error message file size not large than 5MB
					}
				}
				else
				{ 
					$errorMsg="File Already Exists...Check Upload Folder"; //error message file not exists your upload folder path
				}
			}
			else
			{
				$errorMsg="Upload JPG , JPEG , PNG & GIF File Formate.....CHECK FILE EXTENSION"; //error message file extension
			}
  
	if(!isset($errorMsg))
	{
		$staffDatadb->prepare('INSERT INTO counsellor(staffID, image, password, newPassword, staffName, email, phoneNo, officeRoom) VALUES(:staffID, :staffImage, :password, :newPassword, :staffName, :email, :phoneNo, :officeRoom)'); //sql insert query     
		$staffData->bindParam(':staffID',$staffID); 
		$staffData->bindParam(':image',$staffImage);   //bind all parameter 
		$staffData->bindParam(':password',$password); 
		$staffData->bindParam(':newPassword',$newPassword); 
		$staffData->bindParam(':staffName',$staffName); 
		$staffData->bindParam(':email',$email); 
		$staffData->bindParam(':phoneNo',$phoneNo); 
		$staffData->bindParam(':officeRoom',$officeRoom); 
  
			if($staffData->execute())
			{
				$insertMsg="File Upload Successfully........"; //execute query success message
				header("refresh:3;counselorDetail.php"); //refresh 3 second and redirect to index.php page
			}
	}
 }
 catch(PDOException $e)
 {
  echo $e->getMessage();
 }
}

?>

</body>
</html>