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
// if($_POST["giftwrapping"] == ""):?>
<!--<p>No items Found</p>-->
<?php 
// else:
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
	<h4>start date: <span>25-Oct-2015</span></h4>
	<h4>end date: <span>24-jan-2016</span></h4>
	</div>
	</td>
	<td>
	<select class="timeperiod">
	<?php if($payOnce == 89 || $payOnce == 82 || $payOnce == 75 ):?>
	<option value="">Every Month</option>
	<?php elseif($payOnce == 4): ?>
	<option value="">3 Months</option>
	<option value="">6 Months</option>
	<option value="">9 Months</option>
	<option value="">1 Year</option>
	<?php elseif($payOnce == 8): ?>
	<option value="">6 Months</option>
	<option value="">3 Months</option>
	<option value="">9 Months</option>
	<option value="">1 Year</option>
	<?php elseif($payOnce == 11): ?>
	<option value="">9 Months</option>
	<option value="">3 Months</option>
	<option value="">6 Months</option>
	<option value="">1 Year</option>
	<?php elseif($payOnce == 15): ?>
	<option value="">1 Year</option>
	<option value="">3 Months</option>
	<option value="">6 Months</option>
	<option value="">9 Months</option>
    <?php endif ?>
	</select>
	</td>
	<td class="pricenew" align="right" style="display:none"><h5>89 AED</h5></td>
	<?php if($payOnce == 89):?>
	<td class="pricenew" align="right"><h5>89 AED</h5></td>
    <?php elseif($payOnce == 82):?>
    <?php  $newprice = 89 * 2; ?>
    <td class="pricenew" align="right"><h5><?php echo $newprice ?> AED</h5></td>
    <?php elseif($payOnce == 75):?>
    <?php  $newprice = 89 * 3; ?>
    <td class="pricenew" align="right"><h5><?php echo $newprice ?> AED</h5></td>
    <?php elseif($payOnce == 4):?>
    <?php  $newprice = 89 * 3; ?>
    <td class="pricenew" align="right"><h5><?php echo $newprice ?> AED</h5></td>
    <?php elseif($payOnce == 8):?>
    <?php  $newprice = 89 * 6; ?>
    <td class="pricenew" align="right"><h5><?php echo $newprice ?> AED</h5></td>
    <?php elseif($payOnce == 11):?>
    <?php  $newprice = 89 * 9; ?>
    <td class="pricenew" align="right"><h5><?php echo $newprice ?> AED</h5></td>
    <?php elseif($payOnce == 15):?>
    <?php  $newprice = 89 * 12; ?>
    <td class="pricenew" align="right"><h5><?php echo $newprice ?> AED</h5></td>
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
	<select class="wraping" id = "wrapping">
	<option value="yes"><?php echo $giftwrapping ?></option>
	<option value="no">No</option>
	</select>
	</td>
	<?php if($payOnce == 89):?>
	<td class="giftprice" align="right"><h5>5 AED</h5>(5 AED per month)</td>
    <?php elseif($payOnce == 82):?>
    <?php $gift = 5 * 2 ?>
    <td class="giftprice" align="right"><h5><?php echo $gift ;?> AED</h5>(5 AED per month)</td>
    <?php elseif($payOnce == 75):?>
    <?php $gift = 5 * 3 ?>
    <td class="giftprice" align="right"><h5><?php echo $gift ;?> AED</h5>(5 AED per month)</td>
    <?php elseif($payOnce == 4):?>
    <?php $gift = 5 * 3 ?>
    <td class="giftprice" align="right"><h5><?php echo $gift ;?> AED</h5>(5 AED per month)</td>
    <?php elseif($payOnce == 8):?>
    <?php $gift = 5 * 6 ?>
    <td class="giftprice" align="right"><h5><?php echo $gift ;?> AED</h5>(5 AED per month)</td>
    <?php elseif($payOnce == 11):?>
    <?php $gift = 5 * 9 ?>
    <td class="giftprice" align="right"><h5><?php echo $gift ;?> AED</h5>(5 AED per month)</td>
    <?php elseif($payOnce == 15):?>
    <?php $gift = 5 * 12 ?>
    <td class="giftprice" align="right"><h5><?php echo $gift ;?> AED</h5>(5 AED per month)</td>
    <?php endif ?>
	</td>
    <?php elseif($giftwrapping == "no"): ?>
	<td>
	<select class="wraping" id = "wrapping">
	<option value="no"><?php echo $giftwrapping ?></option>
	<option value="yes">Yes</option>	
    </select>	
	</td>
	<td class="giftprice" align="right"><h5>0 AED</h5></td>
	<?php endif; ?>
	<td class="giftprice" align="right" style="display:none"><h5>5 AED</h5>(5 AED per month)</td>
	</tr>

	<tr>
	<td><h4>Shipping:</h4></td>
	<td>
	<select>
	<option value="">Uae</option>
	</select>
	</td>
	<?php if($payOnce == 89):?>
	<td class="disprice" align="right"><h5>7 AED</h5>(7 AED per month)</td>
    <?php elseif($payOnce == 82):?>
    <?php $gift = 7 * 2 ?>
    <td class="disprice" align="right"><h5><?php echo $gift ;?> AED</h5>(7 AED per month)</td>
    <?php elseif($payOnce == 75):?>
    <?php $gift = 7 * 3 ?>
    <td class="disprice" align="right"><h5><?php echo $gift ;?> AED</h5>(7 AED per month)</td>
    <?php elseif($payOnce == 4):?>
    <?php $gift = 7 * 3 ?>
    <td class="disprice" align="right"><h5><?php echo $gift ;?> AED</h5>(7 AED per month)</td>
    <?php elseif($payOnce == 8):?>
    <?php $gift = 7 * 6 ?>
    <td class="disprice" align="right"><h5><?php echo $gift ;?> AED</h5>(7 AED per month)</td>
    <?php elseif($payOnce == 11):?>
    <?php $gift = 7 * 9 ?>
    <td class="disprice" align="right"><h5><?php echo $gift ;?> AED</h5>(7 AED per month)</td>
    <?php elseif($payOnce == 15):?>
    <?php $gift = 7 * 12 ?>
    <td class="disprice" align="right"><h5><?php echo $gift ;?> AED</h5>(7 AED per month)</td>
    <?php endif ?>
    <td class="disprice" align="right" style="display:none" id="disprice"><h5>7 AED</h5>(7 AED per month)</td>
	</tr>

	<tr class="totals">
	  <td rowspan="2">
		<button type="" class="btn-cart-alt">Update Cart</button>
		<button type="" class="btn-cart">Proceed to checkout</button>	</td>
	  <td align="right"><h4>Discount:</h4></td>
	 <?php if($payOnce == 89):?>
	 <td class="price" align="right"><h5>0 AED</h5></td>
     <?php elseif($payOnce == 82):?>
     <td class="price" align="right"><h5>14 AED</h5></td>
    <?php elseif($payOnce == 75):?>
    <td class="price" align="right"><h5>42 AED</h5></td>
    <?php elseif($payOnce == 4):?>
    <td class="price" align="right"><h5>10.68 AED</h5></td>
    <?php elseif($payOnce == 8):?>
    <td class="price" align="right">42.72<h5><?php echo $gift ;?> AED</h5></td>
    <?php elseif($payOnce == 11):?>
    <td class="price" align="right"><h5>88.11 AED</h5></td>
    <?php elseif($payOnce == 15):?>
    <td class="price" align="right"><h5>160.2 AED</h5></td>
    <?php endif ?>
	  </tr>
	<tr class="totals">
	<td align="right"><h4>Total:</h4></td>
	<td class="price" align="right"><h5>292.32 AED</h5></td>
	</tr>

	</tbody>
</table>
<div class="paymentmethod col-sm-6">
	<div class="form-horizontal" action="" method="">
	
	  <div class="form-group">
	  <div class="col-sm-4"><label for="country">Country</label></div>
	  <div class="col-sm-8"><input type="text" class="form-control" name="country" required></div>
	  </div>
	
	  <div class="form-group">
	  <div class="col-sm-4"><label for="city">City</label></div>
	  <div class="col-sm-8"><input type="text" class="form-control" name="city" required></div>
	  </div>

	  <div class="form-group">
	  <div class="col-sm-4"><label for="address">Full address</label></div>
	  <div class="col-sm-8"><input type="text" class="form-control" name="address" required></div>
	  </div>

	  <div class="form-group">
	  <div class="col-sm-4"><label for="email">Email Address</label></div>
	  <div class="col-sm-8"><input type="text" class="form-control" name="email" required></div>
	  </div>

	  <div class="form-group">
	  <div class="col-sm-4"><label for="mobile">Mobile No.</label></div>
	  <div class="col-sm-8"><input type="text" class="form-control" name="mobile" required></div>
	  </div>
	</div>
	<button type="" class="btn-checkout">Place Your Order</button>
</div>

</div>
<script>
$(".subscription").change(function(){
	var price = document.getElementById("subscription").value
	var wrap = document.getElementById("wrapping").value
	if(price == 89){
     $(".pricenew").html("<h5>"+price+" AED</h5>");
     if(wrap == "yes"){
     $(".giftprice").html("<h5>5 AED</h5>(5 AED per month)");
     }
     else if(wrap == "no"){
     $(".giftprice").html("<h5>0 AED</h5>(5 AED per month)");
	 }
	 $(".disprice").html("<h5>7 AED</h5>(7 AED per month)");
	}
	else if(price == 82){
	var newprice = 89 * 2;
     $(".pricenew").html("<h5>"+newprice+" AED</h5>");
     if(wrap == "yes"){
     $(".giftprice").html("<h5>10 AED</h5>(5 AED per month)");
     }
     else if(wrap == "no"){
     $(".giftprice").html("<h5>0 AED</h5>(5 AED per month)");
	 }
	 $(".disprice").html("<h5>7 AED</h5>(7 AED per month)");
	}
	else if(price == 75){
		var newprice = 89 * 3;
     $(".pricenew").html("<h5>"+newprice+" AED</h5>");
     if(wrap == "yes"){
     $(".giftprice").html("<h5>15 AED</h5>(5 AED per month)");
     }
     else if(wrap == "no"){
     $(".giftprice").html("<h5>0 AED</h5>(5 AED per month)");
	 }
	 $(".disprice").html("<h5>7 AED</h5>(7 AED per month)");
	}
	else{
	var newprice = 89 * price;
	$(".pricenew").html("<h5>"+newprice+" AED</h5>");
	if(price == 3){
	$(".timeperiod").html(
	"<option value=''>3 Months</option><option value=''>6 Months</option><option value=''>9 Months</option><option value=''>1 Year</option>");
    }
	else if(price == 6){
	$(".timeperiod").html("<option value=''>6 Months</option><option value=''>3 Months</option><option value=''>9 Months</option><option value=''>1 Year</option>");
    }
	else if(price == 9){
	$(".timeperiod").html("<option value=''>9 Months</option><option value=''>3 Months</option><option value=''>6 Months</option><option value=''>1 Year</option>");
    }
	else if(price == 12){
	$(".timeperiod").html("<option value=''>1 Year</option><option value=''>3 Months</option><option value=''>6 Months</option><option value=''>9 Months</option>");
	}
	if(wrap == "yes"){
	var giftpric = 5 * price;
     $(".giftprice").html("<h5>"+giftpric+" AED</h5>(5 AED per month)");
     }
    else if(wrap == "no"){
    $(".giftprice").html("<h5>0 AED</h5>(5 AED per month)");
	 }
	var disprice = 7 *price;
	$(".disprice").html("<h5>"+disprice+" AED</h5>(7 AED per month)");
}
});
</script>
<?php //endif; ?>

<footer class="site-footer">
<?php include 'includes/footer.php'; ?>
</footer>
</body>
</html>