<!DOCTYPE html>
<html>
<head>
<?php include 'includes/header-top.php'; ?>
<title>Where Is My Creo | Buy T-Shirts</title>
</head>
<body>
<header id="header" class="header">
<?php include 'includes/header.php'; ?>
<?php include 'includes/banner1.php'; ?>
</header><!-- /header -->

<div class="container mycart">
	<div class="clearfix active">
	<h2>THIS AWESOME T-SHIRT</h2>
	<div class="col-sm-6">
		<label><input type="radio" name="giftmine" value="" placeholder=""> IS MIne</label>
	</div>
	<div class="col-sm-6">
		<label><input type="radio" name="giftmine" value="" placeholder=""> IS A GIFT</label>
	</div>
	<div class="gift-form" style="display:none;">
	<form class="form-horizontal" action="" method="">
	  <div class="form-group">
	      <input type="text" class="form-control" name="giftreceiver" placeholder="TYPE GIFT-GETTER’S NAME" required>
	  </div>
	  <div class="form-group">
	  <label>Email address (leave blank for a surprise :-)</label>
	      <input type="email" class="form-control" name="email" placeholder="TYPE GIFT-GETTER’S EMAIL HERE" required>
	  </div>
	  <div class="form-group">
	      <textarea name="message" rows="10" class="form-control" placeholder="SEND A PERSONALIZED MESSAGE"></textarea>
	  </div>
	</form>
	</div>
	</div>

	<div class="clearfix disabled">
	<h2>IT’S FOR A</h2>
	<div class="col-sm-6">
		<label><input type="radio" name="gender" value="" placeholder=""> Man</label>
	</div>
	<div class="col-sm-6">
		<label><input type="radio" name="gender" value="" placeholder=""> Women</label>
	</div>

	<div class="size" style="display:none;">
		<h2>Give Me</h2>
		<h2>SHE WEARS A</h2>
		<label><input type="radio" name="size" value="" placeholder=""> S</label>
		<label><input type="radio" name="size" value="" placeholder=""> M</label>
		<label><input type="radio" name="size" value="" placeholder=""> L</label>
		<label><input type="radio" name="size" value="" placeholder="">XL</label>
	</div>

	<div class="shirttypes" style="display:none;">
		<h2>Make it A</h2>
		<h2>SHE LIKes</h2>
		<label><input type="radio" name="shirttypes" value="" placeholder=""> Round neck</label>
		<label><input type="radio" name="shirttypes" value="" placeholder=""> V neck</label>
		<label><input type="radio" name="shirttypes" value="" placeholder=""> tank top</label>
		<label><input type="radio" name="shirttypes" value="" placeholder="">you choose for me</label>
	</div>

	<div class="favcolor" style="display:none;">
		<h2>my favorite color is...</h2>
		<h2>her favorite color is...</h2>
		<label class="white"><input type="radio" name="favcolor" value="white"> </label>
		<label class="black"><input type="radio" name="favcolor" value="black"> </label>
		<label class="lightblue"><input type="radio" name="favcolor" value="lightblue"> </label>
		<label class="darkblue"><input type="radio" name="favcolor" value="darkblue"> </label>
		<label class="red"><input type="radio" name="favcolor" value="red"> </label>
		<label class="green"><input type="radio" name="favcolor" value="green"> </label>
		<label class="orange"><input type="radio" name="favcolor" value="orange"> </label>
		<label class="lightgreen"><input type="radio" name="favcolor" value="lightgreen"> </label>
		<label class="yellow"><input type="radio" name="favcolor" value="yellow"> </label>
		<label class="blue"><input type="radio" name="favcolor" value="blue"> </label>
	<button type="button" class="btn-blind">im color blind</button>
	</div>

	<div class="favMovie" style="display:none;">
		<h2>My Favorite Movie</h2>
		<h2>Her Favorite Movie</h2>
		<label><input type="radio" name="favMovie" value=""> <span>Troy</span></label>
		<label><input type="radio" name="favMovie" value=""> <span>The GodFather</span></label>
		<label><input type="radio" name="favMovie" value=""> <span>Star wars</span></label>
		<label><input type="radio" name="favMovie" value=""> <span>The GodFather Again</span></label>
		<label><input type="radio" name="favMovie" value=""> <span>Dispicable Me</span></label>
	</div>

	<div class="favSinger" style="display:none;">
		<h2>My Favorite Singer</h2>
		<h2>Her Favorite Singer</h2>
		<label><input type="radio" name="favSinger" value=""> <span>Kety Perry</span></label>
		<label><input type="radio" name="favSinger" value=""> <span>2Pac</span></label>
		<label><input type="radio" name="favSinger" value=""> <span>Beyonce</span></label>
		<label><input type="radio" name="favSinger" value=""> <span>Amir Diab</span></label>
		<label><input type="radio" name="favSinger" value=""> <span>Adel</span></label>
	</div>

	</div>

	<div class="clearfix disabled">
	<h2>I want to pay</h2>
	<h2>How Often you wana pay?</h2>
	<div class="col-sm-6">
		<label><input type="radio" name="paytype" value="once"> Once</label>
	</div>
	<div class="col-sm-6">
		<label><input type="radio" name="paytype" value="monthly"> Monthly</label>
	</div>

	<div class="payOnce" style="display:none;">
		<label><input type="radio" name="payOnce" value="package1"> 3 Month<b>Save 4%</b></label>
		<label><input type="radio" name="payOnce" value="package2"> 6 Month<b>Save 8%</b></label>
		<label><input type="radio" name="payOnce" value="package3"> 9 Month<b>Save 11%</b></label>
		<label><input type="radio" name="payOnce" value="package4"> 1 year<b>Save 15%</b></label>
	</div>

	<div class="payMonthly" style="display:none;">
		<h2>how many t-shirt per month you want?</h2>
		<label><input type="radio" name="payMonthly" value="package1"> 1 t-shirt <b>89 AED</b>a month</label>
		<label><input type="radio" name="payMonthly" value="package2"> 2 t-shirts <b>82 AED per T-shirt</b>a month 
		<span>save 14 AED</span></label>
		<label><input type="radio" name="payMonthly" value="package3"> 3 t-shirts <b>85 AED per t-shirt</b>a month 
		<span>save 14 AED</span></label>
	</div>

	</div>

	<div class="clearfix disabled">
	<h2>GIFT WRAP IT?</h2>
	<div class="col-sm-6">
		<label><input type="radio" name="giftwrapping" value="" placeholder=""> NAH!</label>
	</div>
	<div class="col-sm-6">
		<label><input type="radio" name="giftwrapping" value="" placeholder=""> YA!</label>
	</div>
	</div>
	<button type="button" class="btn-checkout-big">CHECK OUT. YOU’RE ALL DONE HERE.</button>
</div>

<footer class="site-footer">
<?php include 'includes/footer.php'; ?>
</footer>
</body>
</html>