<?php
$con = mysqli_connect('localhost', 'root', '') or die ('Unable to connect');
mysqli_select_db($con, 'counselling');

	$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	$headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
?>