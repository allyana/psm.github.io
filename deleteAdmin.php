<?php

require_once('db_config/PDO_connect.php');

if(isset($_GET['adminID'])){
	$adminID = $_GET['adminID'];
	try{
		$adminData = $con->prepare("DELETE FROM admin WHERE adminID=?");
		$adminData->execute(array($adminID));
		header('Location:adminIndex.php');
	}catch(PDOException $ex){
		echo $ex->getMessage();
	}
}
?>