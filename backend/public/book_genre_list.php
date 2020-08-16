<?php require_once("../resources/config.php"); ?>
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media_queries.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Book Rental</title>
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
                <a class="nav-link" href="#">Sign up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="payment.html">My Cart</a>
              </li>
            </ul>
            </div>
        </nav>
    </header>
      <!----------------------------------Search box----------------------------------->
      <div class="container">
          <div class="row">
              <div class="col-md-1"></div>
              <div class="col-xs-12 col-sm-12 col-md-10 ">
                <div class="search-container">
                    <form action="">
                      <input type="text" placeholder="Search.." name="search">
                      <button type="submit" class="btn btn-default">Search</button>
                    </form>
                  </div>
              </div>
              <div class="col-md-1"></div>
          </div>
      </div>

      <!----------------------------------Genre Heading----------------------------------->
      <section>
          <div class="container">
              <div class="row">
                 <div class="col-md-1"></div>
                 <div class="col-xs-12 col-sm-12 col-md-10">
                     <h4 class="genre-heading-font">Genre</h4>
                 </div>
                 <div class="col-md-1"></div>
              </div>
          </div>
      </section>

      <!----------------------------------Genre List Table----------------------------------->
      <section>
        <div class="container">
            <div class="row">
               <div class="col-md-1"></div>
               <div class="col-xs-12 col-sm-12 col-md-10">
                  <div class="genre-list-table">
                      <table>

                      <?php
                          $query = "SELECT * FROM Genre";
                          $send_query = mysqli_query($connection, $query);

                          while($row = mysqli_fetch_array($send_query)){
                            
                            echo "<tr><td><a href='single_genre.php?id={$row['genre_id']}'>{$row['genre_title']}</a></td></tr>";
                          }
                          ?>
                      </table>
                  </div>
               </div>
               <div class="col-md-1"></div>
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