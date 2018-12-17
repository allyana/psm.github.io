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



</style>
<body background = "data:image/jpeg;base64,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" style="background-size:200%">

<h2>
<img src="images/ump.png" style="float:left; border:0px; padding:10px;" width="200px" height="150px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="images/kpm.png" style="float:rightwards; border:0px; padding:10px;" width="235px" height="140px"></h2>
<p></p>

<div class="navbar">
  <a class="active" href="index.html"><i class="fa fa-fw fa-home"></i> Home</a> 
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
  <a style="float:right" href="registration.php"><i class=""></i> Register</a>
</div>




<div>
	<br>
	<font face="ARIAL" style="color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; display: table;">
	<font face="ARIAL"><br>
	<div>
		<table style="width: 100%">
			<tr>
				<td style="width: 242px">
				<font face="ARIAL" style="color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; display: table">
	<font face="ARIAL" style="color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">
				<img alt="" src="http://www.ump.edu.my/sites/default/files/field/image/ump-194x174.jpg" style="height: 200" width="204"></font></font></td>
				<td>
				<p>Universiti Malaysia Pahang</p>
				<p>Universiti Malaysia Pahang (UMP) was established by the 
				Government of Malaysia on February 16, 2002. UMP was set up as a 
				competency based technical university which specialiases in the 
				fields of engineering and technology.</p>
				<p>UMP is located on the east coast state of Pahang, the biggest 
				state in Peninsular Malaysia with vast areas of rainforest 
				endowed with a wide range of biodiversities and natural 
				resources.</p>
				</td>
			</tr>
		</table>
	</div>
	<font face="ARIAL" style="color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; display: table">
	<p>The campus is also strategically located in the East Coast Industrial 
	Belt of Peninsular Malaysia which hosts a large number of multinational 
	corporations (MNCs) in the chemical, petrochemical, manufacturing automotive 
	and biotechnology industries. </p>
	<p>UMP offers a wide range of dkills-based tertiary education programmers 
	and practical-based tertiary education in engineering and technology to 
	produce competent engineers. Its application oriented curriculum intergrates 
	theory and practise in the concept of a teaching factory, emphasizing 
	experiental and action learning, task oriented and problem solving.</p>
	<p>Universiti Malaysia Pahang</p>
	<p>Universiti Malaysia Pahang (UMP) was establish by the Government of 
	Malaysia on February 16, 2002. UMP was set upas a competency based technical 
	university which specialises in the fields of engineering and technology.</p>
	<p>UMP is located on the east coast state of Pahang, thebiggest state in 
	Peninsular MAlaysia with </p>
	</font><br><br>
	<p style="border: 0px; margin: 0px 0px 1em; padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; text-align: justify;">
	<strong style="border: 0px; margin: 0px; padding: 0px; font-weight: bold;">
	<span data-scayt_word="Universiti" data-scaytid="1" style="border: 0px; margin: 0px; padding: 0px;">
	Universiti</span><span>&nbsp;</span>Malaysia<span>&nbsp;</span><span data-scayt_word="Pahang" data-scaytid="3" style="border: 0px; margin: 0px; padding: 0px;">Pahang</span></strong></p>
	</font><label id="Label1"></label><font face="ARIAL">
	<p style="border: 0px; margin: 1em 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; text-align: justify;">
	<span data-scayt_word="Universiti" data-scaytid="2" style="border: 0px; margin: 0px; padding: 0px;">
	Universiti</span><span>&nbsp;</span>Malaysia<span>&nbsp;</span><span data-scayt_word="Pahang" data-scaytid="4" style="border: 0px; margin: 0px; padding: 0px;">Pahang</span><span>&nbsp;</span>(UMP) 
	was established by the Government of Malaysia on February 16, 2002. UMP was 
	set up as a competency based technical university which<span>&nbsp;</span><span data-scayt_word="specialises" data-scaytid="6" style="border: 0px; margin: 0px; padding: 0px;">specialises</span><span>&nbsp;</span>in 
	the fields of engineering and technology.</p>
	<p style="border: 0px; margin: 1em 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">
	UMP is located on the east coast state of<span>&nbsp;</span><span data-scayt_word="Pahang" data-scaytid="5" style="border: 0px; margin: 0px; padding: 0px;">Pahang</span>, 
	the biggest state in Peninsular Malaysia with vast areas of rainforest 
	endowed with a wide range of<span>&nbsp;</span><span data-scayt_word="biodiversities" data-scaytid="7" style="border: 0px; margin: 0px; padding: 0px;">biodiversities</span><span>&nbsp;</span>and 
	natural resources.</p>
	<p style="border: 0px; margin: 1em 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">
	The campus is also strategically located in the East Coast Industrial Belt 
	of Peninsular Malaysia which hosts a large number of multinational 
	corporations (<span data-scayt_word="MNCS" data-scaytid="8" style="border: 0px; margin: 0px; padding: 0px;">MNCS</span>) 
	in the chemical, petrochemical, manufacturing, automotive and biotechnology 
	industries.</p>
	<p style="border: 0px; margin: 1em 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">
	UMP offers a wide range of skills-based tertiary education<span>&nbsp;</span><span data-scayt_word="programmes" data-scaytid="9" style="border: 0px; margin: 0px; padding: 0px;">programmes</span><span>&nbsp;</span>and 
	practical-based tertiary education in engineering and technology to produce 
	competent engineers. Its application oriented curriculum integrates theory 
	and<span>&nbsp;</span><span data-scayt_word="practise" data-scaytid="10" style="border: 0px; margin: 0px; padding: 0px;">practise</span><span>&nbsp;</span>in 
	the concept of a teaching factory, emphasizing<span>&nbsp;</span><span data-scayt_word="experiental" data-scaytid="11" style="border: 0px; margin: 0px; padding: 0px;">experiental</span><span>&nbsp;</span>and 
	action learning, task oriented and problem solving.</p>
	<p style="border: 0px; margin: 1em 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">
	As for research, UMP focuses on applied research and industrial projects to 
	enrich the teaching and learning processes as well as to promote the 
	commercialization of research products, thus exposing students to the latest 
	research and development activities in the industries.</p>
	<p style="border: 0px; margin: 1em 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">
	The university’s campuses are fully equipped with the latest information and 
	communication technology (ICT) systems, including wireless broadband 
	internet connections to facilitate the university’s electronic based 
	e-Learning and e-Management activities.</p>
	<p style="border: 0px; margin: 1em 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">
	UMP is committed to the development of human capital and technology to 
	fulfill the needs of industries as well as to contribute to the country’s 
	overall development.</p>
	<p style="border: 0px; margin: 1em 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; text-align: justify;">
	&nbsp;</p>
	<p style="border: 0px; margin: 1em 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; text-align: justify;">
	<strong style="border: 0px; margin: 0px; padding: 0px; font-weight: bold;">
	<span data-scayt_word="Pekan" data-scaytid="12" style="border: 0px; margin: 0px; padding: 0px;">
	Pekan</span><span>&nbsp;</span>Campus</strong></p>
	<p style="border: 0px; margin: 1em 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; text-align: justify;">
	<span data-scayt_word="Pekan" data-scaytid="13" style="border: 0px; margin: 0px; padding: 0px;">
	Pekan</span><span>&nbsp;</span>Campus,<span>&nbsp;</span><span data-scayt_word="50km" data-scaytid="16" style="border: 0px; margin: 0px; padding: 0px;">50km</span><span>&nbsp;</span>away 
	from<span>&nbsp;</span><span data-scayt_word="Gambang" data-scaytid="17" style="border: 0px; margin: 0px; padding: 0px;">Gambang</span><span>&nbsp;</span>Campus, 
	is set to be the main campus of UMP after its full completion in 2015 
	tentatively. Upon its completion, the permanent campus will be able to 
	accommodate a total number of 10,000 students and 2,000 staff. The location 
	is in the vicinity of ever growing industrial zone especially automotive 
	industry which<br>acts as a catalyst for research collaboration and academic 
	proliferation. Currently, three (3) faculties, namely Faculty of Mechanical 
	Engineering, Faculty of Manufacturing Engineering and Faculty of Electrical 
	&amp; Electronics Engineering have made their way to the campus which is 
	surrounded by sea breeze of the South China Sea.</p>
	<p style="border: 0px; margin: 1em 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; text-align: justify;">
	&nbsp;</p>
	<p style="border: 0px; margin: 1em 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; text-align: justify;">
	<strong style="border: 0px; margin: 0px; padding: 0px; font-weight: bold;">
	<span data-scayt_word="Gambang" data-scaytid="18" style="border: 0px; margin: 0px; padding: 0px;">
	Gambang</span><span>&nbsp;</span>Campus</strong></p>
	<p style="border: 0px; margin: 1em 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; text-align: justify;">
	The campus is currently operating in an industrial estate about<span>&nbsp;</span><span data-scayt_word="30km" data-scaytid="19" style="border: 0px; margin: 0px; padding: 0px;">30km</span><span>&nbsp;</span>from 
	the city of<span>&nbsp;</span><span data-scayt_word="Kuantan" data-scaytid="20" style="border: 0px; margin: 0px; padding: 0px;">Kuantan</span><span>&nbsp;</span>and 
	it is a 2 and a half hours’ drive from Kuala Lumpur, via the East Coast 
	Expressway. Strategically located in the East Coast Industrial Belt of 
	Peninsular Malaysia which hosts a number of multinational corporations (<span data-scayt_word="MNCs" data-scaytid="21" style="border: 0px; margin: 0px; padding: 0px;">MNCs</span>) 
	in the chemical,<span>&nbsp;</span><span data-scayt_word="petro-chemical" data-scaytid="22" style="border: 0px; margin: 0px; padding: 0px;">petro-chemical</span>, 
	manufacturing, automotive and biotechnology industries, UMP students have 
	been exposed extensively to the latest development in the fields of 
	engineering and technology.</p>
	</font></font><br></div>




</body>
</html> 