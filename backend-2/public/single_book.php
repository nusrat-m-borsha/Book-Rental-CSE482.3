<?php require_once("../resources/config.php");
      include_once('header.php');
?>


    <section>
        <div class="container">
            <div class="row">
               <!----------------------------------Image and Cart Button----------------------------------->
                <div class="col-xl-6 col-md-6 col-sm-12">
                   <div class="single-book-img">
                   <?php
                          $query = "SELECT * FROM book WHERE book_id = ". escape_string($_GET["id"]) ." ";
                          $send_query = mysqli_query($connection, $query);

                          while($row = mysqli_fetch_array($send_query)){
                          
                            echo $row['book_image'];
                          
                        
                   echo "</div>";
                   echo "<div class=\"cart-button\">";
                     
                       echo "<a class=\"btn btn-default\" href='cart.php?add={$row['book_id']}' role=\"button\">Add To Cart</a>";
                   echo "</div>";
                 echo "</div>";
                          }
                ?>
                <!----------------------------------Book Details----------------------------------->
                <div class="col-xl-6 col-md-6 col-sm-12">
                  <div class="book-info">
                  <?php
                          $query = "SELECT * FROM book WHERE book_id = ". escape_string($_GET["id"]) ." ";
                          $send_query = mysqli_query($connection, $query);

                          while($row = mysqli_fetch_array($send_query)){
                            
                            echo "<h3>Book Description</h3>";
                            echo "<p>{$row['book_description']}</p>";
                            echo "<h5>Book Details</h5>";
                            echo "<h6>Title: &nbsp &nbsp{$row['book_title']}</h6>";
                            echo "<h6>ISBN:   &nbsp &nbsp{$row['ISBN']}</h6>";
                            echo "<h6>Author:   &nbsp &nbsp{$row['author']}</h6>";
                            echo "<h6>Price:   &nbsp &nbspTK.{$row['book_price']}</h6>";
                          }
                          ?>
                  </div>
                </div>
            </div>
        </div>
    </section>
  </div>

<?php include_once('footer.php');?>
