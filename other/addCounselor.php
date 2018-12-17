<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>

<form method="post" enctype="multipart/form-data" class="form-horizontal">
     
 <table class="table table-bordered table-responsive">
 
    <tr>
     <td><label class="control-label">Staff ID</label></td>
        <td><input class="form-control" type="text" name="staffID" placeholder="" value="" /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">Password</label></td>
        <td><input class="form-control" type="text" name="password" placeholder="" value="" /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">New Password</label></td>
        <td><input class="form-control" type="text" name="newPassword" placeholder="" value="" /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">Staff Name</label></td>
        <td><input class="form-control" type="text" name="staffName" placeholder="" value="" /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">Email</label></td>
        <td><input class="form-control" type="text" name="email" placeholder="" value="" /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">Mobile</label></td>
        <td><input class="form-control" type="" name="phoneNo" placeholder="" value="" /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">Office Room</label></td>
        <td><input class="form-control" type="text" name="officeRoom" placeholder="" value="" /></td>
    </tr>
	
	<tr>
     <td><label class="control-label">Profile Image</label></td>
        <td><input class="input-group" type="file" name="image" accept="staffPic/*" /></td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="addStaff" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; Add
        </button>
        </td>
    </tr>
    
    </table>
    
</form>

</body>
</html>