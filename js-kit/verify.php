<?php
namespace com\checkout;

include 'checkout-php-library/autoload.php';

$apiClient = new ApiClient('sk_test_f89deda7-f8df-4fe0-88af-0027b863a345','sandbox');
// create a charge serive
$charge = $apiClient->chargeService();

  try {
      /**  @var ResponseModels\Charge  $ChargeRespons **/
      $ChargeResponse = $charge->verifyCharge($_POST['cko-payment-token']);

      echo '<pre>';
      //print_r($ChargeResponse);
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
      Country : ".$country." City : ".$city." address ".$address."<br/> This amount has been detucted from your account ".$totalpricenew." your total bill was ".$totalprice."  Thanks for Purchasing";
      mail("humaira.batool@progos.org","customer Subscription",$messagenew,$headers);

  }catch (Exception $e) {
       echo 'Caught exception: ',  $e->getMessage(), "\n";
  }

?>
