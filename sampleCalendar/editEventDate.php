<?php
// Connexion à la base de données
require_once('eventDb.php');
if (isset($_POST['Event'][0]) && isset($_POST['Event'][1]) && isset($_POST['Event'][2])){
	
	
	$id = $_POST['Event'][0];
	$start_event = $_POST['Event'][1];
	$end_event = $_POST['Event'][2];
	$sql = "UPDATE events SET  start_event = '$start_event', end_event = '$end_event' WHERE id = $id ";
	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}else{
		die ('OK');
	}
}
//header('Location: '.$_SERVER['HTTP_REFERER']);
	
?>