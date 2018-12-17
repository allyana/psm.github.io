<?php
session_start();
include('db_config/config.php');
$confessStudent = $_SESSION['studentID'];
$userProfile = $_SESSION['studentID'];
//$picProfile = $_SESSION['studentID'];
$q = "select * from student where studentID='$userProfile' ";
$data = mysqli_query($con, $q);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<title>Student Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {
	
	font-family: "Raleway", sans-serif
	
	}
	
.button {
  display: inline-block;
  padding: 5px 15px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #ffffff;
  background-color: #000080;
  border: none;
  border-radius: 15px;
  box-shadow: 0 1px #999;
}

table{
	margin-right: 130px;
}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px; background-size:100%; background-color:#95a5a6;">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-CadetBlue w3-animate-left" style="z-index:3;width:22%;background-color:#95a5a6;" id="mySidebar"><br>
  <div class="w3-container" >
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
	
    <img src="studentPic/<?php echo $result['picProfile']; ?>" class="img-rounded" width="160px" height="160px" />
    <h4><b></b></h4><br>
    
  </div >
  <div class="w3-bar-block" >
	<a href="" style="background-color:#2f4f4f" class="w3-bar-item w3-button w3-padding"><i class="fa fa-list-alt w3-margin-right"></i>Menu</a>
	<a href="studentHome.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home w3-margin-right"></i>Home</a>
    <a href="studentProfile.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user w3-margin-right"></i>My Profile</a>
	<a href="eConfession.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>eConfession</a>
	<a href="bookAppointment.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Appointment</a>
    <a href="dass21.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>DASS 21 Test</a> 
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
      <button onclick="window.location.href='counselorDetails.php'" class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Available Counselor</a></button>
      <button onclick="window.location.href='bookAppointment.php'"  class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Booking Appointment</a></button>
      <button onclick="window.location.href='appointmentStatus.php'" class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Appointment Status</a></button>
    </div>
    </div>
  </header>

</div>
</div>
  
<form background="http://www.designbolts.com/wp-content/uploads/2013/02/Grey-cement-Seamless-Pattern-For-Website-Background.jpg" align="center" name="confession" method="post" action="eConfession.php">




<table align="center" width="450px">
<h2 align="center"> Counselor Details </h2><br><br>

		
	<table align="center" border="1px" cellpadding="5px" cellspacing="0">
	
		<tr>
		
			<!--<td>Confession ID</td>-->
			<td>Profile Picture</td>
			<td>Name</td>
			<!--<td>Booking ID</td>-->
			<td>Mobile</td>
			<td>Email</td>
			<td>Action</td>
		</tr>
		<?php 
			require('db_config/PDO_connect.php');
			
			$counselorData = $con->prepare("select image, staffName, phoneNo, email from counsellor");
			$counselorData->execute();
			$result = $counselorData->fetchAll();
			foreach($result as $row){
		?>
		<tr>
			<!--<td><?/*=$row['confessionID'];*/?></td>-->
			<td><img src="staffPic/<?=$row['image'];?>" width="120px" height="120px"/></td>
			<td><?=$row['staffName'];?></td>
			<!--<td><?//=$row['staffID'];?></td>-->
			<td><?=$row['phoneNo'];?></td>
			<td><?=$row['email'];?></td>
			<td><button onclick="window.location.href='bookAppointment.php'" align="center" type="book" name="nextPage" class="button"> Book Appointment</button></td>
		</tr>
	
		<?php
			}
		?>

		
	</table>
</table>
</form>

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
