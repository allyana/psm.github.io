<?php

?>
<!DOCTYPE>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css
<link rel="stylesheet" href="Counselling/style.css">
<style>

body {
	font-family: Arial, Helvetica, sans-serif;
	background-color: #bdc3c7;
}

.bg{
	height: 100%;
	font: caption;
	font-family: Arial, Helvetica, sans-serif;
	font-size: small;
	font-style: oblique;
	font-weight: bold;
	text-decoration: none;
	text-transform: none;
	display: inherit;
	float: none;
	position: inherit;
	text-align: center;
	color: #000000;
}

.navbar {
  width: 100%;
  background-color: #2d3436;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.dropdown {
    float: right;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #006266;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #bdc3c7;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: ##bdc3c7;
}

.dropdown:hover .dropdown-content {
    display: block;
}


@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
.auto-style1 {
	margin-top: 67px;
	background-image: http://www.e2abs.com/wp-content/uploads/2017/12/Website-Background.jpg;
}



.auto-style2 {
	margin-right: 22px;
}
.auto-style3 {
	margin-top: 0px;
	text-align: center;
	float: none;
}
.auto-style4 {
	margin-top: 0px;
	text-align: center;
	float: none;
	margin-left: 0px;
}



</style>
<body background = "data:image/jpeg;base64,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" style="background-size:200%">

<h2>
<img src="images/ump.png" style="float:left; border:0px; padding:10px;" width="200px" height="150px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="images/kpm.png" style="float:rightwards; border:0px; padding:10px;" width="235px" height="140px"></h2>
<p></p>

<div class="navbar">
  <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="information.php"><i class=""></i> Counselling</a> 
  <a href="#"><i class=""></i> Program</a> 
  <a href="dassInfo.php"><i class=""></i> DASS</a>
  <a href="#"><i class=""></i> eConfession</a>
  <a href="#"><i class=""></i> About Us</a>
  <div class="dropdown">
    <button class="dropbtn">Login 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a  href="adminLogin.php">Admin</a>
      <a href="staffLogin.php">Staff</a>
      <a href="studentLogin.php">Student</a>
    </div>
  </div> 
  <a style="float:right" href="signUp.php"><i class=""></i> Register</a>
</div>
<form class="auto-style1" method="post" style="height: 828px;">
	<h1 style="font-style:Bold; font-size:18px;">INTRODUCTION</h1>
	<p style="border: 0px; margin: 1em 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;">
	The Counseling &amp; Career Division (<span data-scayt_word="BKK" data-scaytid="1" style="border: 0px; margin: 0px; padding: 0px;">BKK</span>) 
	of the Department of Student Affairs &amp; Alumni (<span data-scayt_word="JHEPA" data-scaytid="2" style="border: 0px; margin: 0px; padding: 0px;">JHEPA</span>) 
	was officially established in 2010.</p>
	<p style="border: 0px; margin: 1em 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;">
	<span data-scayt_word="BKK" data-scaytid="3" style="border: 0px; margin: 0px; padding: 0px;">
	BKK</span><span>&nbsp;</span>was founded as a support system to assist students 
	in identifying their potentials and acknowledging their problems, and 
	finding the right solutions to both, in order to help the students develop 
	outstanding personalities and eventually, excel in their studies.</p>
	<p style="border: 0px; margin: 1em 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;">
	In addition,<span>&nbsp;</span><span data-scayt_word="BKK" data-scaytid="5" style="border: 0px; margin: 0px; padding: 0px;">BKK</span><span>&nbsp;</span>also 
	plays the role of developing and ensuring consistent progress of the many 
	and different talents and potentials that UMP students possess,</p>
	<p style="border: 0px; margin: 1em 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;">
	To date, three Psychology Officers have been recruited into<span>&nbsp;</span><span data-scayt_word="BKK" data-scaytid="7" style="border: 0px; margin: 0px; padding: 0px;">BKK</span>, 
	and they are Mrs<span>&nbsp;</span><span data-scayt_word="Paridah" data-scaytid="9" style="border: 0px; margin: 0px; padding: 0px;">Paridah</span><span>&nbsp;</span><span data-scayt_word="Mohd" data-scaytid="10" style="border: 0px; margin: 0px; padding: 0px;">Mohd</span><span>&nbsp;</span>Ali 
	and Mr<span>&nbsp;</span><span data-scayt_word="Yunan" data-scaytid="12" style="border: 0px; margin: 0px; padding: 0px;">Yunan</span><span>&nbsp;</span>Abdul<span>&nbsp;</span><span data-scayt_word="Samad" data-scaytid="13" style="border: 0px; margin: 0px; padding: 0px;">Samad</span>at 
	the<span>&nbsp;</span><span data-scayt_word="Gambang" data-scaytid="14" style="border: 0px; margin: 0px; padding: 0px;">Gambang</span><span>&nbsp;</span>campus 
	while Ms<span>&nbsp;</span><span data-scayt_word="Fara" data-scaytid="15" style="border: 0px; margin: 0px; padding: 0px;">Fara</span><span>&nbsp;</span><span data-scayt_word="Hazlini" data-scaytid="16" style="border: 0px; margin: 0px; padding: 0px;">Hazlini</span><span>&nbsp;</span><span data-scayt_word="Mohd" data-scaytid="11" style="border: 0px; margin: 0px; padding: 0px;">Mohd</span><span>&nbsp;</span><span data-scayt_word="Som" data-scaytid="17" style="border: 0px; margin: 0px; padding: 0px;">Som</span><span>&nbsp;</span>at 
	the<span>&nbsp;</span><span data-scayt_word="Pekan" data-scaytid="18" style="border: 0px; margin: 0px; padding: 0px;">Pekan</span><span>&nbsp;</span>campus.</p>
	<br><h2 style="font-style:Bold; font-size:18px;">ROLES AND RESPONSIBILITIES</h2><br>
	<ul style="border: 0px; margin: 0px 0px 1.5em 2em; padding: 0px; list-style-type: disc; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">
		<li style="border: 0px; margin: 0px; padding: 0px;">To assist the 
		students in resolving individual and cluster set of problems – in 
		matters of academic, personal, psychosocial and career</li>
		<li style="border: 0px; margin: 0px; padding: 0px;">To assist the 
		students in personal development and growth – in matters of motivation, 
		management, counseling, leadership, teamwork and effective 
		communications</li>
		<li style="border: 0px; margin: 0px; padding: 0px;">To assist and 
		nurture the students in resolving daily problems – in matters of 
		academic and family issues</li>
		<li style="border: 0px; margin: 0px; padding: 0px;">To enhance the 
		students’ level of awareness in management – in order to develop the 
		spirit of leaderships</li>
		<li style="border: 0px; margin: 0px; padding: 0px;">To provide the 
		necessary career exposures to the students – by assisting them in 
		preparing resumes and having mock interview sessions</li>
	</ul>
	<br><h3 style="font-style:Bold; font-size:18px;">MAIN FUNCTIONS OF COUNSELLING SUB-DIVISION</h3><br>
	<ul style="border: 0px; margin: 0px 0px 1.5em 2em; padding: 0px; list-style-type: disc; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">
		<li style="border: 0px; margin: 0px; padding: 0px;">Counseling sessions</li>
		<li style="border: 0px; margin: 0px; padding: 0px;">Counseling 
		activities</li>
		<li style="border: 0px; margin: 0px; padding: 0px;">Counseling practices</li>
		<li style="border: 0px; margin: 0px; padding: 0px;">Guidance</li>
		<li style="border: 0px; margin: 0px; padding: 0px;">Consultation</li>
		<li style="border: 0px; margin: 0px; padding: 0px;">Reaching out 
		programme</li>
		<li style="border: 0px; margin: 0px; padding: 0px;">Assessment and 
		Evaluation</li>
		<li style="border: 0px; margin: 0px; padding: 0px;">Community Services</li>
		<li style="border: 0px; margin: 0px; padding: 0px;">Research and 
		Analysis</li>
	</ul>
	<p>&nbsp;</p>
	<h4 style="font-style:Bold; font-size:18px;">MAIN FUNCTIONS OF CAREER SUB-DIVISION</h4><br>
	<ul style="border: 0px; margin: 0px 0px 1.5em 2em; padding: 0px; list-style-type: disc; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">
		<li style="border: 0px; margin: 0px; padding: 0px;">Education</li>
		<li style="border: 0px; margin: 0px; padding: 0px;">Advisory and 
		Guidance</li>
		<li style="border: 0px; margin: 0px; padding: 0px;">Industry relation</li>
		<li style="border: 0px; margin: 0px; padding: 0px;">Database management</li>
		<li style="border: 0px; margin: 0px; padding: 0px;">Evaluation </li>
	</ul>
	<p>&nbsp;</p>
</form>


</body>
</html> 