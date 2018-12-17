<?php

session_start();
include('db_config/config.php');
$userProfile = $_SESSION['studentID'];
$dassStud = $_SESSION['studentID'];
$q = "select * from student where studentID='$userProfile' ";
$data = mysqli_query($con, $q);
$result = mysqli_fetch_assoc($data);
?>
<?php
include('db_config/PDO_connect.php');

		if(isset($_POST['saveResult'])){
			$studentID = $dassStud;
			$totalDepression = '';
			$totalAnxiety = '';
			$totalStress = '';
			if(!empty($studentID)){
				try{
					$dassData = $con->prepare("INSERT INTO dassresult (studentID, depressionScore, anxietyScore, stressScore) 
											   VALUES (:studentID, :totalDepression, :totalAnxiety, :totalStress)");
					$dassData->execute(array(':studentID'=>$dassStud, ':depressionScore'=>$totalDepression, ':anxietyScore'=>						 $totalAnxiety, ':stressScore'=>$totalStress));
					header('Location:dassResult.php');
				}catch(PDOException $ex){
					echo $ex->getMessage();
				}
			}else{
				echo "";
			}
		}
?>