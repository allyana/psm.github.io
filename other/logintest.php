<?php
session_start();
if(isset($_POST['loginStud'])){
	require 'db_config/config.php';
	$studentID = $_POST['studentID'];
	$password = $_POST['password'];
	$result = mysqli_query($con, 'select studentID, password, sName, picProfile from student where studentID="'.$studentID.'" and password="'.$password.'"');
	if(mysqli_num_rows($result)==1){
		$_SESSION['studentID'] = $studentID;
		$_SESSION['sName'] = $sName;
		$_SESSION['picProfile'] = $picProfile;
		header('location:studentHome.php');
	}
	else
	{
		echo "Username and Password is invalid";
	}
}	
?>  


<?php
session_start();
$message="";
if(count($_POST)>0) {
$con = mysqli_connect('localhost','root','','counselling') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM student WHERE studentID='" . $_POST["studentID"] . "' and password = '". $_POST["password"]."'");
$row = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["studentID"] = $row[studentID];
$_SESSION["sName"] = $row[sName];
$_SESSION["picProfile"] = $row[picProfile];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION['studentID'])) {
header("Location:studentLogin.php");
}
?>