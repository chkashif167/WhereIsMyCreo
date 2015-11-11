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
    //echo $subscriptions;
    //echo $subscriptions;
    $gifts = $_POST["gifts"];
    if (strcmp($subscriptions, "1 T-Shirt/Month") == 0) :
      $qty = 1;
      $totalpricenew = $totalprice;
    elseif(strcmp($subscriptions, "2 T-Shirt/Month") == 0):
      $qty=2;
      $totalpricenew = $totalprice;
    elseif(strcmp($subscriptions, "3 T-Shirt/Month") == 0):
      $qty=3;
      $totalpricenew = $totalprice;
    elseif(strcmp($subscriptions, "1 T-Shirt/3 Months") == 0):
      $qty = 1;
      $totalpricenew = intval($totalprice/3);
    elseif(strcmp($subscriptions, "1 T-Shirt/6 Months") == 0):
      $qty = 1;
      $totalpricenew = intval($totalprice/6);
    elseif(strcmp($subscriptions, "1 T-Shirt/9 Months") == 0):
      $qty = 1;
      $totalpricenew = intval($totalprice/9);
    elseif(strcmp($subscriptions, "1 T-Shirt/1 Year") == 0):
      $qty = 1;
      $totalpricenew = intval($totalprice/12);
    endif;
    $count = strlen($totalpricenew);
    if($count == 2):
    $totalpricenew = str_pad($totalpricenew,4,"0");
    elseif($count == 3):
    $totalpricenew = str_pad($totalpricenew,5,"0");
    elseif($count == 4):
    $totalpricenew = str_pad($totalpricenew,6,"0");
    endif;
    //echo $totalpricenew; 
    $country = $_POST["country"];
    $city = $_POST["city"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $address = $_POST["address"];



?>

<?php include 'createpaymenttoken.php';?>
<?php $token = $paymentToken->getId();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/jquery-1.11.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/style.css">
<script type="text/javascript" src="../js/fontsmoothie.min.js"></script>
<script type="text/javascript" src="../basic-jquery-validation-form/jquery.validate.min.js"></script>
<title>Where Is My Creo | Checkout</title>
</head>
<body>
<header id="header" class="header">
<div class="container">
<div class="logo col-sm-2"><a href="index.php"><img src="../images/logo.png"></a></div>
<div class="col-sm-10 paddingzero">
  <ul class="main-menu">
  <li><a href="../buytshirts.php">Buy T-Shirts</a></li>
  <li><a href="#">How Does This Work</a></li>
  <li><a href="../faq.php">Faq/Contact</a></li>
  <li class="freetshirt"><a>Get Free T-Shirt</a>
  <div class="freeshirt-container">
    <h4>365 Days of Awesomeness.</h4>
    <p>Hop on the freebie bandwagon. Sign up for 1 year and we will sneak in an extra t-shirt of our choice with your first delivery.   Woot Woot!</p>
    <a href="#" class="btn-subscribe">Subscribe Now</a>
  </div>
  </li>
  <li class="mini-cart" style="display:none"><a href="cart.php" >My Cart</a></li>
  </ul>
</div>
</div>
</header><!-- /header -->
<div class="big-heading bgc1" align="center"><h1>Checkout</h1></div>
<div class="container checkoutpage">

  <?php if(@$showError): ?>
  <div class="lightbox error">
    <div class="content">
    <?php echo $errorMessage ?>
    </div> 
  <?php endif; ?>

<div id="customWidget" class="col-sm-8">
<div id="colorSelector"><div style="background-color: #0000ff"></div></div>
  <form class="checkout form-horizontal" id="myForm" method="post" action="#" >

    <div class="checkout-header">
      <h1 class="checkout-title">Checkout</h1>
    </div>
    <p>
      <input type="text" class="checkout-input checkout-email form-control" name ="cko-cc-email" placeholder="Your email address" autofocus data-checkout="email-address" value="" required="email" />
    </p>
    <p>
      <input type="text" class="checkout-input checkout-name form-control" placeholder="Your name" autofocus data-checkout="card-name" value="" required />
    </p>
    <p>
      <input type="text" class="checkout-input checkout-card form-control" placeholder="Credit card number" data-checkout="card-number" id="card-number" value="" required />
    </p>
      <p>
      <label for="">Month:</label>
            <select id="expiryMonth" class=" form-control" required>
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

          <label for="">Year: </label>
          <select id="expiryYear" class=" form-control" required>
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
          <input type="hidden" id="expiry-month" class="checkout-input checkout-exp  form-control" data-checkout="expiry-month" value="" >
          <input type="hidden" id="expiry-year" class="checkout-input checkout-exp  form-control" data-checkout="expiry-year" value="">
      </p>
      <p><input type="text" class="checkout-input checkout-cvc  form-control" required placeholder="CVC" data-checkout="cvv" value="" id="cvv"></p>
    <p>
      <button type="submit" value="Purchase" class="checkout-btn btn-checkout">Purchase</button>
    </p>
  </form>
  <div id="success">
  </div>
  <script type="text/javascript">

      $(function(){
        
        	var publicKey = "pk_6364ccc0-f2c8-48c6-acde-1ed641ff6042";
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
        <input type="hidden" id="size" name="size" value="<?php echo $size ?>">
          <input type="hidden" id="gender" name="gender" value="<?php echo $gender ?>">
          <input type="hidden" id="favcolor" name="favcolor" value="<?php echo $favcolor ?>">
          <input type="hidden" id="favmovie" name="favmovie" value="<?php echo $favmovie ?>">
          <input type="hidden" id="favsinger" name="favsinger" value="<?php echo $favsinger ?>">
          <input type="hidden" id="mine" name="mine" value="<?php echo $mine ?>">
          <input type="hidden" id="shirttypes" name="shirttypes" value="<?php echo $shirttype ?>">
          <input type="hidden" id="subscription" name="subscription" value="<?php echo $subscriptions ?>">
          <input type="hidden" id="country" name="country" value="<?php echo $country ?>">
          <input type="hidden" id="city" name="city" value="<?php echo $city ?>">
          <input type="hidden" id="mobile" name="mobile" value="<?php echo $mobile ?>">
          <input type="hidden" id="email" name="email" value="<?php echo $email ?>">
          <input type="hidden" id="address" name="address" value="<?php echo $address ?>">
          <input type="hidden" id="quantity" name="quantity" value="<?php echo $qty ?>">
          <input type="hidden" id="totalprice" name="totalprice" value="<?php echo $totalprice ?>">
          <input type="hidden" id="totalpricenew" name="totalpricenew" value="<?php echo $totalpricenew ?>">
          <label class="credit-card"></label>
          <label class="cvc"></label>
          <label class="expirydate"></label>
          <script type="javascript">
          $('#myForm input[type="text"]').change(function () {
              var creditcard = $('#card-number').val();
              $(".credit-card").html("<input type='hidden' id='creditcard' name='creditcard' value='"+creditcard+"'>");
              var cvv = $('#cvv').val();
              $(".cvc").html("<input type='hidden' id='cvv' name='cvv' value='"+cvv+"'>")

            });
          </script>
     </form>
</div></div>

<footer class="site-footer">
<?php include '../includes/footer.php'; ?>
</footer>
</body>
</html>