<?php require_once("../resources/config.php"); 
    include_once('header.php');
?>

     <!----------------------------------Book Collection----------------------------------->

<section class="user-section">
        <!----------------------------------Page Heading----------------------------------->
      <div class="container">  
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-sm-10 col-lg-10 col-md-10">
               <div class="user-heading">
                 <h2>Your Borrowed Books</h2>
               </div>
              <div class="col-md-1"></div>
            </div>
        </div>
      </div>
       <!----------------------------------Homepage Button and User Options----------------------------------->
  </section>

      <div class="container text-center">
        <table border="2" align="center" class="table1 col-xs-10 col-sm-10 col-md-8"">


        <tr>

        <th class="text-center pad"> Title </th>
        <th class="text-center pad"> Genre </th>
        <th class="text-center pad"> Price </th>
        <th class="text-center pad"> Author </th>
        <th class="text-center pad"> ISBN </th>
        <th class="text-center pad"> Delete </th>
        </tr>

       <?php
       
     
      $user_id = get_user_id_session($_SESSION['username']);
      $book_ids = get_user_orders(($user_id));
      foreach($book_ids as $book_id){
      $send_query=book_query($book_id);

      while($row = mysqli_fetch_array($send_query)){    
?>
      
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
    }
     
        ?>
        </table>
    </div>
  
<div class="gap"></div>


     <!----------------------------------Footer----------------------------------->
        
        
  <?php include_once('footer.php');?>