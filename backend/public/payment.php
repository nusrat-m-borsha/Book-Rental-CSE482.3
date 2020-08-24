<?php require_once("../resources/config.php"); ?>

<?php

//echo $_SESSION['total_price'];
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media_queries.css">
    <script src="js/jquery-1.8.3.min.js"></script>
    <script id = "myScript" src="https://scripts.sandbox.bka.sh/versions/1.2.0-beta/checkout/bKash-checkout-sandbox.js"></script>
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
                <a class="nav-link" href="#">My Cart</a>
              </li>
            </ul>
            </div>
        </nav>
    </header>

    <section class="payment-section">
        <!----------------------------------Page Heading----------------------------------->
        <div class="row">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
               <div class="cart-heading">
                 <h1>My Cart</h1>
               </div>
            </div>
        </div>
       <!----------------------------------Item Info Table----------------------------------->
       <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12">
        <table class="payment-info-table">

           <?php

                if(isset($_GET['add'])){
                $query = "SELECT * FROM book WHERE book_id=". escape_string($_GET["add"]) ." ";
                $send_query = mysqli_query($connection, $query);

                while($row = mysqli_fetch_array($send_query)){
                  
                    if($row['book_quantity']!= $_SESSION['book_'. $_GET['add']]){

                      $_SESSION['book_'. $_GET['add'] ]+=1;
                    }
                    else{
                     
                    }
                }}

                /*if(isset($_GET['remove'])){
                  $_SESSION['book_'.$_GET['remove']]--;
                  if( $_SESSION['book_'.$_GET['remove']]<1){
                          redirect("payment.php");
                  }
                  else{
                    redirect("payment.php");
                  }
                }*/
    
                if(isset($_GET['delete'])){
                  $_SESSION['book_'.$_GET['delete']]='0';
                  unset($_SESSION['total_price']);
                  unset($_SESSION['quantity']);
                  redirect("payment.php");
                }

                function cart(){
                  $quantity =0;
                  foreach($_SESSION as $name => $value){
                  $total = 0;
                  if($value>0){
                  if(substr($name,0,5)== "book_"){

                  $length = strlen((int)$name - 5);
                  $id = substr($name, 5, $length);
                  $quantity += (int)$value;
                  global $connection;
                  $query = "SELECT * FROM book WHERE book_id=".escape_string($id). " ";
                  $send_query = mysqli_query($connection, $query);
  
                  while($row = mysqli_fetch_array($send_query)){
                   
                   $sub_total =((int)$row['book_price']*(int)$value);
                   $quantity += $quantity;
                   echo "<tr>";
                   echo "<td>{$row['book_title']}</td>";
                   echo "<td>{$row['book_price']}</td>";
                   echo "<td>{$value}</td>";
                   echo "<td><a href=\"payment.php?delete={$row['book_id']}\">Remove</a></td>";
                   echo "</tr>";

                   $total +=$sub_total;
                  
                  }

                  $_SESSION['total_price']=(int)($total +=$sub_total);
                  $_SESSION['quantity']=(int)$value;
                }
              }
            }
          }
           ?>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
               
            </tr>
           <?php cart(); ?>
            <tr>
                <td colspan="3">Delivery cost</td>
                <td>50</td>
            </tr>
            <tr>
                <td colspan="3">Total cost</td>
                <td>
                  <?php

                  echo isset($_SESSION['total_price']) ? $_SESSION['total_price'] : $_SESSION['total_price']="0";
                  ?>
                </td>
            </tr>
        </table>
    </div>
    </div>



     <!----------------------------------Payment Buttons----------------------------------->
          <div class="cash-pay-button">
            <a class="btn btn-default" href="#" role="button">Cash On Delivery</a>
          </div>
          <div class="bkash-button">
            <a class="btn btn-default" href="#" role="button">Pay through bkash</a>
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

<!-----------------------Bkash-------------------->

<script type="text/javascript">
 
    var accessToken='';
    $(document).ready(function(){
        $.ajax({
            url: "token.php",
            type: 'POST',
            contentType: 'application/json',
            success: function (data) {
                console.log('got data from token  ..');
				console.log(JSON.stringify(data));
				
                accessToken=JSON.stringify(data);
            },
			error: function(){
						console.log('error');
                        
            }
        });

        var paymentConfig={
            createCheckoutURL:"createpayment.php",
            executeCheckoutURL:"executepayment.php",
        };

		
        var paymentRequest;
        paymentRequest = { amount:'105',intent:'sale'};
		console.log(JSON.stringify(paymentRequest));

        bKash.init({
            paymentMode: 'checkout',
            paymentRequest: paymentRequest,
            createRequest: function(request){
                console.log('=> createRequest (request) :: ');
                console.log(request);
                
                $.ajax({
                    url: paymentConfig.createCheckoutURL+"?amount="+paymentRequest.amount,
                    type:'GET',
                    contentType: 'application/json',
                    success: function(data) {
                        console.log('got data from create  ..');
                        console.log('data ::=>');
                        console.log(JSON.stringify(data));
                        
                        var obj = JSON.parse(data);
                        
                        if(data && obj.paymentID != null){
                            paymentID = obj.paymentID;
                            bKash.create().onSuccess(obj);
                        }
                        else {
							console.log('error');
                            bKash.create().onError();
                        }
                    },
                    error: function(){
						console.log('error');
                        bKash.create().onError();
                    }
                });
            },
            
            executeRequestOnAuthorization: function(){
                console.log('=> executeRequestOnAuthorization');
                $.ajax({
                    url: paymentConfig.executeCheckoutURL+"?paymentID="+paymentID,
                    type: 'GET',
                    contentType:'application/json',
                    success: function(data){
                        console.log('got data from execute  ..');
                        console.log('data ::=>');
                        console.log(JSON.stringify(data));
                        
                        data = JSON.parse(data);
                        if(data && data.paymentID != null){
                            alert('[SUCCESS] data : ' + JSON.stringify(data));
                            window.location.href = "success.html";                              
                        }
                        else {
                            bKash.execute().onError();
                        }
                    },
                    error: function(){
                        bKash.execute().onError();
                    }
                });
            }
        });
        
		console.log("Right after init ");
    
        
    });
	
	function callReconfigure(val){
        bKash.reconfigure(val);
    }

    function clickPayButton(){
        $("#bKash_button").trigger('click');
    }


</script>
</body>
</html>