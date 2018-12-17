<?php
		
		if(isset($_POST["studLogin"]))  
		{  
           if(empty($_POST["studentID"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM student WHERE studentID = :studentID AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'studentID'     =>     $_POST["studentID"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["studentID"] = $_POST["studentID"];  
					 $_SESSION["sName"] = $_POST["sName"]; 
					 $_SESSION["picProfile"] = $_POST["picProfile"]; 
                     header("location:studentHome.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }  
            }  
        }  
			
		?>
		
		
		
		
			<?php
			if(isset($_POST['login']))
			{
				$staffID = $_POST['staffID'];
				$password = $_POST['password'];
				
				$query = "select * from counsellor WHERE staffID='$staffID' AND password='$password'";
				
				
				$query_run = mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
					$row = mysqli_fetch_assoc($query_run);
					//valid
					$_SESSION['staffID'] = $row['staffID'];
					//$_SESSION['staffID'] = $row['staffID'];
					header("location:counselorHome.php");
				}
				else{
					//invalid
					echo '<script type="text/javascript"> alert ("Invalid username and password) </script>';
				}
				
				
			}
		?>