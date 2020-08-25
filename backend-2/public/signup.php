<?php require_once("../resources/config.php"); 
      include_once('header.php');
      include_once('signin_process.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="signup.php">
		<!-- display validation errors here -->
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<label>City</label>
			<input type="text" name="city" value="<?php echo $city; ?>">
		</div>
		<div class="input-group">
			<label>Address</label>
			<textarea name="address" value="<?php echo $address; ?>"></textarea>
		</div>
		<div class="input-group">
			<label>Phone Number</label>
			<input type="text" name="number" value="<?php echo $number; ?>">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button> 
		</div>
		<p>
			Already a member? <a href="login.php">Login</a>
		</p>
	</form>

</body>
</html>