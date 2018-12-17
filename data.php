<?php
header('Content-Type: application/json');

require_once('db_config/config.php');

$sqlQuery = "SELECT student_id,student_name,mark FROM tbl_mark ORDER BY student_id";

$result = mysqli_query($cnn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($con);

echo json_encode($data);
?>