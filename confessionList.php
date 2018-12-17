<?php

session_start();
include('db_config/config.php');
$staffProfile = $_SESSION['staffID'];
//$picProfile = $_SESSION['studentID'];
$q = "select * from counsellor where staffID='$staffProfile' ";
$data = mysqli_query($con, $q);
$result = mysqli_fetch_assoc($data);

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

	table{
		margin-left: 25px;
		margin-right: 25px;
	}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px; background-size:100%; background-color:#95a5a6;">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-CadetBlue w3-animate-left" style="z-index:3;width:22.5%;background-color:#95a5a6;" id="mySidebar"><br>
  <div class="w3-container" >
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
	
    <img src="staffPic/<?php echo $result['image']; ?>" class="img-rounded" width="160px" height="160px" />
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
      <button onclick="window.location.href='confessionList.php'" class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Confession List</button>
      <button onclick="window.location.href='replyConfession.php'" class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Reply Confession</button>
      </div>
    </div>
  </header><br><br>

  
  <form background="http://www.designbolts.com/wp-content/uploads/2013/02/Grey-cement-Seamless-Pattern-For-Website-Background.jpg" align="center" name="confession" method="post" action="eConfession.php">



<table align="center" width="300px">
<h2 align="center"> List of confession</h2><br>

	<table align="center" border="1px" cellpadding="4px" cellspacing="0">
		<tr>
			<!--<td>Confession ID</td>-->
			<td>Student ID</td>
			<td>Date</td>
			<td>Type of Confession</td>
			<!--<td>Subject</td>-->
			<td>Confession</td>
			<td>Action</td>
		</tr>
	
		<?php
			include('db_config/PDO_connect.php');
			$confessData = $con->prepare("select r.confessionID, c.studentID, c.date, c.typeConfession, c.confession 
										  from confession c join respond r 
										  on r.confessionID = c.confessionID
										  order by c.confessionID asc");
			$confessData->execute();
			$result = $confessData->fetchAll();
			foreach($result as $row){
		?>
		<tr>
			<!--<td><?//=$row['confessionID'];?></td>-->
			<td><?=$row['studentID'];?></td>
			<td><?=$row['date'];?></td>
			<td><?=$row['typeConfession'];?></td>
			<!--<td><?//=$row['subject'];?></td>-->
			<td><?=$row['confession'];?></td>
			<td>
				<a href="replyConfession.php?confessionID=<?=$row['confessionID'];?>">Reply</a>
			</td>
		</tr>
	
		<?php
			}
		?>
	</table>
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
