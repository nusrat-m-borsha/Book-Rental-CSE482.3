
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
	  <form>
		<div class="input-group mb-3">
		<input type="text" name="search" id="search" autocomplete="off" placeholder="search book name here....">
		  <div class="input-group-append">
			<button class="btn btn-success" type="submit">Search</button><br>
		  </div>
		</div>
       </form>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
       $("#search").keyup(function(){
          var query = $(this).val();
          if (query != "") {
            $.ajax({
              url: 'ajax_search.php',
              method: 'POST',
              data: {query:query},
              success: function(data){
 
                $('#output').html(data);
                $('#output').css('display', 'block');
 
                $("#search").focusout(function(){
                    $('#output').css('display', 'none');
                });
                $("#search").focusin(function(){
                    $('#output').css('display', 'block');
                });
              }
            });
          } else {
          $('#output').css('display', 'none');
        }
      });
    });
  </script>

	<!----------------------------------Books------------------------------------------>

       

<div class="container"> <!-- Book images -->

  <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Latest Collections</h1>

  <hr class="mt-2 mb-5">

  <div class="row text-center text-lg-left">
  <div id="output"></div>
  <?php require_once("ajax_search.php"); 
    ?>

  </div>

</div>


	<!----------------------------------Footer----------------------------------------->

</body>



  <?php include_once('footer.php');?>
</html>


