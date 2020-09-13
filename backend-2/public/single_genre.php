<?php require_once("../resources/config.php"); 
       include_once('header.php');
?>



      <!----------------------------------Genre Heading----------------------------------->
      <section>
          <div class="container">
              <div class="row">
                 <div class="col-md-1"></div>
                 <div class="col-xs-12 col-sm-12 col-md-10">
                 <?php
                          $send_query=get_genre_id($_GET["id"]);
                          
                             while($row = mysqli_fetch_array($send_query)){
                          
                           echo "<h2 class=\"genre-heading-font\">{$row['genre_title']}</h2";
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
               <div class="col-md-2"></div>
               <div class="col-xs-12 col-sm-12 col-md-8">
                  <div class="genre-list-table">
                      <table>
                        <?php
                           $send_query=get_genre_of_book($_GET["id"]);
                    
                           while($row = mysqli_fetch_array($send_query)){
                            
                            echo "<tr><td><a href='single_book.php?id={$row['book_id']}'>{$row['book_title']}</a></td></tr>";
                           }
                          ?>
                     
                      </table>
                  </div>
               </div>
               <div class="col-md-2"></div>
            </div>
        </div>
    </section>

  <?php include_once('footer.php');?>