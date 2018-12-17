<?php

$connect = mysqli_connect("localhost", "root", "", "counselling");

if(isset($_POST['add'])){
	$username = $_POST['username'];
	$ = $_POST['username'];
	$username = $_POST['username'];
	$username = $_POST['username'];
	
	
	$SQL = "INSERT INTO `admin`(`adminID`, `password`, `aEmail`, `aPhoneNum`) VALUES ([value-1],[value-2],[value-3],[value-4])";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form method="POST" action="adminInfo.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="aEmail">
		</div>
		<div class="input-group">
			<label>Phone Number</label>
			<input type="text" name="aPhoneNum">
		</div>
		<div class="input-group">
			<button type="submit" name="add" class="btn">Add</button>
		</div>
	</form>
	
</body>