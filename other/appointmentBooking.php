<?php 
$conn=mysqli_connect("localhost","root","","counselling");
if($conn){/*echo "Connected<br>";*/}
else die("could not connect".mysqli_error());
	
	date_default_timezone_set('Asia/Dhaka');
	$dat = date("d-m-y h:i:sa");
	echo "Time is : ".$dat;
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>do it</title>
</head>
<body>
		<!--class 1 -->
<form action="" method="POST">

	<div class="form-group">
    <label>Choose Date</label>
    <input type="date" name="date" id="date" min="2000-01-02" class="form-control">
    </div>
   
    <div class="form-group">
    <label> Select Counselor </label> 
	<select name="staffName"> 
       <option value="">Please Select</option> 
     <?php
         $dd_res=mysql_query("Select DISTINCT staffName from counsellor");
         while($r=mysql_fetch_row($dd_res))
         { 
               echo "<option value='$r[0]'> $r[0] </option>";
         }
     ?>
	</select>
    </div>
   
    <div class="form-group">
    <label>Student ID</label>
    <input type="text" name="studentID" id="studentID" class="form-control">
    </div>
	
    <div class="form-group">
    <label>Select Category</label>
    <select name="category">
				<option value="academic">Academic Issue</option>
				<option value="financial">Financial Issue</option>
				<option value="health">Health Issue</option>
				<option value="family">Family Issue</option>
				<option value="career">Career Issue</option>
				<option value="relationship">Relationship Issue</option>
				<option value="time">Time Management Issue</option>
				<option value="residence">Residence Issue</option>
			</select>
    </div>
 
	<div class="form-group">
     <label>Enter Comment</label>
     <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
    </div>
	
   <div class="form-group">
 
    <input type="submit" name="book" id="book" class="btn btn-info" value="Book" />
 
   </div>
		</form>

		<?php 
			//insert booking details 
			if(isset($_POST['submit'])){
				$date = $_POST['date'];
				$staffName = $_POST['staffName'];
				$studentID = $_POST['studentID']; 
				$studentID = $_POST['category'];
				$studentID = $_POST['comment'];
				$book_insert_qry = "insert into appointment (date,staffName,studentID,category,comment) values ('$date','$staffName','$studentID','$category','$comment');";
				if(mysqli_query($conn,$book_insert_qry)){
					echo "Your appointment successfully booked";
				}
				else die("error".mysqli_error($conn));
				//then get the class student id and put the announcement in to student notifation table
				$get_student="Select * from ".$cls."_student";
				$get_id=mysqli_query($conn,$get_student);
				while($r=mysqli_fetch_array($get_id)) {
					$noti_query = "insert into ".$r['id']."_noti (type,ann,seen_unseen) values ('$tsk','$ann','u');";
					mysqli_query($conn,$noti_query) or die ("Error".mysqli_error($conn));
						}
			}
		?>
</body>
</html>