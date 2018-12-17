	$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	
	
			$studentID = $_SESSION['studentID'];
			$query = "SELECT studentID, date, typeConfession, subject, confession FROM confession WHERE studentID = '$studentID' ";
			$result = mysql_query($query);

			while($row=mysql_fetch_array($result)){
				$studentID=$row['studentID'];
				echo 
		
			}
	
	
	<?php
	
	SESSION_START();
	include_once("db_config/config.php");
	
	$sql = "SELECT studentID, date, typeConfession, subject, confession FROM confession WHERE studentID=:studentID";
	$result = mysqli_query($con,$sql);
	


?>

<?php
 $databaseHost = "localhost"; 
 $databaseUser = "root";
 $databasePassword = "";
 $databaseName = "counselling";
        
      $con=mysql_connect($databaseHost ,$databaseUser ,$databasePassword )or die ('Connection Error');
      mysql_select_db("counselling",$con) or die ('Database Error');
 ?>

 
 	<label> Select Designation : </label> 
<select name="confessionID"> 
       <option value="">Please Select</option> 
     <?php
         $dd_res=mysql_query("Select DISTINCT confessionID from confession");
         while($r=mysql_fetch_row($dd_res))
         { 
               echo "<option value='$r[0]'> $r[0] </option>";
         }
     ?>
</select>



  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-dark-grey">
  <div class="w3-row-padding">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p></p>
      <p>Copyright © 2018 Universiti Malaysia Pahang. All right reserved.</a></p>
    </div>
  
    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Lorem</span><br>
          <span>Sed mattis nunc</span>
        </li>
        <li class="w3-padding-16">
          <img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Ipsum</span><br>
          <span>Praes tinci sed</span>
        </li> 
      </ul>
    </div>

    <div class="w3-third">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">London</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">DIY</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Family</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Shopping</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Games</span>
      </p>
    </div>

  </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>

<!-- End page content -->
</div>