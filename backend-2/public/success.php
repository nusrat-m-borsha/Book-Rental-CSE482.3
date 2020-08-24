<?php
 include_once('header.php');
$val_id=urlencode($_POST['val_id']);
$store_id=urlencode("bookr5f41517d60625");
$store_passwd=urlencode("bookr5f41517d60625@ssl");
$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=".$val_id."&store_id=".$store_id."&store_passwd=".$store_passwd."&v=1&format=json");

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $requested_url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

$result = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle)))
{

	# TO CONVERT AS ARRAY
	# $result = json_decode($result, true);
	# $status = $result['status'];

	# TO CONVERT AS OBJECT
	$result = json_decode($result);

	# TRANSACTION INFO
	$status = $result->status;
	$tran_date = $result->tran_date;
	$tran_id = $result->tran_id;
	$val_id = $result->val_id;
	$amount = $result->amount;
	$store_amount = $result->store_amount;
	$bank_tran_id = $result->bank_tran_id;
	$card_type = $result->card_type;

	# EMI INFO
	$emi_instalment = $result->emi_instalment;
	$emi_amount = $result->emi_amount;
	$emi_description = $result->emi_description;
	$emi_issuer = $result->emi_issuer;

	# ISSUER INFO
	$card_no = $result->card_no;
	$card_issuer = $result->card_issuer;
	$card_brand = $result->card_brand;
	$card_issuer_country = $result->card_issuer_country;
	$card_issuer_country_code = $result->card_issuer_country_code;

	# API AUTHENTICATION
	$APIConnect = $result->APIConnect;
	$validated_on = $result->validated_on;
    $gw_version = $result->gw_version;
    
    //echo $status. " " . $tran_date . " " . $tran_id . " " .  $card_type;

} else {

	echo "Failed to connect with SSLCOMMERZ";
}

?>

 <!---------------------------------- Heading----------------------------------->
 <br><br><br>
 <section>
          <div class="container">
              <div class="row">
                 <div class="col-md-1"></div>
                 <div class="col-xs-12 col-sm-12 col-md-10">
                     <h4 class="genre-heading-font">Transaction Information</h4>
                 </div>
                 <div class="col-md-1"></div>
              </div>
          </div>
      </section>

      <!----------------------------------List Table----------------------------------->
      <section>
        <div class="container">
            <div class="row">
               <div class="col-md-1"></div>
               <div class="col-xs-12 col-sm-12 col-md-10">
                  <div class="genre-list-table">
                      <table>
                      <tr>
		                  <td colspan="1">Status</td>
						  <td colspan="1"><?php echo $status ?></td>
					  </tr>
                      <tr>
					      <td colspan="1">Transaction Date</td>
						  <td colspan="1"><?php echo $tran_date ?></td>
					  </tr>
					  <tr>
					      <td colspan="1">Transaction ID</td>
						  <td><?php echo $tran_id ?></td>
					  </tr>
					  <tr>
					      <td colspan="1">Card Type</td>
						  <td><?php echo  $card_type ?></td>
					  </tr>
                      </table>
                  </div>
               </div>
               <div class="col-md-1"></div>
            </div>
        </div>
	</section>
	<br><br><br><br><br>
	
	<?php include_once('footer.php');?>