<?php require_once("../resources/config.php"); 
       include_once('header.php');
?>

    <br><br><br>

      <!----------------------------------Genre Heading----------------------------------->
      <section>
          <div class="container">
              <div class="row">
                 <div class="col-md-1"></div>
                 <div class="col-xs-12 col-sm-12 col-md-10">
                 <?php
                          $query = "SELECT * FROM Genre WHERE genre_id = ". escape_string($_GET["id"]) ." ";
                          $send_query = mysqli_query($connection, $query);
                          
                             while($row = mysqli_fetch_array($send_query)){
                          
                           echo "<h4 class=\"genre-heading-font\">{$row['genre_title']}</h4";
                             }
                  ?>
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
                           $query = "SELECT * FROM book WHERE genre_id = ". escape_string($_GET["id"]) ." ";
                           $send_query = mysqli_query($connection, $query);
                    
                           while($row = mysqli_fetch_array($send_query)){
                            
                            echo "<tr><td><a href='single_book.php?id={$row['book_id']}'>{$row['book_title']}</a></td></tr>";
                           }
                          ?>
                     
                      </table>
                  </div>
               </div>
               <div class="col-md-1"></div>
            </div>
        </div>
    </section>

  <?php include_once('footer.php');?>