<?php


session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['loginStud'])) {
if (empty($_POST['studentID']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$studentID = $_POST['studentID'];
$password = $_POST['password'];

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "counselling");

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT studentID, password, sName, picProfile from student where studentID=? AND password=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $studentID, $password);
$stmt->execute();
$stmt->bind_result($studentID, $password);
$stmt->store_result();

if($stmt->fetch()) //fetching the contents of the row
        {
          $_SESSION['login_user'] = $studentID; // Initializing Session
		  $_SESSION['login_user'] = $sName;
		  $_SESSION['login_user'] = $picProfile;
          header("location: studentHome.php"); // Redirecting To Profile Page
        }
else {
       $error = "Username or Password is invalid";
     }
mysqli_close($conn); // Closing Connection
}
}
?>