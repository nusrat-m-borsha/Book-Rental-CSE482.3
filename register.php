<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Book Rental</title>
	<link rel="stylesheet" type="text/css" href="homepage.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Source Sans Pro' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="media_queries.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
	<!----------------------------------Navbar----------------------------------->
   <header>
	<nav class="navbar navbar-expand-sm">
		<!-- Brand/logo -->
		<div class="nav-logo">
		<a class="navbar-brand" href="#">Book Rental</a>
	   </div>
		<!-- Links -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		  <span class="navbar-toggler-icon"><i class="fa fa-bars"></i>
		  </span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav ml-auto">
		  <li class="nav-item">
			<a class="nav-link" href="#">Browse Books</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="register.php">Sign up</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="login.php">Login</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="payment.html">My Cart</a>
		  </li>
		</ul>
		</div>
	</nav>
</header>

 <!----------------------------------Below Navbar----------------------------------->
<div class="below-navbar">
	<div class="greeting">
	<h1>Join The Community</h1>
	</div>
	<div class="below-navbar-paragraph">
	<p>Get access to our exclusive library!</p>
	</div>
</div>

<!----------------------------------Signup box----------------------------------->
	<div class="box">
	<div class="header">
		<h2>Sign up</h2>
	</div>

	<form method="post" action="register.php">
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
			<button type="submit" name="register" class="btn">Register</button> 
		</div>
		<p>
			Already a member? <a href="login.php">Login</a>
		</p>
	</form>
	</div>

	<!----------------------------------Footer----------------------------------------->

<footer>
<div class="panel-footer-2 text-center">
  <div class="container">
    <div class="row">
      <section id="hours" class="col-xs-12 col-sm-12 col-md-4">
        <span>Hours:</span><br>
        <p>Sun-Thurs: 10:00am - 6.00pm</p>
        <p>Dhaka, Bangladesh</p>
        <hr class="visible-xs">
      </section>
      <section id="address" class="col-xs-12 col-sm-12 col-md-4">
        <span>Contact:</span><br>
        <p>Email: bookrentalsystem@gmail.com</p>
        <p>Phone: +88 01711 111 111</p>
        <hr class="visible-xs">
      </section>
      <section id="social" class="col-xs-12 col-sm-12 col-md-4">
        <span>Social Media: </span><br> 
        <a href="" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-instagram"></a>
      </section>
    </div>
    <div class="text-center">&copy; Book Rental System 2020</div>
  </div>
  </div>

</footer>

</body>
</html>