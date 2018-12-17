<?php

require_once('db_config/PDO_connect.php');

if(isset($_GET['staffID'])){
	$staffID = $_GET['staffID'];
	try{
		$staffData = $con->prepare("DELETE FROM counsellor WHERE staffID=?");
		$staffData->execute(array($staffID));
		header('Location:counselorIndex.php');
	}catch(PDOException $ex){
		echo $ex->getMessage();
	}
}
?>