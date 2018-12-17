<?php
//insert.php
if(isset($_POST["appointmentID"]))
{
 include("db_config/config.php");
 $appointmentID = mysqli_real_escape_string($con, $_POST["appointmentID"]);
 $studentID = mysqli_real_escape_string($con, $_POST["studentID"]);
 $statusBook = mysqli_real_escape_string($con, $_POST["statusBook"]);
 $description = mysqli_real_escape_string($con, $_POST["description"]);
 $query = "
 INSERT INTO approve(appointmentID, studentID, statusBook, description)
 VALUES ('$appointmentID', '$studentID', '$statusBook', '$description')
 ";
 mysqli_query($con, $query);
}
?>