<?php
	
	SESSION_START();
	require("db_config/PDO_connect.php");	

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
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="staffPic/<?php echo $row['image']; ?>" style="width:45%;" class="w3-round"><br><br>
    <h4><b></b></h4>
    
  </div>
  <div class="w3-bar-block">
	<a href="counselorHome.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home w3-margin-right"></i>HOME</a>
    <a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user w3-margin-right"></i>MY PROFILE</a>
	<a href="addSchedule.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-calendar fa-fw w3-margin-right"></i>MY CALENDAR</a>
	<a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>APPOINTMENT</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>eCONFESSION</a> 
    <a href="index.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out fa-fw w3-margin-right"></i>LOGOUT</a>
  </div>

</nav>


<form background="http://www.designbolts.com/wp-content/uploads/2013/02/Grey-cement-Seamless-Pattern-For-Website-Background.jpg" align="center" name="confession" method="post" action="eConfession.php">



<table align="center" width="450px">
<h2 align="center"> List of confession</h2>

	<table align="center" border="1px" cellpadding="5px" cellspacing="0">
		<tr>
			<td>Confession ID</td>
			<td>Student ID</td>
			<td>Date</td>
			<td>Type of Confession</td>
			<td>Subject</td>
			<td>Confession</td>
			<td>Action</td>
		</tr>
	
		<?php
			$confessData = $con->prepare("select * from confession order by confessionID asc");
			$confessData->execute();
			$result = $confessData->fetchAll();
			foreach($result as $row){
		?>
		<tr>
			<td><?=$row['confessionID'];?></td>
			<td><?=$row['studentID'];?></td>
			<td><?=$row['date'];?></td>
			<td><?=$row['typeConfession'];?></td>
			<td><?=$row['subject'];?></td>
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
