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
        // console.log(getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1]);
        // exit;
        window.location.href = "http://elephantationlabs.com/Whereismycreo/Whereismycreo/index.php?sucess=<?php echo $responce ?>";
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
      $header  = "MIME-Version: 1.0\r\n";
      $header .= "Content-type: text/html; charset: utf8\r\n";
      $headers .= 'From: info@creoroom.com' . "\r\n"; 

      $message = "<p>You have successfully subscribed to <b><?php echo $subscriptions; ?></b></p><h3>Detail:</h3><p>You have selected shirt for <b><?php echo $mine; ?></b>Which is a <b><?php echo $size; ?></b> shirt with <b><?php echo $shirttype; ?></b> and color is <b><?php echo $favcolor; ?></b><br /><b>Favourite Movie:</b> <?php echo $favmovie; ?><br /><b>Favourite Singer</b> <?php echo $favsinger; ?></p><br /><p>It will be shiped to you on address<br /><b>Country:</b> <?php echo $country; ?><br /><b>City:</b> <?php echo $city; ?><br /><b>Address:<b> <?php echo $address; ?></p><p>This amount has been detucted from your account <?php echo $totalpricenew; ?>Your total bill is <b><?php echo $totalprice; ?></b>. Thanks for Purchasing</p>";

      mail($to,$subject,$message,$headers);

      $messagenew="<p>Customer have succesfully subscribed <b><?php echo $subscriptions; ?></b></p><h3>Detail:</h3><p>You have selected shirt <b><?php echo $mine; ?></b> Which is a <b><?php echo $size; ?></b> shirt with <b><?php echo $shirttype; ?></b> and color is <b><?php echo $favcolor; ?></b><br /><b>Favourite Movie:</b> <?php echo $favmovie; ?><br /><b>Favourite Singer:</b><?php echo $favsinger; ?></p><p>It will be shiped to this address<br /><b>Country:</b> <?php echo $country; ?><br /><b>City:</b><?php echo $city; ?><br /><b>Address:</b> <?php echo $address; ?></p><p>This amount has been detucted from his account <?php echo $totalpricenew; ?> His total bill is <b><?php echo $totalprice; ?></b> Thanks for Purchasing</p>";

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