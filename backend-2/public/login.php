<?php require_once("../resources/config.php"); 
      include_once('header.php');
      include_once('signin_process.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="login.php">
		<!-- display validation errors here -->
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button> 
		</div>
		<p>
			Not yet a member? <a href="signup.php">Sign Up</a>
		</p>
	</form>

</body>
</html>