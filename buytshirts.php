<!DOCTYPE html>
<html>
<head>
<?php include 'includes/header-top.php'; ?>
<title>Where Is My Creo | Buy T-Shirts</title>
</head>
<body>
<header id="header" class="header">
	<?php include 'includes/header.php'; ?>
</header>
<main id="buy-t-shirts">
	<section>
		<div class="buy-t-shirts" align="right">
			<div class="container">
				<div class="caption-parent">
					<div class="caption" align="left">
						<h1>Never. Enough.</h1>
						<p>Repeat after us. There can never be enough cheese on my nachos. </p>
						<p>Never enough chocolate chips on my cookie.</p>
						<p>Never enough guitars. Shoes. Or Saturdays in a week.</p>
						<br>
						<p>And never. Ever. Ever (we threw in an extra for effect). Enough t-shirts in my closet.</p>
						<h2>AMEN.</h2>
						<p>Enough said. Just sign up for AED 80 per month, and get an awesome new t-shirt at your doorstep. That’s like 12 scrumptious dishes at a blind tasting at your favorite restaurant. Umm, why blind? Oh we pick the design – and you’ll love it!</p>
					</div>
					<a href="#" class="btn1">WHERE’S MY CREO?</a> </div>
			</div>
		</div>
	</section>
	<section>
		<form class="container mycart" action="cart.php" method="Post" id="myForm">
			<div class="clearfix active">
				<h2>THIS AWESOME T-SHIRT</h2>
				<div class="row">
					<div class="col-sm-6">
						<label class="showhide">
							<input type="radio" name="giftmine" value="mine" data-id="mine" checked="checked" class="mine">
							<span>Is Mine</span>
						</label>
					</div>
					<div class="col-sm-6">
						<label class="showhide">
							<input type="radio" name="giftmine" value="gift" data-id="gift-form" class="gift">
							<span>IS A GIFT</span>
						</label>
					</div>
				</div>
				<div class="gift-form" style="display:none;" id="gift-form">
					<div class="row">
						<div class="col-sm-12">
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
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix disabled">
				<h2>IT’S FOR A</h2>
				<div class="row">
					<div class="col-sm-6">
						<label class="showhide">
							<input type="radio" name="gender" value="man" data-id="man" checked="checked" class="men">
							<span>Man</span>
						</label>
					</div>
					<div class="col-sm-6">
						<label class="showhide">
							<input type="radio" name="gender" value="woman" data-id="women" class ="women">
							<span>Women</span>
						</label>
					</div>
				</div>
				<div class="women" id="women" style="display:none;">
					<div class="size">
						<h2 class="first">Give Me</h2>
						<label class="small">
							<span class="cover-up">
								<input type="radio" name="size" value="small" class="size">
								<span>S</span>
							</span>
						</label>
						<label class="medium">
							<span class="cover-up">
								<input type="radio" name="size" value="medium" class="size">
								<span>M</span>
							</span>
						</label>
						<label class="large">
							<span class="cover-up">
								<input type="radio" name="size" value="large" class="size">
								<span>L</span>
							</span>
						</label>
						<label class="xlarge">
							<span class="cover-up">
								<input type="radio" name="size" value="xlarge" class="size">
								<span>XL</span>
							</span>
						</label>
						<div class="size-error" style="display:none;">
							<p>Please select one of the option</p>
						</div>
					</div>
					<div class="shirttypes">
						<h2 class="second">Make it A</h2>
						<label class="round-neck">
							<span class="cover-up">
								<input type="radio" name="shirttypes" value="round neck" class="shirttypes">
								<span>Round neck</span>
							</span>
						</label>
						<label class="v-neck">
							<span class="cover-up">
								<input type="radio" name="shirttypes" value="v neck" class="shirttypes">
								<span>V neck</span>
							</span>
						</label>
						<label class="tank-top">
							<span class="cover-up">
								<input type="radio" name="shirttypes" value="tank top" class="shirttypes">
								<span>tank top</span>
							</span>
						</label>
						<label class="choose-for-me">
							<span class="cover-up">
								<input type="radio" name="shirttypes" value="choose for me" class="shirttypes">
								<span>you choose for me</span>
							</span>
						</label>
						<div class="shirttypes-error" style="display:none;">
							<p>Please select one of the option</p>
						</div>
					</div>
					<div class="fav-color">
						<h2 class="third">my favorite color is...</h2>
						<label class="white" style="border-color:black;background-color:white">
							<span class="cover-up">
								<input type="radio" name="favcolor" value="white" class="favcolor">
								<span>White</span>
							</span>
						</label>
						<label class="black" style="border-color:black;background-color:black">
							<span class="cover-up">
								<input type="radio" name="favcolor" value="black" class="favcolor">
								<span>Black</span>
							</span>
						</label>
						<label class="lightblue" style="border-color:lightblue;background-color:lightblue">
							<span class="cover-up">
								<input type="radio" name="favcolor" value="lightblue" class="favcolor">
								<span>Light Blue</span>
							</span>
						</label>
						<label class="darkblue" style="border-color:darkblue;background-color:darkblue">
							<span class="cover-up">
								<input type="radio" name="favcolor" value="darkblue" class="favcolor">
								<span>Dark Blue</span>
							</span>
						</label>
						<label class="red" style="border-color:red;background-color:red">
							<span class="cover-up">
								<input type="radio" name="favcolor" value="red" class="favcolor">
								<span>Red</span>
							</span>
						</label>
						<label class="green" style="border-color:green;background-color:green">
							<span class="cover-up">
								<input type="radio" name="favcolor" value="green" class="favcolor">
								<span>Green</span>
							</span>
						</label>
						<label class="orange" style="border-color:orange;background-color:orange">
							<span class="cover-up">
								<input type="radio" name="favcolor" value="orange" class="favcolor">
								<span>Orange</span>
							</span>
						</label>
						<label class="lightgreen" style="border-color:lightgreen;background-color:lightgreen">
							<span class="cover-up">
								<input type="radio" name="favcolor" value="lightgreen" class="favcolor">
								<span>Light Green</span>
							</span>
						</label>
						<label class="yellow" style="border-color:yellow;background-color:yellow">
							<span class="cover-up">
								<input type="radio" name="favcolor" value="yellow" class="favcolor">
								<span>Yellow</span>
							</span>
						</label>
						<label class="blue" style="border-color:blue;background-color:blue">
							<span class="cover-up">
								<input type="radio" name="favcolor" value="blue" class="favcolor">
								<span>Blue</span>
							</span>
						</label>
						<div class="favcolor-error" style="display:none;">
							<p>Please select one of the option</p>
						</div>
						<button type="button" class="btn btn-default btn-blind">im color blind <span class="img"></span></button>
					</div>
					<div class="fav-Movie">
						<h2 class="fourth">My Favorite Movie</h2>
						<label class="troy">
							<span class="cover-up">
								<input type="radio" name="favMovie" value="troy" class="favMovie" >
								<span>Troy</span>
							</span>
						</label>
						<label class="godfather">
							<span class="cover-up">
								<input type="radio" name="favMovie" value="godfather" class="favMovie" >
								<span>godfather</span>
							</span>
						</label>
						<label class="star-wars">
							<span class="cover-up">
								<input type="radio" name="favMovie" value="star wars" class="favMovie" >
								<span>star wars</span>
							</span>
						</label>
						<label class="godfather">
							<span class="cover-up">
								<input type="radio" name="favMovie" value="godfather" class="favMovie" >
								<span>godfather</span>
							</span>
						</label>
						<label class="dispicable-me">
							<span class="cover-up">
								<input type="radio" name="favMovie" value="dispicable me" class="favMovie" >
								<span>dispicable me</span>
							</span>
						</label>
						<div class="favMovie-error" style="display:none;">
							<p>Please select one of the option</p>
						</div>
					</div>
					<div class="fav-Singer">
						<h2 class="fifth">My Favorite Singer</h2>
						<label class="kety-perry">
							<span class="cover-up">
								<input type="radio" name="favSinger" value="kety perry" class="favMovie" >
								<span>Kety Perry</span>
							</span>
						</label>
						<label class="2Pac">
							<span class="cover-up">
								<input type="radio" name="favSinger" value="2Pac" class="favMovie" >
								<span>2Pac</span>
							</span>
						</label>
						<label class="beyonce">
							<span class="cover-up">
								<input type="radio" name="favSinger" value="beyonce" class="favMovie" >
								<span>Beyonce</span>
							</span>
						</label>
						<label class="amir-diab">
							<span class="cover-up">
								<input type="radio" name="favSinger" value="Amir Diab" class="favMovie" >
								<span>Amir Diab</span>
							</span>
						</label>
						<label class="adel">
							<span class="cover-up">
								<input type="radio" name="favSinger" value="adel" class="favMovie" >
								<span>Adel</span>
							</span>
						</label>
						<div class="favSinger-error" style="display:none;">
							<p>Please select one of the option</p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix disabled">
				<h2>How Often you wana pay?</h2>
				<div class="row">
					<div class="col-sm-6">
						<label class="showhide">
							<input type="radio" name="paytype" value="once" data-id="payOnce" checked="checked" class="payonce">
							<span>Once</span>
						</label>
					</div>
					<div class="col-sm-6">
						<label class="showhide">
							<input type="radio" name="paytype" value="monthly" data-id="payMonthly" class="paymonthly">
							<span>Monthly</span>
						</label>
					</div>
				</div>
				<div class="pay-Once" style="display:none;" id="payOnce">
					<label>
						<span class="cover-up">
							<input type="radio" name="payOnce" value="4" class="payOnce">
							<span>3 Month</span>
							<b>Save 4%</b>
						</span>
					</label>
					<label>
						<span class="cover-up">
							<input type="radio" name="payOnce" value="8" class="payOnce">
							<span>6 Month</span>
							<b>Save 8%</b>
						</span>
					</label>
					<label>
						<span class="cover-up">
							<input type="radio" name="payOnce" value="11" class="payOnce">
							<span>9 Month</span>
							<b>Save 11%</b>
						</span>
					</label>
					<label>
						<span class="cover-up">
							<input type="radio" name="payOnce" value="15" class="payOnce">
							<span>1 Year</span>
							<b>Save 15%</b>
						</span>
					</label>
					<div class="payonce-error" style="display:none;">
						<p>Please select one of the option</p>
					</div>
				</div>
				<div class="pay-Monthly" style="display:none;" id="payMonthly">
					<h2>how many t-shirt per month you want?</h2>
					<label>
						<span class="cover-up">
							<input type="radio" name="payOnce" value="89" class="payMonthly">
							<span class="shirt">1 T-SHIRT</span>
							<span class="price">89 AED <em>a month</em></span>
						</span>
					</label>
					<label>
						<span class="cover-up">
							<input type="radio" name="payOnce" value="82" class="payMonthly">
							<span class="shirt">2 T-SHIRTS</span>
							<span class="price">82 AED per T-shirt</span>
							<sapn class="month">a month</sapn>
							<span class="tag">save 14 AED</span>
						</span>
					</label>
					<label>
						<span class="cover-up">
							<input type="radio" name="payOnce" value="75" class="payMonthly">
							<span class="shirt">3 T-SHIRTS</span>
							<span class="price">85 AED per T-shirt</span>
							<sapn class="month">a month</sapn>
							<span class="tag">save 14 AED</span>
						</span>
					</label>
					<div class="paymonthly-error" style="display:none;">
						<p>Please select one of the option</p>
					</div>
				</div>
			</div>
			<div class="clearfix disabled">
				<h2>GIFT WRAP IT?</h2>
				<div class="col-sm-6">
					<label>

						<input type="radio" name="giftwrapping" value="no" placeholder="">
						NAH!</label>
				</div>
				<div class="col-sm-6">
					<label>
						<input type="radio" name="giftwrapping" value="yes" checked="checked">
						YA!</label>
				</div>
			</div>
			<button type="button" class="btn-checkout-big">CHECK OUT. YOU’RE ALL DONE HERE.</button>
		</form>
	</section>

<script type="text/javascript" src="js/buytshirt.js"></script>
<footer class="site-footer">
	<?php include 'includes/footer.php'; ?>
</footer>
</body>
</html>