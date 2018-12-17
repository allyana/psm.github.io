<?php

session_start();
include('db_config/config.php');
$userProfile = $_SESSION['studentID'];
$dassStud = $_SESSION['studentID'];
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

information{
	padding:70px;
}

p{
	padding:1px;
	margin-left: 20px;
}

h2{
	text-align: left;
	padding:3px;
	margin-left: 20px;
	font-weight: bold;
	font-size: 16px;
}

h3{
	text-align: left;
	padding:3px;
	margin-left: 20px;
	font-weight: bold;
	font-size: 16px;
}

h4{
	text-align: left;
	padding:3px;
	margin-left: 20px;
	font-weight: bold;
	font-size: 16px;
}
ul{
	text-align: left;
	padding:2px;
	margin-left: 50px;
	font-weight: normal;
	font-size: 14px; 
}

label{
	color: #FF0000;
	font-weight: bold;
	display: block;
	width: 100px;
	float: left;
	font-size: 19px;
}

.button {
  display: inline-block;
  padding: 8px 50px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #ffffff;
  background-color: #000080;
  border: none;
  border-radius: 50px;
  box-shadow: 0 1px #999;
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
  </header><br><br>

  <!DOCTYPE html>
<html>

<body>
<title> DASS 21 ONLINE TEST </title>
<style>

</style>
<div align="center" class="information">
 			
<h1 align="center" style="font-size: 36px; font-weight: bold;"> Result of DASS Online Test </h1><br>
<p style="text-align:left;"> Thank you for taking your time to take DASS online test.</p>
<p style="text-align:left;"> Below is your result: </p>

<?php 
if (isset($_POST['DASSres'])) {
  $answerArray = $_POST;
  $depressionAnswer = array();
  $stressAnswer = array();
  $anxietyAnswer = array();

  foreach ($answerArray as $key => $value) {
    if (substr($key,0,3) =="dep") {
      $depressionAnswer[$key] = $value;
    }
    if (substr($key,0,3) =="anx") {
      $anxietyAnswer[$key] = $value;
    }
    if (substr($key,0,3) =="str") {
      $stressAnswer[$key] = $value;
    }
  }
  $totalDepression = array_sum($depressionAnswer)*2;
  $totalAnxiety =  array_sum($anxietyAnswer)*2;
  $totalStress = array_sum($stressAnswer)*2;	
}	
?>

<h2> Your depression level : <?php echo $totalDepression; ?> </h2>
<ul><li> Normal : 0 - 9</li>
<li> Mild : 10 - 13</li>
<li> Moderate : 14 - 20</li>
<li> Severe : 21 - 27</li>
<li> Extremely Severe : Above 28</li></ul>

<h3> Your anxiety level : <?php echo $totalAnxiety; ?> </h3>   
<ul><li> Normal : 0 - 7</li>
<li> Mild : 8 - 9</li>
<li> Moderate : 10 - 14</li>
<li> Severe : 15 - 19</li>
<li> Extremely Severe : Above 20</li></ul>

<h4> Your stress level : <?php echo $totalStress; ?> </h4>
<ul><li> Normal : 0 - 14</li>
<li> Mild : 15 - 18</li>
<li> Moderate : 19 - 25</li>
<li> Severe : 26 - 33</li>
<li> Extremely Severe : Above 34</li></ul><br>




<label>Note</label><br>
<p style="text-align:left; font-weight:bold;">Any moderate, severe and extremely severe results are abnormal.</p>
<p style="text-align:left; font-weight:bold;"> If the result is abnormal, please refer to the counselor to consult with Pusat Kesihatan for <br>
    confirmation of diagnosis and intervention or treatment.</p>
<p style="text-align:left; font-weight:bold;"> Please click on button "Save" below to save your record for counselor use. Thank you.</p>
	
	
<form method="post" action="studentHome.php" id="comment_form">
	
	<div class="form-group">
	<input type="hidden" name="totaldep" value="<?=$totalDepression;?>">
    </div>
	
	<div class="form-group">
	<input type="hidden" name="totalanx" value="<?=$totalAnxiety;?>">
    </div>
	
	<div class="form-group">
	<input type="hidden" name="totalstr" value="<?=$totalStress;?>">
    </div>

	
   <div class="form-group">
    <input style="center" type="submit" name="saveResult" value="Save" class="button" />
   </div>
 
  </form>

<?php
include('db_config/PDO_connect.php');

		if(isset($_POST['saveResult'])){
			$studentID = $dassStud;
			$totalDepression = $_POST['totaldep'];
			$totalAnxiety = $_POST['totalanx'];
			$totalStress = $_POST['totalstr'];

			if(!empty($totalDepression)){
				try{
					$dassData = $con->prepare("INSERT INTO dassresult(studentID, depressionScore, anxietyScore, stressScore) 		VALUES (:studentID, :depressionScore, :anxietyScore, :stressScore)");
					$dassData->execute(array(':studentID'=>$dassStud, ':depressionScore'=>$totalDepression, 
											 ':anxietyScore'=>$totalAnxiety, ':stressScore'=>$totalStress));
					//header('Location:studentHome.php');
				}catch(PDOException $ex){
					echo $ex->getMessage();
				}
			}else{
				echo "INSERT input";
			}
		}

?>
</div>
</body>


</html>

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

