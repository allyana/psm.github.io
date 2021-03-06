<?php
session_start();
include('db_config/config.php');
mysql_connect("localhost","root","");
mysql_select_db("counselling");

$staffProfile = $_SESSION['staffID'];
$q = "select * from counsellor where staffID='$staffProfile' ";
$data = mysqli_query($con, $q);
$resultStaff = mysqli_fetch_assoc($data);

$sql = "select count(*) as total from appointment where staffID='$staffProfile'";
$resultCount = mysqli_query($con, $sql);
$values = mysqli_fetch_assoc($resultCount);
$num_rows = $values['total'];
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
.badge {
  position: absolute;
  right: 20px;
  padding: 5px 10px;
  border-radius: 45%;
  background-color: red;
  color: black;
  font-weight: bold;
}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px; background-size:100%; background-color:#95a5a6;">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-CadetBlue w3-animate-left" style="z-index:3;width:22%;background-color:#95a5a6;" id="mySidebar"><br>
  <div class="w3-container" >
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
	<b id="welcome">Welcome <i><?php echo $resultStaff['staffName'];?></i></b>
    <img src="staffPic/<?php echo $resultStaff['image'];?>" class="img-rounded" width="160px" height="160px" />
	
    <h4><b></b></h4><br>
    
  </div >
  <div class="w3-bar-block" >
	<a href="" style="background-color:#2f4f4f" class="w3-bar-item w3-button w3-padding"><i class="fa fa-list-alt w3-margin-right"></i>Menu</a>
	<a href="counselorHome.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home w3-margin-right"></i>Home</a>
    <a href="staffProfile.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user w3-margin-right"></i>My Profile</a>
	<a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-calendar fa-fw w3-margin-right"></i>My Calendar</a>
	<a href="fetchBooking.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i><i class="badge"><?php echo $num_rows ?></i>Appointment</a>
    <a href="confessionList.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>eConfession</a>
	<a href="dassReport.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>DASS 21</a> 
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
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>My Profile</button>
      <!--<button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Announcement</button>-->
    </div>
    </div>
  </header><br><br>
  
  <b style="font-size:22px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome <?php echo $resultStaff['staffName'];?>  </b><br><br><br><br><br><br>
  <h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Enjoy counselling from the confort of your own home <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; with no need to travel  </h2>
 

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
