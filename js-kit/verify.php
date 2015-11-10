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
      print_r($ChargeResponse);
  }catch (Exception $e) {
       echo 'Caught exception: ',  $e->getMessage(), "\n";
  }

?>
