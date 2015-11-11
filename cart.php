<!DOCTYPE html>
<html>
<?php
// $giftfor = $_POST["giftmine"];
// $giftreceiver = $_POST["giftreceiver"];
// $email = $_POST["email"];
// $message = $_POST["message"];

// echo $giftfor."<br/>";
// echo $message;
?>
<head>
<?php include 'includes/header-top.php'; ?>
<title>Where Is My Creo | Cart</title>
</head>
<body>
<header id="header" class="header">
<?php include 'includes/header.php'; ?>
</header><!-- /header -->

<div class="big-heading bgc1" align="center"><h1>My Cart</h1></div>

<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST'):
$giftfor = $_POST["giftmine"];
$giftreceiver = $_POST["giftreceiver"];
$email = $_POST["email"];
$message = $_POST["message"];
$gender = $_POST["gender"];
$size   = $_POST["size"];
$shirttypes   = $_POST["shirttypes"];
$favcolor   = $_POST["favcolor"];
$favmovie   = $_POST["favMovie"];
$favsinger = $_POST["favSinger"];
$paytime = $_POST["paytype"];
$payOnce = $_POST["payOnce"];
$giftwrapping = $_POST["giftwrapping"];

?>
<div class="container cartpage">
<h3>Cool Things you picked</h3>
<table class="cart-table" width="100%">
	<thead>
	<tr><th>&nbsp;</th><th width="50%">Select</th><th align="right" style="text-align:right;">Price:</th></tr>
	</thead>
	<tbody>
	
	<tr>
	<td><h4>subscription type:</h4></td>
	<td>
	<select class ="subscription" id ="subscription">
	<?php if($payOnce == 89):?>
	<option value="89">1 T-Shirt/Month</option>
	<option value="82">2 T-Shirt/Month</option>
	<option value="75">3 T-Shirt/Month</option>
	<?php elseif($payOnce == 82): ?>
    <option value="82">2 T-Shirt/Month</option>
    <option value="89">1 T-Shirt/Month</option>
	<option value="75">3 T-Shirt/Month</option>
    <?php elseif($payOnce == 75): ?>
    <option value="75">3 T-Shirt/Month</option>
    <option value="82">2 T-Shirt/Month</option>
	<option value="89">1 T-Shirt/Month</option>
	<?php elseif($payOnce == 4): ?>
	<option value="3">1 T-Shirt/3 Months</option>
    <option value="6">1 T-Shirt/6 Months</option>
	<option value="9">1 T-Shirt/9 Months</option>
	<option value="12">1 T-Shirt/1 Year</option>
    <?php elseif($payOnce == 8): ?>
	<option value="6">1 T-Shirt/6 Months</option>
    <option value="3">1 T-Shirt/3 Months</option>
	<option value="9">1 T-Shirt/9 Months</option>
	<option value="12">1 T-Shirt/1 Year</option>
    <?php elseif($payOnce == 11): ?>
	<option value="9">1 T-Shirt/9 Months</option>
    <option value="3">1 T-Shirt/3 Months</option>
	<option value="6">1 T-Shirt/6 Months</option>
	<option value="12">1 T-Shirt/1 Year</option>
    <?php elseif($payOnce == 15): ?>
	<option value="12">1 T-Shirt/1 Year</option>
    <option value="3">1 T-Shirt/3 Months</option>
	<option value="6">1 T-Shirt/6 Months</option>
	<option value="9">1 T-Shirt/9 Months</option>
    <?php endif; ?>
	</select>
	</td>
	<td class="price" align="right"><h5>89 AED</h5></td>
	</tr>
	
	<tr>
	<td>
	<h4>subscription duration:</h4>
	<div class="date">
	<h4>start date: <span><?php echo date("Y/m/d") ?></span></h4>
	<h4>end date: <span>24-jan-2016</span></h4>
	</div>
	</td>
	<td>
	<select class="timeperiod" id="timeperiod">
	<?php if($payOnce == 89 || $payOnce == 82 || $payOnce == 75 ):?>
	<option value="">Every Month</option>
	<?php elseif($payOnce == 4): ?>
	<option value="3">3 Months</option>
	<option value="6">6 Months</option>
	<option value="9">9 Months</option>
	<option value="12">1 Year</option>
	<?php elseif($payOnce == 8): ?>
	<option value="6">6 Months</option>
	<option value="3">3 Months</option>
	<option value="9">9 Months</option>
	<option value="12">1 Year</option>
	<?php elseif($payOnce == 11): ?>
	<option value="9">9 Months</option>
	<option value="3">3 Months</option>
	<option value="6">6 Months</option>
	<option value="12">1 Year</option>
	<?php elseif($payOnce == 15): ?>
	<option value="12">1 Year</option>
	<option value="3">3 Months</option>
	<option value="6">6 Months</option>
	<option value="9">9 Months</option>
    <?php endif ?>
	</select>
	</td>
	<td class="pricenew" align="right" style="display:none"></td>
	<?php if($payOnce == 89):?>
	<td class="pricenew" align="right"><h5 id="shirtprice" data-id="89">89 AED</h5></td>
    <?php elseif($payOnce == 82):?>
    <?php  $newprice = 89 * 2; ?>
    <td class="pricenew" align="right"><h5 id="shirtprice" data-id="<?php echo $newprice ?>"><?php echo $newprice ?> AED</h5></td>
    <?php elseif($payOnce == 75):?>
    <?php  $newprice = 89 * 3; ?>
    <td class="pricenew" align="right"><h5 id="shirtprice" data-id="<?php echo $newprice ?>"><?php echo $newprice ?> AED</h5></td>
    <?php elseif($payOnce == 4):?>
    <?php  $newprice = 89 * 3; ?>
    <td class="pricenew" align="right"><h5 id="shirtprice" data-id="<?php echo $newprice ?>"><?php echo $newprice ?> AED</h5></td>
    <?php elseif($payOnce == 8):?>
    <?php  $newprice = 89 * 6; ?>
    <td class="pricenew" align="right"><h5 id="shirtprice" data-id="<?php echo $newprice ?>"><?php echo $newprice ?> AED</h5></td>
    <?php elseif($payOnce == 11):?>
    <?php  $newprice = 89 * 9; ?>
    <td class="pricenew" align="right"><h5 id="shirtprice" data-id="<?php echo $newprice ?>"><?php echo $newprice ?> AED</h5></td>
    <?php elseif($payOnce == 15):?>
    <?php  $newprice = 89 * 12; ?>
    <td class="pricenew" align="right"><h5 id="shirtprice" data-id="<?php echo $newprice ?>"><?php echo $newprice ?> AED</h5></td>
    <?php endif ?>
	</tr>

	<tr>
	<td><h4>cool wraping:</h4></td>
	<!-- <td style="display:none">
	<select class="wraping" style="display:none" id = "wrapping">
	<option value="yes">yes</option>
	<option value="no">No</option>
	</select>
	</td> -->
	
	<?php if($giftwrapping == "yes"): ?>
	<td>
	<select class="wraping" id ="wrapping">
	<option value="yes"><?php echo $giftwrapping ?></option>
	<option value="no">No</option>
	</select>
	</td>
	<?php if($payOnce == 89):?>
	<td class="giftprice" align="right"><h5 id="giftprice" data-id="5">5 AED</h5>(5 AED per month)</td>
    <?php elseif($payOnce == 82):?>
    <?php $gift = 5 * 2 ?>
    <td class="giftprice" align="right"><h5 id="giftprice" data-id="<?php echo $gift ;?>"><?php echo $gift ;?> AED</h5>(5 AED per month)</td>
    <?php elseif($payOnce == 75):?>
    <?php $gift = 5 * 3 ?>
    <td class="giftprice" align="right"><h5 id="giftprice" data-id="<?php echo $gift ;?>"><?php echo $gift ;?> AED</h5>(5 AED per month)</td>
    <?php elseif($payOnce == 4):?>
    <?php $gift = 5 * 3 ?>
    <td class="giftprice" align="right"><h5 id="giftprice" data-id="<?php echo $gift ;?>"><?php echo $gift ;?> AED</h5>(5 AED per month)</td>
    <?php elseif($payOnce == 8):?>
    <?php $gift = 5 * 6 ?>
    <td class="giftprice" align="right"><h5 id="giftprice" data-id="<?php echo $gift ;?>"><?php echo $gift ;?> AED</h5>(5 AED per month)</td>
    <?php elseif($payOnce == 11):?>
    <?php $gift = 5 * 9 ?>
    <td class="giftprice" align="right"><h5 id="giftprice" data-id="<?php echo $gift ;?>"><?php echo $gift ;?> AED</h5>(5 AED per month)</td>
    <?php elseif($payOnce == 15):?>
    <?php $gift = 5 * 12 ?>
    <td class="giftprice" align="right"><h5 id="giftprice" data-id="<?php echo $gift ;?>"><?php echo $gift ;?> AED</h5>(5 AED per month)</td>
    <?php endif ?>
	</td>
    <?php elseif($giftwrapping == "no"): ?>
	<td>
	<select class="wraping" id ="wrapping">
	<option value="no"><?php echo $giftwrapping ?></option>
	<option value="yes">Yes</option>	
    </select>	
	</td>
	<td class="giftprice" align="right"><h5 id="giftprice" data-id="0">0 AED</h5></td>
	<?php endif; ?>
	<td class="giftprice" align="right" style="display:none"></td>
	</tr>

	<tr>
	<td><h4>Shipping:</h4></td>
	<td>
	<select>
	<option value="">Uae</option>
	</select>
	</td>
	<?php if($payOnce == 89 || $payOnce == 75 || $payOnce == 82):?>
	<td class="disprice" align="right"><h5 id="shipprice" data-id="7">7 AED</h5>(7 AED per month)</td>
    <?php //elseif($payOnce == 82):?>
    <?php //$gift = 7 * 2 ?>
    <!-- <td class="disprice" align="right"><h5><?php echo $gift ;?> AED</h5>(7 AED per month)</td> -->
    <?php //elseif($payOnce == 75):?>
    <?php //$gift = 7 * 3 ?>
   <!--  <td class="disprice" align="right"><h5><?php echo $gift ;?> AED</h5>(7 AED per month)</td> -->
    <?php elseif($payOnce == 4):?>
    <?php $gift = 7 * 3 ?>
    <td class="disprice" align="right"><h5 id="shipprice" data-id="<?php echo $gift ;?>"><?php echo $gift ;?> AED</h5>(7 AED per month)</td>
    <?php elseif($payOnce == 8):?>
    <?php $gift = 7 * 6 ?>
    <td class="disprice" align="right"><h5 id="shipprice" data-id="<?php echo $gift ;?>"><?php echo $gift ;?> AED</h5>(7 AED per month)</td>
    <?php elseif($payOnce == 11):?>
    <?php $gift = 7 * 9 ?>
    <td class="disprice" align="right"><h5 id="shipprice" data-id="<?php echo $gift ;?>"><?php echo $gift ;?> AED</h5>(7 AED per month)</td>
    <?php elseif($payOnce == 15):?>
    <?php $gift = 7 * 12 ?>
    <td class="disprice" align="right"><h5 id="shipprice" data-id="<?php echo $gift ;?>"><?php echo $gift ;?> AED</h5>(7 AED per month)</td>
    <?php endif ?>
    <td class="disprice" align="right" style="display:none"></td>
	</tr>

	<tr class="totals">
	  <td rowspan="2">
		<button type="" class="btn-cart-alt" onclick="updatecart()">Update Cart</button>
		<!-- <button type="" class="btn-cart">Proceed to checkout</button> -->	</td>
		
	  <td align="right"><h4>Discount:</h4></td>
	 <?php if($payOnce == 89):?>
	 <td class="shipprice" align="right"><h5 id="disprice" data-id="0">0 AED</h5></td>
     <?php elseif($payOnce == 82):?>
     <td class="shipprice" align="right"><h5 id="disprice" data-id="14">14 AED</h5></td>
    <?php elseif($payOnce == 75):?>
    <td class="shipprice" align="right"><h5 id="disprice" data-id="42">42 AED</h5></td>
    <?php elseif($payOnce == 4):?>
    <td class="shipprice" align="right"><h5 id="disprice" data-id="10.68">10.68 AED</h5></td>
    <?php elseif($payOnce == 8):?>
    <td class="shipprice" align="right"><h5 id="disprice" data-id="42.72">42.72 AED</h5></td>
    <?php elseif($payOnce == 11):?>
    <td class="shipprice" align="right"><h5 id="disprice" data-id="88.11">88.11 AED</h5></td>
    <?php elseif($payOnce == 15):?>
    <td class="shipprice" align="right"><h5 id="disprice" data-id="160.2">160.2 AED</h5></td>
    <?php endif ?>
    <td class="shipprice" align="right" style="display:none"></td>
	  </tr>
	
	<tr class="totals">
	<td align="right"><h4>Total:</h4></td>
	<td class="totalprice" align="right"></td>
	</tr>
	<tr class="totals">
	<td class="update-cart" style="display:none"></td>
	</tr>

	</tbody>
</table>

<form class="paymentmethod col-sm-6" name="shipform" id="shipform"  action="js-kit/index.php" method="Post">
	<input type="hidden" name="mine" value="<?php echo $giftfor ?>">
	<input type="hidden" name="size" value="<?php echo $size ?>">
	<input type="hidden" name="gender" value="<?php echo $gender ?>">
	<input type="hidden" name="color" value="<?php echo $favcolor ?>">
	<input type="hidden" name="shirtypes" value="<?php echo $shirttypes ?>">
	<input type="hidden" name="favmovie" value="<?php echo $favmovie ?>">
	<input type="hidden" name="favsinger" value="<?php echo $favsinger ?>">
    
    <label class="total"></label>
    <label class="sub"></label>
    <label class="giftwrap"></label>
    <script>
    var subscription = document.getElementById("subscription").value;
    if( subscription == 89){
    $(".sub").html("<input type='hidden' name='subscriptions' id='subscriptions' value='1 T-Shirt/Month'>");
    }
    else if(subscription == 82){
    $(".sub").html("<input type='hidden' name='subscriptions' id='subscriptions' value='2 T-Shirt/Month'>");
    }
    else if(subscription == 75){
    $(".sub").html("<input type='hidden' name='subscriptions' id='subscriptions' value='3 T-Shirt/Month'>");
    }
    else if(subscription == 3){
    $(".sub").html("<input type='hidden' name='subscriptions' id='subscriptions' value='1 T-Shirt/3 Months'>");
    }
    else if(subscription == 6){
    $(".sub").html("<input type='hidden' name='subscriptions' id='subscriptions' value='1 T-Shirt/6 Months'>");
    }
    else if(subscription == 9){
    $(".sub").html("<input type='hidden' name='subscriptions' id='subscriptions' value='1 T-Shirt/9 Months'>");
    }
    else if(subscription == 12){
    $(".sub").html("<input type='hidden' name='subscriptions' id='subscriptions' value='1 T-Shirt/1 Year'>");
    }
    var gift = document.getElementById("wrapping").value;
    if( gift == "yes"){
	$(".giftwrap").html("<input type='hidden' name='gifts' id='gifts' value='yes'>");
 
    }
    if( gift == "no"){
    $(".giftwrap").html("<input type='hidden' name='gifts' id='gifts' value='no'>");
    }
    </script>


	<div class="form-horizontal">
	<h4>Shipping Address</h4>
	  <div class="form-group">
	  <div class="col-sm-4"><label for="fullname">Full Name</label></div>
	  <div class="col-sm-8"><input type="text" class="form-control" name="fullname" id="fullname" required></div>
	  </div>
	  <div class="form-group">
	  <div class="col-sm-4"><label for="country">Country</label></div>
	  <div class="col-sm-8"><input type="text" class="form-control" name="country" id="country" required></div>
	  </div>
	
	  <div class="form-group">
	  <div class="col-sm-4"><label for="city">City</label></div>
	  <div class="col-sm-8"><input type="text" class="form-control" name="city" id="city" required></div>
	  </div>

	  <div class="form-group">
	  <div class="col-sm-4"><label for="address">Full address</label></div>
	  <div class="col-sm-8"><input type="text" class="form-control" name="address" id="address" required></div>
	  </div>

	  <div class="form-group">
	  <div class="col-sm-4"><label for="email">Email Address</label></div>
	  <div class="col-sm-8"><input type="email" class="form-control" name="email" id="email" required></div>
	  </div>

	  <div class="form-group">
	  <div class="col-sm-4"><label for="mobile">Mobile No.</label></div>
	  <div class="col-sm-8"><input type="text" class="form-control" name="mobile" id="mobile" required></div>
	  </div>
	</div>
	<label class="order"><button type="" class="btn-checkout" onclick="formsubmit()">Place Your Order</button></label>
</form>

</div>
<script type="text/javascript" src="js/cart.js"></script>
<?php 
else:?>
<div class="container cartpage">
<p>No items Found in cart</p>
</div>
<?php endif; ?>

<footer class="site-footer">
<?php include 'includes/footer.php'; ?>
</footer>
</body>
</html>