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
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

w3-bar-block{
	
	z-index:3;
	width:50%;
	
}

h1{
	color: OrangeRed;
}

label{
	font-family: "Verdana";
	font-size; 18px;
	font-style: italic;
}

p{
	font-family: "Georgia";
	font-size: 16px;
	
}


.button {
  display: inline-block;
  padding: 12px 40px;
  font-size: 24px;
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

.button:hover {background-color: #6495ed}

.button:active {
  background-color: #6495ed;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
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
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px; background-size:100%; background-color:#95a5a6;">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-CadetBlue w3-animate-left" style="z-index:3;width:22.5%;background-color:#95a5a6;" id="mySidebar"><br>
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
  </header>

</div>
</div>
<br>
<br>
  
<!DOCTYPE html>
<html>

<body>
<title> DASS 21 ONLINE TEST </title>

<div class="information">
 			
<h1 align="center"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Depression Anxiety Stress Online Test </h1><br><br>

<!--<form id="command" action="process-test-results.html" method="post"> -->
  <form align="center" id="command" action="dass1To3.php" method="post">
     
	 <label align="center"><strong> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Free Self Test - Test Your Stress Anxiety Depression Here! </strong></label><br><br><br>
	 <p align="center">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
	 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Please read each statement and click a number 0,1,2 or 3 which indicates how much the statement <br>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; applied to you over the past week. There are no right or wrong answers. Do not spend too much time on each statement.</p><br><br>

	&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<button onclick="window.location.href='dass1To3.php'" align="center" type="submit" name="nextPage" class="button"> Get Started</button>
     
</form>
</div>
</body>


</html>

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
