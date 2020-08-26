
<?php require_once("../resources/config.php"); 
    include_once('header.php');
?>


    <!----------------------------------Below Navbar----------------------------------->
<div class="container text-center ">
	<div class="greeting">
	<h1>Welcome Bibliophiles!</h1>
	<h5>The shelves are all booked up for you!</h5>
	</div>
</div>
	<!----------------------------------Search Container------------------------------->
<div class="container">
  <div class="row">
		<div class="input-group mb-3">
		  <input type="text" class="form-control" placeholder="Search">
		  <div class="input-group-append">
		    <button class="btn btn-success" type="submit">Search</button>
		  </div>
		</div>	
  </div>
</div>
	<!----------------------------------Books------------------------------------------>

       

<div class="container"> <!-- Book images -->

  <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Latest Collections</h1>

  <hr class="mt-2 mb-5">

  <div class="row text-center text-lg-left">

  	<?php
    $sql = "SELECT book_id, book_image, book_title, author, ISBN FROM book";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
	?>

	<?php while($row = mysqli_fetch_assoc($result))
        {
        ?>


	    <div class="col-lg-3 col-md-4 col-6">
	      <?php echo "<a href='single_book.php?id={$row['book_id']}' class=\"d-block mb-4 h-100 text-center\">"; ?>
	            <?php echo '<img src="data:image;base64,'.base64_encode($row['book_image']).'" alt="Image" style="width:200px; height:250px;">'; ?>
	            <p class="text-center book-title"><strong><?php echo $row["book_title"];?> </strong></p>
	          </a>
	    </div>

    <?php
    }
    }
    else
    echo "<center>No books found in your collection </center>" ;
    ?>
    

  </div>

</div>


	<!----------------------------------Footer----------------------------------------->

</body>



  <?php include_once('footer.php');?>
</html>


