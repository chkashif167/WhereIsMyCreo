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
						<a href="#" class="btn1">WHERE’S MY CREO?</a>
					</div>
				</div>
			</div>
		</section>
		<section>
			<form class="container mycart" action="cart.php" method="Post" id="myForm">
				<div class="clearfix active">
					<h2>THIS AWESOME T-SHIRT</h2>
					<div class="row">
						<div class="col-sm-6">
							<label class="showhide" data-id="">
								<span><input type="radio" name="giftmine" value="mine" placeholder=""> IS MIne </span>
							</label>
						</div>
						<div class="col-sm-6">
							<label data-id="#gift-form" class="showhide">
								<span><input type="radio" name="giftmine" value="gift" placeholder=""> IS A GIFT</span>
							</label>
						</div>
					</div>
					<div class="toggle" style="display:none;" id="gift-form" >
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
							<label class="showhide"><input type="radio" name="gender" value="man" placeholder="" > Man</label>
						</div>
						<div class="col-sm-6">
							<label class="showhide"><input type="radio" name="gender" value="woman" placeholder="" data-id="women"> Women</label>
						</div>
					</div>
				    <div class="women" id="women" style="display:none;">
						<div class="size">
							<h2>Give Me</h2>
							<h2>SHE WEARS A</h2>
							<label><input type="radio" name="size" value="small" placeholder=""> S</label>
							<label><input type="radio" name="size" value="medium" placeholder=""> M</label>
							<label><input type="radio" name="size" value="large" placeholder=""> L</label>
							<label><input type="radio" name="size" value="xlarge" placeholder="">XL</label>
						</div>

						<div class="shirttypes">
							<h2>Make it A</h2>
							<h2>SHE LIKes</h2>
							<label><input type="radio" name="shirttypes" value="round neck" placeholder=""> Round neck</label>
							<label><input type="radio" name="shirttypes" value="v neck" placeholder=""> V neck</label>
							<label><input type="radio" name="shirttypes" value="tank top" placeholder=""> tank top</label>
							<label><input type="radio" name="shirttypes" value="choose for me" placeholder="">you choose for me</label>
						</div>

						<div class="favcolor">
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

						<div class="favMovie">
							<h2>My Favorite Movie</h2>
							<h2>Her Favorite Movie</h2>
							<label><input type="radio" name="favMovie" value="troy"> <span>Troy</span></label>
							<label><input type="radio" name="favMovie" value="godfather"> <span>The GodFather</span></label>
							<label><input type="radio" name="favMovie" value="star wars"> <span>Star wars</span></label>
							<label><input type="radio" name="favMovie" value="godfather again"> <span>The GodFather Again</span></label>
							<label><input type="radio" name="favMovie" value="dispicable me"> <span>Dispicable Me</span></label>
						</div>

						<div class="favSinger" style="display:none;">
							<h2>My Favorite Singer</h2>
							<h2>Her Favorite Singer</h2>
							<label><input type="radio" name="favSinger" value="kety perry"> <span>Kety Perry</span></label>
							<label><input type="radio" name="favSinger" value="2Pac"> <span>2Pac</span></label>
							<label><input type="radio" name="favSinger" value="Beyonce"> <span>Beyonce</span></label>
							<label><input type="radio" name="favSinger" value="Amir Diab"> <span>Amir Diab</span></label>
							<label><input type="radio" name="favSinger" value="Adel"> <span>Adel</span></label>
						</div>
				    </div>
				</div>
				<div class="clearfix disabled">
					<h2>I want to pay</h2>
					<h2>How Often you wana pay?</h2>
					<div class="row">
						<div class="col-sm-6">
							<label class="showhide"><input type="radio" name="paytype" value="once" data-id="payOnce"> Once</label>
						</div>
						<div class="col-sm-6">
							<label class="showhide"><input type="radio" name="paytype" value="monthly" data-id="payMonthly"> Monthly</label>
						</div>
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
					<div class="row">
						<div class="col-sm-6">
							<label><input type="radio" name="giftwrapping" value="noyes" placeholder=""> NAH!</label>
						</div>
						<div class="col-sm-6">
							<label><input type="radio" name="giftwrapping" value="" placeholder=""> YA!</label>
						</div>
					</div>
				</div>
				<button type="button" class="btn-checkout-big">CHECK OUT. YOU’RE ALL DONE HERE.</button>
			</form>
		</section>
	</main>
	<script>
		$('.showhide').click(function() { 
			var id = $(this).attr("data-id");
			if( id != '' ){
				$('.toggle').hide();
				$(id).show();
			}else{
				$('.toggle').hide();
			}
		});
		$('.btn-checkout-big').click(function() { 
			$("#myForm").submit();
		});
	</script>
	<footer class="site-footer">
	<?php //include 'includes/footer.php'; ?>
	</footer>
</body>
</html>