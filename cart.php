<!DOCTYPE html>
<html>
<?php 
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
	<option value="">1 T-Shirt/3 Months</option>
    <option value="">1 T-Shirt/6 Months</option>
	<option value="">1 T-Shirt/9 Months</option>
	<option value="">1 T-Shirt/1 Year</option>
    <?php elseif($payOnce == 8): ?>
	<option value="">1 T-Shirt/6 Months</option>
    <option value="">1 T-Shirt/3 Months</option>
	<option value="">1 T-Shirt/9 Months</option>
	<option value="">1 T-Shirt/1 Year</option>
    <?php elseif($payOnce == 11): ?>
	<option value="">1 T-Shirt/9 Months</option>
    <option value="">1 T-Shirt/3 Months</option>
	<option value="">1 T-Shirt/6 Months</option>
	<option value="">1 T-Shirt/1 Year</option>
    <?php elseif($payOnce == 15): ?>
	<option value="">1 T-Shirt/1 Year</option>
    <option value="">1 T-Shirt/3 Months</option>
	<option value="">1 T-Shirt/6 Months</option>
	<option value="">1 T-Shirt/9 Months</option>
    <?php endif; ?>
	</select>
	</td>
	<?php if($payOnce == 89 || $payOnce == 82 || $payOnce == 75): ?>
	<td class="price" align="right"><h5><?php echo $payOnce; ?> AED</h5></td>
    <?php endif; ?>
	</tr>
	
	<tr>
	<td>
	<h4>subscription duration:</h4>
	<div class="date">
	<h4>start date: <span>25-Oct-2015</span></h4>
	<h4>end date: <span>24-jan-2016</span></h4>
	</div>
	</td>
	<td>
	<select>
	<?php if($payOnce == 89)?>
	<option value="">Every Month</option>
	<option value="">Every Month</option>
	<option value="">Every Month</option>
	</select>
	</td>
	<td class="price" align="right"><h5>267 AED</h5></td>
	</tr>

	<tr>
	<td><h4>cool wraping:</h4></td>
	<td>
	<select>
	<?php if($giftwrapping == "yes"): ?>
	<option value=""><?php echo $giftwrapping ?></option></option>
	<option value="">No</option></option>
	<?php elseif($giftwrapping == "no"): ?>
	<option value=""><?php echo $giftwrapping ?></option></option>
	<option value="">Yes</option></option>	
    <?php endif; ?>
	</select>
	</td>
	<td class="price" align="right"><h5>15 AED</h5>(5 AED per month)</td>
	</tr>

	<tr>
	<td><h4>Shipping:</h4></td>
	<td>
	<select>
	<option value="">Uae</option>
	</select>
	</td>
	<td class="price" align="right"><h5>21 AED</h5>(7 AED per month)</td>
	</tr>

	<tr class="totals">
	  <td rowspan="2">
		<button type="" class="btn-cart-alt">Update Cart</button>
		<button type="" class="btn-cart">Proceed to checkout</button>	</td>
	  <td align="right"><h4>Discount:</h4></td>
	  <td class="price" align="right"><h5>10.68 AED</h5></td>
	  </tr>
	<tr class="totals">
	<td align="right"><h4>Total:</h4></td>
	<td class="price" align="right"><h5>292.32 AED</h5></td>
	</tr>

	</tbody>
</table>
<div class="paymentmethod col-sm-6">
	<div class="form-horizontal" action="" method="">
	<h4>Shipping Address</h4>
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
	  <div class="col-sm-8"><input type="text" class="form-control" name="email" id="email" required></div>
	  </div>

	  <div class="form-group">
	  <div class="col-sm-4"><label for="mobile">Mobile No.</label></div>
	  <div class="col-sm-8"><input type="text" class="form-control" name="mobile" id="mobile" required></div>
	  </div>
	</div>
	<button type="" class="btn-checkout">Place Your Order</button>
</div>

</div>
<script>
$(".subscription").change(function(){
	var price = document.getElementById("subscription").value
     $(".price").html("<h5>"+price+" AED</h5>");
});
</script>

<footer class="site-footer">
<?php include 'includes/footer.php'; ?>
</footer>
</body>
</html>