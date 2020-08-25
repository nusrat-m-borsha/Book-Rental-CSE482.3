<?php
  include "../resources/config.php";  
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

    <section>
        <div class="container">
            <div class="row">
              <div class="col-md-2 col-xs-12 col-sm-12 back-button">
                  <button> <a href="user.html">Go Back</a></button>
              </div>
              <div class="col-md-10"></div>
            </div>
           </div>
    </section>

     <!----------------------------------Book Collection----------------------------------->


<?php

      $username = $_SESSION['username']; //storing the username of currently logged in user in the variable $username

      //Here, i am trying to match the username with the currently logged in user 
      //Then i am asking for the user_id for that particular user so that i can store it as a foreign key in book table.
      //This will help me to identify who is the owner of the book.
      $query = "SELECT user_id FROM user WHERE username='$username'";
      $result = mysqli_query($connection, $query);

      if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $user_id =  $row['user_id']; //returns id
      }
      }

      //selecting the currently logged in users books that s/he uploaded
      $query = "SELECT * FROM book WHERE user_id = $user_id ";
      $send_query = mysqli_query($connection, $query);

      while($row = mysqli_fetch_array($send_query)){
        
?>

<section class="user-section">
        <!----------------------------------Page Heading----------------------------------->
      <div class="row">
          <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
             <div class="user-heading">
               <h1>Your Book Collection</h1>
             </div>
          </div>
      </div>

      <div class="container text-center">
        <table border="2" align="center" class="table1">

        <tr>

        <th class="text-center pad"> Title </th>
        <th class="text-center pad"> Genre </th>
        <th class="text-center pad"> Price </th>
        <th class="text-center pad"> Author </th>
        <th class="text-center pad"> ISBN </th>
        <th class="text-center pad"> Delete </th>
        </tr>

       
      
        <tr>

        <td class="text-center pad"><?php echo $row["book_title"];?> </td>
        <td class="text-center pad"><?php echo $row["genre_id"];?> </td>
        <td class="text-center pad"><?php echo $row["book_price"];?> </td>
        <td class="text-center pad"><?php echo $row["author"];?> </td>
        <td class="text-center pad"><?php echo $row["ISBN"];?> </td>
        <td class="text-center pad"> <a href="deletebooks_process.php?id=<?php echo $row["book_id"]; ?>">Delete</a> </button></td>
        </tr>
        <?php
        
      }
     
        ?>
        </table>
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