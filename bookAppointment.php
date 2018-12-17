<?php

session_start();
include('db_config/config.php');
$userProfile = $_SESSION['studentID'];
$appStudent = $_SESSION['studentID'];
$q = "select * from student where studentID='$userProfile' ";
$data = mysqli_query($con, $q);
$result = mysqli_fetch_assoc($data);
?>

<?php
 require("db_config/PDO_connect.php");

		if(isset($_POST['book'])){
			//$studentID = $_POST['studentID'];
			$date = $_POST['date'];
			$time = $_POST['time'];
			$staffID = $_POST['staffID'];
			$category = $_POST['category'];
			$comment = $_POST['comment'];
			if(!empty($date)){
				try{
					$appData = $con->prepare("INSERT INTO appointment(date, time, staffID, studentID, category, comment) 
										 VALUES (:date, :time, :staffID, :studentID, :category, :comment)");
					$appData->execute(array(':date'=>$date, ':time'=>$time, ':staffID'=>$staffID, ':studentID'=>$appStudent,   
											':category'=>$category, ':comment'=>$comment));
					header('Location:bookAppointment.php');
				}catch(PDOException $ex){
					echo $ex->getMessage();
				}
			}else{
				echo "Insert input";
			}
		}	 	
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
div container{
	border: 1px solid black;
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
      <button onclick="window.location.href='counselorDetails.php'" class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Available Counselor</a></button>
      <button onclick="window.location.href='bookAppointment.php'"  class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>New Appointment</a></button>
      <button onclick="window.location.href='appointmentStatus.php'" class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Appointment Status</a></button>
    </div>
    </div>
  </header>

</div>
</div>
  
<!DOCTYPE html>
 
<html>
 
<head>
 
 <title>Notification using PHP Ajax Bootstrap</title>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
 <style>
 container{
	 border: 1px solid black;
	 float: right;
 }
 </style>
</head>
 <body>
 <br><br>
 
 <div class="container" style="width:49%">
 
 <h1> Make your appointment here ! </h1><br>
 
  <form method="post" id="comment_form">
 
	<div class="form-group">
    <label>Choose Date</label>
    <input type="date" name="date" id="date" min="2000-01-02" class="form-control">
    </div>
	
	<div class="form-group">
    <label>Choose Time</label>
    <input type="time" name="time" id="time" class="form-control">
    </div>
   
    <div class="form-group">
    <label>Staff ID</label>
    <select name="staffID" class="form-control">
		<option value="pick">Please select</option>
		<?php
			require('db_config/PDO_connect.php');
			$staffData = $con->prepare("SELECT staffID, staffName From counsellor");
			$staffData->execute();
			$result = $staffData->fetchAll();
			foreach($result as $row): ?>
			<option value="<?=$row['staffID']; ?>"><?= $row['staffName'];?></option>
			<?php endforeach; ?>
			
	
	</select>
    </div>
	
    <div class="form-group">
    <label>Select Category</label>
    <select name="category">
				<option value="academic">Academic Issue</option>
				<option value="financial">Financial Issue</option>
				<option value="health">Health Issue</option>
				<option value="family">Family Issue</option>
				<option value="career">Career Issue</option>
				<option value="relationship">Relationship Issue</option>
				<option value="time">Time Management Issue</option>
				<option value="residence">Residence Issue</option>
			</select>
    </div>
 
	<div class="form-group">
     <label>Enter Comment</label>
     <textarea name="comment" id="comment" class="form-control" rows="3"></textarea>
    </div>
	
   <div class="form-group">
 
    <input style="center" type="submit" name="book" id="book" class="btn btn-info" value="Book" />
 
   </div>
 
  </form>
 
 
 </div>
 
</body>
 
</html>

<script>
/*$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetchApproval.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#date').val() != '' && $('#staffID').val() != '' && $('#studentID').val() != '' && $('#category').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"book.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("All Fields are Required");
  }
 });
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});*/
</script>

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
