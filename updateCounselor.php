<?php 

    include("db_config/PDO_connect.php");
        if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
        {
            $staffID=$_GET[ 'edit_id'];
            $staffData_edit=$con->prepare('SELECT * FROM counsellor WHERE staffID=:staffID');
            $staffData_edit->execute(array(':staffID'=>$staffID));
            $edit_row=$staffData_edit->fetch(PDO::FETCH_ASSOC);
            extract($edit_row);
        }else
 
        {
            header("Location: counselorIndex.php");
        }
 
        if(isset($_POST['btn-save']))
 
            {
 
                //$staffID = $_POST['staffID'];
				//$password = $_POST['password'];
				$newPassword = $_POST['newPassword'];
				$staffName = $_POST['staffName'];
				$email = $_POST['email'];
				$phoneNo = $_POST['phoneNo'];
				//$officeRoom = $_POST['officeRoom'];
				//$image = $_POST['image'];
 
                $imgFile=$_FILES['image']['name'];
                $tmp_dir=$_FILES['image']['tmp_name'];
                $imageSize=$_FILES['image']['size'];
 
                $upload_dir='staffPic/';
                $imgExt=strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
                $valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
                $image=rand(1000, 1000000).".".$imgExt;
                //unlink($upload_dir.$edit_row['image']);
                move_uploaded_file($tmp_dir, $upload_dir.$image);
                $staffData=$con->prepare('UPDATE counsellor SET newPassword=:newPassword, staffName=:staffName, email=:email, phoneNo=:phoneNo, image=:image WHERE staffID=:staffID');
                $staffData->bindParam(':staffID', $staffID);
				//$staffData->bindParam(':password', $password);
				$staffData->bindParam(':newPassword', $newPassword);
				$staffData->bindParam(':staffName', $staffName);
				$staffData->bindParam(':email', $email);
				$staffData->bindParam(':phoneNo', $phoneNo);
				//$staffData->bindParam(':officeRoom', $officeRoom);
				$staffData->bindParam(':image', $image);
                
                if($staffData->execute())
                {
                    ?>
                    <script type="text/javascript">
                        alert('Successfully Update');
                        window.location.href="counselorIndex.php";
                    </script>
                    <?php 
                }else
 
                ?>
                <script type="text/javascript">
                    alert('Error while update data and image');
                    window.location.href="counselorIndex.php";
                </script>
                <?php 
 
            }
 
     
?>
<!DOCTYPE html>
<html>
<title>Admin Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {
	
	font-family: "Raleway", sans-serif;
	
}

q{
	font-size: 16px;
	font-family: sans-serif;
	font-style: italic;
	font-color: red;
}

.edit-form img{
		align: center;
        width: 150px;
        height: 100px;
}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px; background-size:100%; background-color:#95a5a6;">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-CadetBlue w3-animate-left" style="z-index:3;width:22%;background-color:#95a5a6;" id="mySidebar"><br>
  <div class="w3-container" >
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
	
    <img src="images/ump.png" width="190px" height="150px" />
    <br><br><br>
    
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
      <button onclick="window.location.href='adminHome.php'" class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Home</button>
      <button onclick="window.location.href='addProgram.php'" class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Program</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Announcement</button>
    </div>
    </div>
  </header><br><br>
  
    
  <div class="container" align="center">
        <div class="edit-form">
            <h1 class="text-center">Edit form </h1>
            <form method="post" enctype="multipart/form-data">
				<label>New Password</label>
                <input type="text" name="newPassword" class="form-control" value="<?php echo $newPassword; ?>"><br>
                <label>Staff Name</label>
                <input type="text" name="staffName" class="form-control" value="<?php echo $staffName; ?>"><br>
				<label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>"><br>
				<label>Mobile</label>
                <input type="text" name="phoneNo" class="form-control" value="<?php echo $phoneNo; ?>"><br>
                <label>Picture Profile</label><br>
                <img src="staffPic/<?php echo $image; ?>" class="img-rounded"><br>
                <input type="file" name="image" class="form-control" accept="*/image"><br><br>
                <button type="submit" name="btn-save">Update </button>
                 
            </form>
        </div>
        
    </div> 

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
