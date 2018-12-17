<?php
session_start();
include('db_config/config.php');
$userProfile = $_SESSION['studentID'];
//$picProfile = $_SESSION['studentID'];
$q = "select * from student where studentID='$userProfile' ";
$data = mysqli_query($con, $q);
$result = mysqli_fetch_assoc($data);

?>
<?php

if(isset($_POST["book"]))
{
 include("db_config/config.php");
 $date = mysqli_real_escape_string($con, $_POST["date"]);
 $staffID = mysqli_real_escape_string($con, $_POST["staffID"]);
 $studentID = $userProfile;
 $category = mysqli_real_escape_string($con, $_POST["category"]);
 $comment = mysqli_real_escape_string($con, $_POST["comment"]);
 $query = "
 INSERT INTO appointment(date, staffID, studentID, category, comment)
 VALUES ('$date', '$staffID', '$studentID', '$category', '$comment')
 ";
 mysqli_query($con, $query);
}
?>