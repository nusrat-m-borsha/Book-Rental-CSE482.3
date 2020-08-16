<?php
include "config.php";  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Book Rental</title>
</head>
<body>
     <!----------------------------------Navbar----------------------------------->
     <header>
        <nav class="navbar navbar-expand-sm">
            <!-- Brand/logo -->
            <div class="nav-logo">
            <a class="navbar-brand" href="homepage.html">Book Rental</a>
            </div>
            <!-- Links -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"><i class="fa fa-bars"></i>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="book_genre_list.html">Browse Books</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.html">Sign up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="payment.html">My Cart</a>
              </li>
            </ul>
            </div>
        </nav>
    </header>

  <section class="user-section">
        <!----------------------------------Page Heading----------------------------------->
        <div class="row">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
               <div class="user-heading">
                 <h1>Give Your Feedback</h1>
               </div>
            </div>
        </div>
       <!----------------------------------Homepage Button and User Options----------------------------------->
      <div class="row text-center">
            <div class="col-md-12 form-group">
              <button class="btn home-button" type="submit">Go back to homepage</button>
            </div>
      </div>
       


    <div class="container-fluid text-center gap">

      <div class="row justify-content-center">
        <div class="col-md-6" align="left">
          <h5>Book: ABC</h5>
          <h5>Author: XYZ</h5>
        </div>
      </div>
      
      <div class="row justify-content-center">

        <div class="col-md-6">
          <form action="feedback_process.php" method="post">
          <textarea class="form-control halfwidth1" id="comments" name="feedback" placeholder="Write your feedback" rows="5"></textarea>
          </form>
        </div>
      </div>
      <div class="row">
            <div class="col-md-12 form-group">
              <button class="btn submit-button" type="submit">Submit</button>
            </div>
          </form>
      </div>
    </div>
  </section>
     <!----------------------------------Footer----------------------------------->
        
<footer class="panel-footer-2 text-center">
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
  </footer>


</body>
</html>