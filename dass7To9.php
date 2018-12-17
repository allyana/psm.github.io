<?php
 include("db_config/PDO_connect.php");
?>
<?php

session_start();
include('db_config/config.php');
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
  background-color: #000080; /* Green */
  border: none;
  color: white;
  padding: 5px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}

p{
	padding:1px;
	margin-left: 300px;
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
      <button onclick="window.location.href='dass21.php'" class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Take Test</button>
      <button onclick="window.location.href='dass21.php'" class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>View Result</button>
      <button onclick="window.location.href='dass21.php'" class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>View Record</button>
    </div>
    </div>
  </header><br><br>

<form id="command" name="dass1" method="get" action="dass10To12.php">

<div align="center">
	 <label style="float:center; font-weight:bold; font-size:20px;"> 3 / 7 Page</label><br><br>

     <p align="left"><strong>The rating scale is as follows:							</strong></p>

     <p class="indent" align="left">
	 <strong>0</strong>&nbsp;&nbsp; Did not apply to me at all<br />
     <strong>1</strong>&nbsp;&nbsp; Applied to me to some degree, or some of the time<br />
     <strong>2</strong>&nbsp;&nbsp; Applied to me to a considerable degree, or a good part of time<br />
     <strong>3</strong>&nbsp;&nbsp; Applied to me very much, or most of the time
	 </p><br><br>
	 
	 
     <table align="center" >
     	<tbody>
		<tr>
     		<th class="statement">Statements 7 to 9</th>
     		<th>0</th>
     		<th>1</th>
     		<th>2</th>
     		<th>3</th>
     	</tr>
     	<tr>
     		<td class="statement">7. I experienced trembling (e.g. in the hands). </td>
     		<td><input id="anxiety31" name="anxiety3" type="radio" value="0"/></td>
       		<td><input id="anxiety32" name="anxiety3" type="radio" value="1"/></td>
       		<td><input id="anxiety33" name="anxiety3" type="radio" value="2"/></td>
      		<td><input id="anxiety34" name="anxiety3" type="radio" value="3"/></td>
     	</tr>
		<tr>
     		<td class="statement">8. I felt that I was using a lot of nervous energy. </td>
     		<td><input id="stress31" name="stress3" type="radio" value="0"/></td>
       		<td><input id="stress32" name="stress3" type="radio" value="1"/></td>
       		<td><input id="stress33" name="stress3" type="radio" value="2"/></td>
      		<td><input id="stress34" name="stress3" type="radio" value="3"/></td>
     	</tr>
		<tr>
     		<td class="statement">9. I was worried about the situations in which I might get panic and make a fool of myself. </td>
     		<td><input id="anxiety41" name="anxiety4" type="radio" value="0"/></td>
       		<td><input id="anxiety42" name="anxiety4" type="radio" value="1"/></td>
       		<td><input id="anxiety43" name="anxiety4" type="radio" value="2"/></td>
      		<td><input id="anxiety44" name="anxiety4" type="radio" value="3"/></td>
     	</tr><br><br>
	
	</tbody>
	
</table><br>

<button formaction="dass4To6.php" class="button button1" style="font-size:18px; align:center;"> << Previous </button>
<button onclick="window.location.href='dass10To12.php'" class="button button2" style="font-size:18px; align:center;"> Next >> </button>

</div>

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
