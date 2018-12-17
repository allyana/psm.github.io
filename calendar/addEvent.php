<?php
require_once('bdd.php');
//echo $_POST['title'];
if (isset($_POST['title']) && isset($_POST['studentID']) &&  isset($_POST['start']) 
	         && isset($_POST['end']) && isset($_POST['color'])){
	
	$title = $_POST['title'];
	$studentID = $_POST['studentID'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$color = $_POST['color'];

	$sql = "INSERT INTO events(title, studentID, color, start, end) 
	        values ('$title', '$studentID', '$color', '$start', '$end')";
	
	echo $sql;
	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Error prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Error execute');
	}
}
header('Location: '.$_SERVER['HTTP_REFERER']);	
?>
