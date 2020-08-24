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

  <?php include_once('footer.php');?>