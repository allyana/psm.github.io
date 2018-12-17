<?php
// Connexion à la base de données
require_once('eventDb.php');
//echo $_POST['title'];
if (isset($_POST['title']) && isset($_POST['start_event']) && isset($_POST['end_event']) && isset($_POST['color'])){
	
	$title = $_POST['title'];
	$start_event = $_POST['start_event'];
	$end_event = $_POST['end_event'];
	$color = $_POST['color'];
	$sql = "INSERT INTO events(title, start_event, end_event, color) values ('$title', '$start_event', '$end_event', '$color')";
	//$req = $bdd->prepare($sql);
	//$req->execute();
	
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