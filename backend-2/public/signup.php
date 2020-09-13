<?php require_once("../resources/config.php"); 
      include_once('header.php');
      include_once('signin_process.php');
?>
<section class="user-section">
        <!----------------------------------Page Heading----------------------------------->
      <div class="container">  
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-sm-10 col-lg-10 col-md-10">
               <div class="user-heading">
                 <h2>Sign Up</h2>
               </div>
              <div class="col-md-1"></div>
            </div>
        </div>
      </div>
       
  </section>


<div class="col-xs-8 col-sm-8 col-md-5 offset-md-3 mx-auto gap">
                    <span class="anchor" id="add_books"></span>

                    <!-- form card register -->
                    <div class="card card-outline-secondary">
                        <div class="card-body">
                            <form class="form" role="form" action="add_books_process.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="inputName">Username</label>
                                    <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputName">Full name</label>
                                    <input class="form-control" type="text" name="full_name">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Email</label>
                                    <input class="form-control" type="email" name="email" value="<?php echo $email; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Password</label>
                                    <input class="form-control" type="password" name="password_1">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Confirm Password</label>
                                    <input class="form-control" type="password" name="password_2">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">City</label>
                                    <input class="form-control" type="text" name="city">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Address</label>
                                    <input class="form-control" type="text" name="address">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Phone number</label>
                                    <input class="form-control" type="text" name="number">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Profile Photo</label>
                                    <input type="file" name="profile_image" id="profile_image">
                                </div>
                                
                                <div class="form-group text-center">
                                    <button type="submit" value="Register" name="register" class="btn btn-success btn-lg">Register</button>
                                </div>
                                <p>
									Already a member? <a href="login.php">Login</a>
								</p>
                            </form>
                        </div>
                    </div>
                    <!-- /form card register -->

                </div>

                <div class="gap"></div>


        
  <?php include_once('footer.php');?>

</body>
</html>