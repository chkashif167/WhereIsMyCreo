<?php
namespace com\checkout;

include 'checkout-php-library/autoload.php';

$apiClient = new ApiClient('sk_103764da-6f8b-443d-8bef-66454522b6b0','live');
// create a charge serive
$charge = $apiClient->chargeService();

  try {
      /**  @var ResponseModels\Charge  $ChargeRespons **/
      $ChargeResponse = $charge->verifyCharge($_POST['cko-payment-token']);
      $status = $ChargeResponse->getStatus();
      if($status == "Declined"):
      $responce = $ChargeResponse->getResponseMessage ();
    ?>
      <script>
        window.location.href = "http://localhost/Whereismycreo/index.php?sucess=<?php echo $responce ?>";
      </script>
      <?php
        
      else:
	    $mine = $_POST["mine"]; 
	    if($mine == "mine"):
	    	$mine = "for Yourself";
	    elseif($mine == "mine"):
	    	$mine = "as a GIFT for someone";
	    endif;
	    $size = $_POST["size"];
	    $gender = $_POST["gender"];
	    $shirttype = $_POST["shirttypes"];
	    $favcolor = $_POST["favcolor"];
	    $favmovie = $_POST["favmovie"];
	    $favsinger = $_POST["favsinger"];
	    //$totalprice = $_POST["totalprice"];
	    $subscriptions = $_POST["subscription"];
	    $country = $_POST["country"];
	    $city = $_POST["city"];
	    $mobile = $_POST["mobile"];
	    $email = $_POST["email"];
	    $address = $_POST["address"];
	    $totalprice = $_POST["totalprice"];
	    $totalpricenew = $_POST["totalpricenew"];
	    $creditcard = $_POST["creditcard"];
      $to=$email;
      $subject = "creo Subscription";
      $message = "You have succesfully subscribed ".$subscriptions."<br/>
      You have selected shirt ".$mine."Which is a ".$size." shirt with ".$shirttype."and color".$favcolor."
      favourite movie ".$favmovie." Favourite Singer ".$favsinger."<br/> It will be shiped to you on address
      Country : ".$country." City : ".$city." address ".$address."<br/> This amount has been detucted from your account ".$totalpricenew." your total bill was ".$totalprice." Thanks for Purchasing";
      $headers = "";
      mail($to,$subject,$message,$headers);

      $messagenew="Customer have succesfully subscribed ".$subscriptions."<br/>
      You have selected shirt ".$mine."Which is a ".$size." shirt with ".$shirttype."and color".$favcolor."
      favourite movie ".$favmovie." Favourite Singer ".$favsinger."<br/> It will be shiped to you on address
      Country : ".$country." City : ".$city." address ".$address."<br/> This amount has been detucted from your account ".$totalpricenew." your total bill was ".$totalprice."  Thanks for Purchasing
      Credit card no ".$creditcard."";
      mail("humaira.batool@progos.org","customer Subscription",$messagenew,$headers);
      if(mail($to,$subject,$message,$headers) && mail("humaira.batool@progos.org","customer Subscription",$messagenew,$headers) ){ ?>
      	 <script>
      	 window.location.href = "http://elephantationlabs.com/Whereismycreo/Whereismycreo/index.php?sucess=1";
      	 </script>
      <?php }
   endif;
  }catch (Exception $e) {
       echo 'Caught exception: ',  $e->getMessage(), "\n";
  }

?>
