<?php
    $mine = $_POST["mine"]; 
    $size = $_POST["size"];
    $gender = $_POST["gender"];
    $shirttype = $_POST["shirtypes"];
    $favcolor = $_POST["color"];
    $favmovie = $_POST["favmovie"];
    $favsinger = $_POST["favsinger"];
    $totalprice = $_POST["totalprice"];
    $subscriptions = $_POST["subscriptions"];
    $gifts = $_POST["gifts"];
    if($subscriptions == 89):
      $qty = 1;
    elseif($subscriptions == 82):
      $qty=2;
    elseif($subscriptions == 75):
      $qty=3;
    else:
      $qty = 1;
    endif;
?>

<?php include 'createpaymenttoken.php';?>
<?php $token = $paymentToken->getId();?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Checkout Form</title>
  <!--<link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/colorpicker.css" type="text/css" />
    <link rel="stylesheet" media="screen" type="text/css" href="css/layout.css" />
    <title>ColorPicker - jQuery plugin</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/colorpicker.js"></script>
    <script type="text/javascript" src="js/eye.js"></script>
    <script type="text/javascript" src="js/utils.js"></script>
    <script type="text/javascript" src="js/layout.js?ver=1.0.2"></script> 
    <script type="text/javascript" src="js/prettyprint.js"></script>-->
</head>
<body>
  <?php if(@$showError): ?>
  <div class="lightbox error">
    <div class="content">
    <?php echo $errorMessage ?>
    </div> 
  <?php endif; ?>
</div>
<div id="customWidget">
<div id="colorSelector"><div style="background-color: #0000ff"></div></div>
  <form class="checkout" id="myForm" method="post" action="#" >

    <div class="checkout-header">
      <h1 class="checkout-title">
        Checkout
       
      </h1>
    </div>
    <p>
      <input type="text" class="checkout-input checkout-email" name ="cko-cc-email" placeholder="Your email address" autofocus data-checkout="email-address" value=""/>
    </p>
    <p>
      <input type="text" class="checkout-input checkout-name" placeholder="Your name" autofocus data-checkout="card-name" value="" />
    </p>
    <p>
      <input type="text" class="checkout-input checkout-card" placeholder="card number" data-checkout="card-number" value="">
    </p>
      <p>

          <select id="expiryMonth">
              <option value='01'>01</option>
              <option value='02'>02</option>
              <option value='03'>03</option>
              <option value='04'>04</option>
              <option value='05'>05</option>
              <option value='06'>06</option>
              <option value='07'>07</option>
              <option value='08'>08</option>
              <option value='09'>09</option>
              <option value='10'>10</option>
              <option value='11'>11</option>
              <option value='12'>12</option>
          </select>

            /

          <select id="expiryYear">
              <option value='2015'>2015</option>
              <option value='2016'>2016</option>
              <option value='2017'>2017</option>
              <option value='2018'>2018</option>
              <option value='2019'>2019</option>
              <option value='2020'>2020</option>
              <option value='2021'>2021</option>
              <option value='2022'>2022</option>
              <option value='2023'>2023</option>
              <option value='2024'>2024</option>
              <option value='2025'>2025</option>
              <option value='2026'>2026</option>
          </select>

          <input type="hidden" id="expiry-month" class="checkout-input checkout-exp" data-checkout="expiry-month" value="">

          <input type="hidden" id="expiry-year" class="checkout-input checkout-exp" data-checkout="expiry-year" value="">

      </p>
      <p>

          <input type="text" class="checkout-input checkout-cvc" placeholder="CVC" data-checkout="cvv" value="" >
      </p>
    <p>
      <input type="submit" value="Purchase" class="checkout-btn">
    </p>
  </form>
  <div id="success">
  </div>
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  <script type="text/javascript">

      $(function(){
        
        	var publicKey = "pk_test_512fe7c8-c43c-4dbf-8961-c681b68df222";
                window.CKOConfig = {
                 debugMode : true,
                 publicKey: publicKey,
                 paymentToken: "<?php echo $token ;?>",
                 cardCharged: function(event) {

                   $('#myForm2').trigger('submit');
                 },
                 ready: function(){

                     $('#expiryMonth').change(function(){
                         var x = $(this).val();
                         $('#expiry-month').val(x);
                     });

                     $('#expiryYear').change(function(){
                         var x = $(this).val();
                         $('#expiry-year').val(x);
                     });

                    CKOAPI.monitorForm('myForm',CKOAPI.CardFormModes.CARD_CHARGE)

                 },
                 apiError: function(){
                  console.error("Error message : "+event.data['message']);
                }
               };
               CKOAPI.monitorForm('myForm',CKOAPI.CardFormModes.CARD_CHARGE); 
          });

   
    </script>
    <script  type="text/javascript" src="//sandbox.checkout.com/js/v1/checkoutkit.js" id="cko_script_tag" async data-namespace="CKOAPI" defer></script>
     <form class="" id="myForm2" method="post" action="verify.php" >
        <input type="hidden" class="cko-payment-token" name="cko-payment-token" value="<?php echo $token ;?>" >


     </form>
</body>
</html>
