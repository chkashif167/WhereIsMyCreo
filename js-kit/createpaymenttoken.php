<?php
namespace  com\checkout ;
include 'checkout-php-library/autoload.php';


$apiClient = new ApiClient('sk_103764da-6f8b-443d-8bef-66454522b6b0','live');
//create an instance of a token service
$tokenService = $apiClient->tokenService();
//initializing the request models
$tokenPayload = new ApiServices\Tokens\RequestModels\PaymentTokenCreate();
$metaData = array('key'=>'value');

$product0 = new ApiServices\SharedModels\Product();
$product1 = new ApiServices\SharedModels\Product();
$product2 = new ApiServices\SharedModels\Product();
//initializing models to generate payload
$shippingDetails = new ApiServices\SharedModels\Address();
$phone = new  ApiServices\SharedModels\Phone();

$product0->setName($subscriptions);
$product0->setDescription('a4 white copy paper');
$product0->setQuantity($qty);
//$product0->setShippingCost(10);
//$product0->setSku('ABC123');
$product0->setTrackingUrl('http://www.tracker.com');

$phone->setNumber($mobile);
$phone->setCountryCode("44");

$shippingDetails->setAddressLine1($address);
//$shippingDetails->setAddressLine2('Apt 33');
//$shippingDetails->setPostcode('N16 2BR');
$shippingDetails->setCountry('GB');
$shippingDetails->setCity($city);
$shippingDetails->setPhone($phone);

$tokenPayload->setTrackId("trak01254");
$tokenPayload->setUdf1("test");

$products = array($product0);
foreach($products as $id => $product){
  $tokenPayload->setProducts($product);
}
$tokenPayload->setCurrency("AED");
$tokenPayload->setAutoCapture("Y");
$tokenPayload->setAutoCapTime(0.0);
$tokenPayload->setValue("100");
$tokenPayload->setCustomerIp("88.216.3.135");
$tokenPayload->setDescription("test");
$tokenPayload->setEmail("test@test.com");
$tokenPayload->setShippingDetails($shippingDetails);
$tokenPayload->setMetadata($metaData);


try {
/** @var ResponseModels\PaymentToken $paymentToken  **/
    $paymentToken = $tokenService->createPaymentToken($tokenPayload);

}catch (Exception $e) {
     echo 'Caught exception: ',  $e->getMessage(), "\n";
}