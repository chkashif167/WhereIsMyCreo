<?php


namespace  com\checkout ;
include 'checkout-php-library/autoload.php';


$apiClient = new ApiClient('sk_test_f89deda7-f8df-4fe0-88af-0027b863a345','sandbox');
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

$product0->setName('Demo product 1');
$product0->setDescription('a4 white copy paper');
$product0->setQuantity(1);
$product0->setShippingCost(10);
$product0->setSku('ABC123');
$product0->setTrackingUrl('http://www.tracker.com');

$product1->setName('Demo product 2');
$product1->setDescription('a4 white copy paper');
$product1->setQuantity(1);
$product1->setShippingCost(10);
$product1->setSku('ABC1234');


$product2->setName('Demo product 3');
$product2->setDescription('a4 white copy paper');
$product2->setQuantity(1);
$product2->setShippingCost(10);
$product2->setSku('ABC1235');



$phone->setNumber("203 583 44 55");
$phone->setCountryCode("44");

$shippingDetails->setAddressLine1('1 Glading Fields');
$shippingDetails->setAddressLine2('Apt 33');
$shippingDetails->setPostcode('N16 2BR');
$shippingDetails->setCountry('GB');
$shippingDetails->setCity('London');
$shippingDetails->setPhone($phone);

$tokenPayload->setTrackId("trak01254");
$tokenPayload->setUdf1("test");

$products = array($product0,$product1,$product2);
foreach($products as $id => $product){
  $tokenPayload->setProducts($product);
}
$tokenPayload->setCurrency("USD");
$tokenPayload->setAutoCapture("Y");
$tokenPayload->setAutoCapTime(0.0);
$tokenPayload->setValue("500");
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