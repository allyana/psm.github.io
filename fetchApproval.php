<?php
session_start();
include('db_config/config.php');
if(isset($_POST['view'])){
// $con = mysqli_connect("localhost", "root", "", "notif");
if($_POST["view"] != '')
{
    $update_query = "UPDATE approve SET status = 1 WHERE status=0";
    mysqli_query($con, $update_query);
}
$query = "SELECT studentID, statusBook, description FROM approve WHERE studentID=$studentID";
$result = mysqli_query($con, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
   $output .= '
   <li>
   <a href="#">
   <strong>'.$row["studentID"].'</strong><br />
   <small><em>'.$row["statusBook"].'</em></small>
   <small><em>'.$row["description"].'</em></small>
   </a>
   </li>
   ';
 }
}
else{
     $output .= '
     <li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}
$status_query = "SELECT studentID, statusBook, description FROM approve WHERE status=0";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
    'notification' => $output,
    'unseen_notification'  => $count
);
echo json_encode($data);
}
?>