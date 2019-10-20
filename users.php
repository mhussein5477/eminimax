<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="users.css">
</head>
<body>

 <div class="modal-dialog text-center">

<div class="modal-content">

 			 
 			<div class="col-12 user-img">
 				
 					<form class="col-12" action="register.php?add" method="POST" enctype="multipart/form-data">
 						<div class="form-group">
 							<input type="text" class="form-control" name="user" placeholder="Enter Unique Username">
 							
 						</div>
 						
 				<select class="form-control" name="type">
  					
  					<option value="admin">Admin</option>
  					<option value="user">Users</option>
  					</select>
  					

 						<div class="form-group">
 							<input type="password" class="form-control" name="pass" placeholder="Enter Password">
 						</div>
 						
 						<button type="submit" class="btn"><i class="fas fa-sign-in-alt"></i> Register</button>

 					</form>

 				
 			</div>


 		</div> <!--- end of modal content-->
</div>

</body>
</html>