<!DOCTYPE html>
<html>
<title>Counselor Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
.auto-style1 {
	margin-left: 355px;
	margin-right: 426px;
}
.auto-style2 {
	margin-left: 40px;
}
.auto-style3 {
	margin-left: 80px;
}
.auto-style4 {
	margin-left: 120px;
}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="staffPic/<?php echo $row['image']; ?>" style="width:45%;" class="w3-round"><br><br>
    
  </div>
  <div class="w3-bar-block">
	<a href="counselorHome.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home w3-margin-right"></i>HOME</a>
    <a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user w3-margin-right"></i>MY PROFILE</a>
	<a href="calendarIndex.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-calendar fa-fw w3-margin-right"></i>MY CALENDAR</a>
	<a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>APPOINTMENT</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>eCONFESSION</a> 
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

<p><br></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form action="" class="auto-style1" method="post" style="height: 475px; width: 531px">
	&nbsp;&nbsp;<label id="Label1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	ADD SCHEDULE<br><br></label>
	&nbsp;<p class="auto-style2" style="width: 450px">
                                  <label class="auto-style3" for="date">
                                   Date<span class="asteriskField">*
                                   </span>
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="form-control" id="date" name="date" type="text" required/></label><div class="form-group form-group-lg" style="width: 276px">
                                     <p class="auto-style4" style="width: 253px">
                                  <label class="control-label col-sm-2 requiredField" for="scheduleday">
                                   Day
                                   <span class="asteriskField">
                                    *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   </span>
                                  </label>
                                   <select class="select form-control" id="scheduleday" name="scheduleday" required>
                                    <option value="Monday">
                                     Monday
                                    </option>
                                    <option value="Tuesday">
                                     Tuesday
                                    </option>
                                    <option value="Wednesday">
                                     Wednesday
                                    </option>
                                    <option value="Thursday">
                                     Thursday
                                    </option>
                                    <option value="Friday">
                                     Friday
                                    </option>
                                    <option value="Saturday">
                                     Saturday
                                    </option>
                                    <option value="Sunday">
                                     Sunday
                                    </option>
                                   </select></p>
                                 </div>
                                 <div class="form-group form-group-lg">
                                     <p class="auto-style4">
                                  <label class="control-label col-sm-2 requiredField" for="starttime">
                                   Start Time
                                   <span class="asteriskField">
                                    *&nbsp;&nbsp;&nbsp;&nbsp;
                                   </span>
                                  </label>
                                    <input class="form-control" id="starttime" name="starttime" type="text" required/></p>
                                 <div class="form-group form-group-lg">
                                     <p class="auto-style4">
                                  <label class="control-label col-sm-2 requiredField" for="endtime">
                                   End Time
                                   <span class="asteriskField">
                                    *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   </span>
                                  </label>
                                    <input class="form-control" id="endtime" name="endtime" type="text" required/></p>
                                 </div>
                                 </div>
                                 <div class="form-group">
                                  <div class="col-sm-10 col-sm-offset-2">
                                  <div class="col-sm-10" style="width: 329px; height: 112px">
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									  <p class="auto-style4" style="height: 37px; width: 357px;">
                                  <label class="control-label col-sm-2 requiredField" for="bookavail">
                                   Availabilty
                                   <span class="asteriskField">
                                    *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   </span>
                                  </label>
                                   <select class="auto-style5" id="bookavail" name="bookavail" required>
                                    <option value="Available">
                                     Available
                                    </option>
                                    <option value="Not Available">
                                     Not Available
                                    </option>
                                   </select></p>
									  <p class="auto-style4" style="height: 57px; width: 292px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   <button class="btn btn-primary " name="submit" type="submit">
                                    Submit
                                   </button>
                                  	</p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <br>
                                  </div>
                                  </div>
</form>

</body>
</html>
