<?php include('functions.php') 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Bms-Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header" style="background-color: #ff4d4d;">
			<img src="images/bou_logo.png"  alt=" Bank of Ugand"  width="100" height="100">

		<h2>Bms-Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn"  style="background-color: #ff4d4d;">Login</button>
		</div>
		<!-- <p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p> -->
	</form>


</body>
</html>