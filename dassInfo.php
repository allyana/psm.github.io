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
	<b style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">
	<font face="Arial" size="5">
	<div align="CENTER">
		Overview of the DASS and its uses</div>
	</font></b>
	<hr style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">
	<font face="ARIAL" style="color: rgb(0, 0, 0); font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">
	<p align="LEFT"><font size="4"><b>General description of the scales</b></font></p>
	<font face="ARIAL">
	<p align="JUSTIFY"><font size="3">The DASS is a set of three self-report 
	scales designed to measure the negative emotional states of depression, 
	anxiety and stress. The DASS was constructed not merely as another set of 
	scales to measure conventionally defined emotional states, but to further 
	the process of defining, understanding, and measuring the ubiquitous and 
	clinically significant emotional states usually described as depression, 
	anxiety and stress. The DASS should thus meet the requirements of both 
	researchers and scientist-professional clinicians.<br><br>Each of the three 
	DASS scales contains 14 items, divided into subscales of 2-5 items with 
	similar content. The Depression scale assesses dysphoria, hopelessness, 
	devaluation of life, self-deprecation, lack of interest/involvement, 
	anhedonia, and inertia. The Anxiety scale assesses autonomic arousal, 
	skeletal muscle effects, situational anxiety, and subjective experience of 
	anxious affect. The Stress scale is sensitive to levels of chronic 
	non-specific arousal. It assesses difficulty relaxing, nervous arousal, and 
	being easily upset/agitated, irritable/over-reactive and impatient. Subjects 
	are asked to use 4-point severity/frequency scales to rate the extent to 
	which they have experienced each state<span>&nbsp;</span><i>over the past week</i>. 
	Scores for Depression, Anxiety and Stress are calculated by summing the 
	scores for the relevant items.<br><br>In addition to the basic 42-item 
	questionnaire, a short version, the DASS21, is available with 7 items per 
	scale. Note also that an earlier version of the DASS scales was referred to 
	as the Self-Analysis Questionnaire (SAQ).<br><br>As the scales of the DASS 
	have been shown to have high internal consistency and to yield meaningful 
	discriminations in a variety of settings, the scales should meet the needs 
	of both researchers and clinicians who wish to measure current state or 
	change in state over time (e.g., in the course of treatment) on the three 
	dimensions of depression, anxiety and stress.<br><br></font></p>
	<p align="LEFT"><b><font size="4">Characteristics of high scorers on each 
	DASS scale</font></b></p>
	</font>
	<blockquote>
		<font face="ARIAL"><font size="3"><i>
		<p align="LEFT">Depression scale</p>
		</i><font>
		<ul>
			<li>self-disparaging</li>
			<li>dispirited, gloomy, blue</li>
			<li>convinced that life has no meaning or value</li>
			<li>pessimistic about the future</li>
			<li>unable to experience enjoyment or satisfaction</li>
			<li>unable to become interested or involved</li>
			<li>slow, lacking in initiative</li>
		</ul>
		</font><i>
		<p align="LEFT">Anxiety scale</p>
		</i>
		<ul>
			<li>apprehensive, panicky</li>
			<li>trembly, shaky</li>
			<li>aware of dryness of the mouth, breathing difficulties, pounding 
			of the heart, sweatiness of the palms</li>
			<li>worried about performance and possible loss of control</li>
		</ul>
		</font><i><font size="3">
		<p align="LEFT">Stress scale</p>
		</font></i>
		<ul>
			<li>over-aroused, tense</li>
			<li>unable to relax</li>
			<li>touchy, easily upset</li>
			<li>irritable</li>
			<li>easily startled</li>
			<li>nervy, jumpy, fidgety</li>
			<li>intolerant of interruption or delay</li>
		</ul>
		</font>
	</blockquote>
	<font face="ARIAL"><font size="4">
	<p align="JUSTIFY"><b><a name="_Toc315622037"></a><a name="_Toc315622739">
	</a><a name="_Toc315623190"></a><a name="_Toc315623246"></a>
	<a name="_Toc315623659"></a><a name="_Toc315623751"></a>
	<a name="_Toc315677838"></a><a name="_Toc315685164"></a>
	<a name="_Toc315879793"></a><a name="_Toc315880125"></a>
	<a name="_Toc316226478">The DASS in research</a></b></p>
	</font>
	<p>The DASS may be administered either in groups or individually for 
	research purposes. The capacity to discriminate between the three related 
	states of depression, anxiety and stress should be useful to researchers 
	concerned with the nature, aetiology and mechanisms of emotional 
	disturbance.</p>
	<p>As the essential development of the DASS was carried out with 
	non-clinical samples, it is suitable for screening normal adolescents and 
	adults. Given the necessary language proficiency, there seems no compelling 
	case against use of the scales for comparative purposes with children as 
	young as 12 years. It must be borne in mind, however, that the lower age 
	limit of the development samples was 17 years.</p>
	<font size="4">
	<p align="JUSTIFY"><b><a name="_Toc315622039"></a><a name="_Toc315622741">
	</a><a name="_Toc315623192"></a><a name="_Toc315623248"></a>
	<a name="_Toc315623661"></a><a name="_Toc315623753"></a>
	<a name="_Toc315677840"></a><a name="_Toc315685166"></a>
	<a name="_Toc315879795"></a><a name="_Toc315880127"></a>
	<a name="_Toc316226480">Clinical use of the DASS</a></b></p>
	</font>
	<p>The principal value of the DASS in a clinical setting is to clarify the 
	locus of emotional disturbance, as part of the broader task of clinical 
	assessment. The essential function of the DASS is to assess the severity of 
	the<span>&nbsp;</span><i>core</i><span>&nbsp;</span>symptoms of depression, anxiety 
	and stress. It must be recognised that clinically depressed, anxious or 
	stressed persons may well manifest additional symptoms that tend to be 
	common to two or all three of the conditions, such as sleep, appetite, and 
	sexual disturbances. These disturbances will be elicited by clinical 
	examination, or by the use of general symptom check lists as required.</p>
	<p>The DASS may be administered and scored by non-psychologists, but 
	decisions based on particular score profiles should be made only by 
	experienced clinicians who have carried out an appropriate clinical 
	examination. It should be noted also that none of the DASS items refers to 
	suicidal tendencies because items relating to such tendencies were found not 
	to load on any scale. The experienced clinician will recognise the need to 
	determine the risk of suicide in seriously disturbed persons.</p>
	<font size="4">
	<p align="JUSTIFY"><b><a name="_Toc315622040"></a><a name="_Toc315622742">
	</a><a name="_Toc315623193"></a><a name="_Toc315623249"></a>
	<a name="_Toc315623662"></a><a name="_Toc315623754"></a>
	<a name="_Toc315677841"></a><a name="_Toc315685167"></a>
	<a name="_Toc315879796"></a><a name="_Toc315880128"></a>
	<a name="_Toc316226481">The DASS and diagnosis</a></b></p>
	</font>
	<p>The DASS is based on a<span>&nbsp;</span><i>dimensional</i><span>&nbsp;</span>rather 
	than a<span>&nbsp;</span><i>categorical</i><span>&nbsp;</span>conception of 
	psychological disorder. The assumption on which the DASS development was 
	based (and which was confirmed by the research data) is that the differences 
	between the depression, the anxiety, and the stress experienced by normal 
	subjects and the clinically disturbed, are essentially differences of 
	degree. The DASS therefore has no direct implications for the allocation of 
	patients to discrete diagnostic categories postulated in classificatory 
	systems such as the DSM and ICD. However, recommended cutoffs for 
	conventional severity labels (normal, moderate, severe) are given in the 
	DASS Manual.</p>
	</font></font><br></div>




</body>
</html> 