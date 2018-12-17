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
feedbackList{
	float:center;
	align: center;
}

table{
	margin-left: 200px;
	margin-right: -10px;
	float: center;
}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px; background-size:100%; background-color:#95a5a6;">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-CadetBlue w3-animate-left" style="z-index:3;width:22%;background-color:#95a5a6;" id="mySidebar"><br>
  <div class="w3-container" >
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
	
    <img src="studentPic/syamira.jpg" class="img-rounded" width="160px" height="160px" />
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
      <button onclick="window.location.href='eConfession.php'" class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>New Confession</a></button>
      <button onclick="window.location.href='viewConfession.php'" class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>View Confession</a></button>
      <button onclick="window.location.href='viewFeedback.php'" class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>My History</a></button>
    </div>
    </div>
  </header><br><br>
  
<form background="http://www.designbolts.com/wp-content/uploads/2013/02/Grey-cement-Seamless-Pattern-For-Website-Background.jpg" align="center" name="confession" method="post" action="viewConfession.php">




<h2 align="center" style="font-size: 36px; font-weight: bold;"> Feedback from counselor </h2><br><br>

<div class="feedbackList" align="center" style="width:900px;">	
	<table style="text-align:center;" align="center" border="1px" cellpadding="5px" cellspacing="0">
	
		<tr style="font-weight:bold;">
		
			<!--<td>Confession ID</td>-->
			<td>Type of Confession</td>
			<td>Confession</td>
			<td>Date</td>
			<td>Feedback</td>
			
			
		</tr>
						<?php
						require("db_config/config.php");	
	
						$confessionID = $_GET['confessionID'];
						$sql = "SELECT confession.typeConfession, confession.confession, respond.dateReply, 
								respond.feedback FROM respond JOIN confession 
								ON confession.confessionID = respond.confessionID";
						$result = mysqli_query($con, $sql);

                          if(mysqli_num_rows($result) >= 1)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
								<td><?php echo $row['typeConfession'];?></td>
								<td><?php echo $row['confession'];?></td>
                                <td><?php echo $row['dateReply'];?></td>  
                                <td><?php echo $row['feedback']; ?></td>  
                          </tr>  
                          <?php  
                               }  
                          }  
                          ?>  

		
	</table>
</div>
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
