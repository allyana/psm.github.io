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
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="studentPic/<?php echo $row['picProfile']; ?>" class="img-rounded" width="120px" height="120px" />
    <h4><b></b></h4>
    
  </div>
  <div class="w3-bar-block">
	<a href="studentHome.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home w3-margin-right"></i>HOME</a>
    <a href="studentProfile.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user w3-margin-right"></i>MY PROFILE</a>
	<a href="eConfession.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-calendar fa-fw w3-margin-right"></i>eCONFESSION</a>
	<a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>APPOINTMENT</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>DASS 21</a> 
    <a href="index.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out fa-fw w3-margin-right"></i>LOGOUT</a>
  </div>

</nav>



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

