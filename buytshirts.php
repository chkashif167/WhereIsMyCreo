<!DOCTYPE html>
<html>
<head>
<?php include 'includes/header-top.php'; ?>
<title>Where Is My Creo | Buy T-Shirts</title>
</head>
<body>
<header id="header" class="header">
<?php include 'includes/header.php'; ?>
<?php //include 'includes/banner1.php'; ?>
</header><!-- /header -->

<form class="container mycart" action="cart.php" method="Post" id="myForm">
	<div class="clearfix active">
	<h2>THIS AWESOME T-SHIRT</h2>
	<div class="col-sm-6">
		<label class="showhide"><input type="radio" name="giftmine" value="mine" placeholder="" data-id="mine" checked="checked"> IS MIne</label>
	</div>
	<div class="col-sm-6">
		<label class="showhide"><input type="radio" name="giftmine" value="gift" placeholder="" data-id="gift-form"> IS A GIFT</label>
	</div>
	<div class="gift-form" style="display:none;" id="gift-form" >
	<div class="form-horizontal" action="" method="">
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

	<div class="clearfix disabled">
	<h2>IT’S FOR A</h2>
	<div class="col-sm-6">
		<label class="showhide"><input type="radio" name="gender" value="man" placeholder="" data-id="man" checked="checked" class="men"> Man</label>
	</div>
	<div class="col-sm-6">
		<label class="showhide"><input type="radio" name="gender" value="woman" placeholder="" data-id="women" class ="women"> Women</label>
	</div>
    
    <div class="women" id="women" style="display:none;">
	<div class="size">
		<h2>Give Me</h2>
		<h2>SHE WEARS A</h2>
		<label><input type="radio" name="size" value="small" placeholder="" class="size"> S</label>
		<label><input type="radio" name="size" value="medium" placeholder="" class="size"> M</label>
		<label><input type="radio" name="size" value="large" placeholder="" class="size"> L</label>
		<label><input type="radio" name="size" value="xlarge" placeholder="" class="size">XL</label>
	    <div class="size-error" style="display:none;"><p>Please select one of the option</p></div>
	</div>

	<div class="shirttypes">
		<h2>Make it A</h2>
		<h2>SHE LIKes</h2>
		<label><input type="radio" name="shirttypes" value="round neck" placeholder="" class="shirttypes"> Round neck</label>
		<label><input type="radio" name="shirttypes" value="v neck" placeholder="" class="shirttypes"> V neck</label>
		<label><input type="radio" name="shirttypes" value="tank top" placeholder="" class="shirttypes"> tank top</label>
		<label><input type="radio" name="shirttypes" value="choose for me" placeholder="" class="shirttypes">you choose for me</label>
	    <div class="shirttypes-error" style="display:none;"><p>Please select one of the option</p></div>
	</div>

	<div class="favcolor">
		<h2>my favorite color is...</h2>
		<h2>her favorite color is...</h2>
		<label class="white"><input type="radio" name="favcolor" value="white" class="favcolor"> </label>
		<label class="black"><input type="radio" name="favcolor" value="black" class="favcolor"> </label>
		<label class="lightblue"><input type="radio" name="favcolor" value="lightblue" class="favcolor"> </label>
		<label class="darkblue"><input type="radio" name="favcolor" value="darkblue" class="favcolor"> </label>
		<label class="red"><input type="radio" name="favcolor" value="red" class="favcolor"> </label>
		<label class="green"><input type="radio" name="favcolor" value="green" class="favcolor"> </label>
		<label class="orange"><input type="radio" name="favcolor" value="orange" class="favcolor"> </label>
		<label class="lightgreen"><input type="radio" name="favcolor" value="lightgreen" class="favcolor"> </label>
		<label class="yellow"><input type="radio" name="favcolor" value="yellow" class="favcolor"> </label>
		<label class="blue"><input type="radio" name="favcolor" value="blue" class="favcolor"> </label>
	    <div class="favcolor-error" style="display:none;"><p>Please select one of the option</p></div>
	<button type="button" class="btn-blind">im color blind</button>
	</div>

	<div class="favMovie">
		<h2>My Favorite Movie</h2>
		<h2>Her Favorite Movie</h2>
		<label><input type="radio" name="favMovie" value="troy" class="favMovie" > <span>Troy</span></label>
		<label><input type="radio" name="favMovie" value="godfather" class="favMovie" > <span>The GodFather</span></label>
		<label><input type="radio" name="favMovie" value="star wars" class="favMovie" > <span>Star wars</span></label>
		<label><input type="radio" name="favMovie" value="godfather again" class="favMovie" > <span>The GodFather Again</span></label>
		<label><input type="radio" name="favMovie" value="dispicable me" class="favMovie" > <span>Dispicable Me</span></label>
	    <div class="favMovie-error" style="display:none;"><p>Please select one of the option</p></div>
	</div>

	<div class="favSinger">
		<h2>My Favorite Singer</h2>
		<h2>Her Favorite Singer</h2>
		<label><input type="radio" name="favSinger" value="kety perry" class="favSinger" > <span>Kety Perry</span></label>
		<label><input type="radio" name="favSinger" value="2Pac" class="favSinger"> <span>2Pac</span></label>
		<label><input type="radio" name="favSinger" value="Beyonce" class="favSinger"> <span>Beyonce</span></label>
		<label><input type="radio" name="favSinger" value="Amir Diab" class="favSinger"> <span>Amir Diab</span></label>
		<label><input type="radio" name="favSinger" value="Adel" class="favSinger"> <span>Adel</span></label>
	    <div class="favSinger-error" style="display:none;"><p>Please select one of the option</p></div>
	</div>
    
    </div>
	</div>

	<div class="clearfix disabled">
	<h2>I want to pay</h2>
	<h2>How Often you wana pay?</h2>
	<div class="col-sm-6">
		<label class="showhide"><input type="radio" name="paytype" value="once" data-id="payOnce" checked="checked" class="payonce"> Once</label>
	</div>
	<div class="col-sm-6">
		<label class="showhide"><input type="radio" name="paytype" value="monthly" data-id="payMonthly" class="paymonthly"> Monthly</label>
	</div>

	<div class="payOnce" style="display:none;" id="payOnce">
		<label><input type="radio" name="payOnce" value="package2" class="payOnce"> 3 Month<b>Save 4%</b></label>
		<label><input type="radio" name="payOnce" value="package2" class="payOnce"> 6 Month<b>Save 8%</b></label>
		<label><input type="radio" name="payOnce" value="package3" class="payOnce"> 9 Month<b>Save 11%</b></label>
		<label><input type="radio" name="payOnce" value="package4" class="payOnce"> 1 year<b>Save 15%</b></label>
        <div class="payonce-error" style="display:none;"><p>Please select one of the option</p></div>	
	</div>

	<div class="payMonthly" style="display:none;" id="payMonthly">
		<h2>how many t-shirt per month you want?</h2>
		<label><input type="radio" name="payOnce" value="89" class="payMonthly"> 1 t-shirt <b>89 AED</b>a month</label>
		<label><input type="radio" name="payOnce" value="82" class="payMonthly"> 2 t-shirts <b>82 AED per T-shirt</b>a month 
		<span>save 14 AED</span></label>
		<label><input type="radio" name="payOnce" value="85" class="payMonthly"> 3 t-shirts <b>85 AED per t-shirt</b>a month 
		<span>save 14 AED</span></label>
	    <div class="paymonthly-error" style="display:none;"><p>Please select one of the option</p></div>	

	</div>

	</div>

	<div class="clearfix disabled">
	<h2>GIFT WRAP IT?</h2>
	<div class="col-sm-6">
		<label><input type="radio" name="giftwrapping" value="noyes" placeholder=""> NAH!</label>
	</div>
	<div class="col-sm-6">
		<label><input type="radio" name="giftwrapping" value="" placeholder="" checked="checked"> YA!</label>
	</div>
	</div>
	<button type="button" class="btn-checkout-big">CHECK OUT. YOU’RE ALL DONE HERE.</button>
</form>
<script>
$('.showhide').click(function() { 
var mine = $(this).children().attr("data-id"); 
if(mine == "gift-form"){
$("#"+mine).show();
}
else if(mine == "mine"){
$("#gift-form").hide();
$(".form-control").val("");
}
else if(mine == "women"){
$("#"+mine).show();
$(".size").prop("checked",false);
$(".shirttypes").prop("checked",false);
$(".favcolor").prop("checked",false);
$(".favSinger").prop("checked",false);
$(".favMovie").prop("checked",false);	
}
else if(mine == "man"){
$("#women").show();
$(".size").prop("checked",false);
$(".shirttypes").prop("checked",false);
$(".favcolor").prop("checked",false);
$(".favSinger").prop("checked",false);
$(".favMovie").prop("checked",false);
}
else if(mine == "payOnce"){
$("#"+mine).show();
$("#payMonthly").hide();
$(".payMonthly").prop("checked",false);
}
else if(mine == "payMonthly"){
$("#"+mine).show();
 $("#payOnce").hide();
 $(".payOnce").prop("checked",false);
}
});

$('.btn-checkout-big').click(function() { 
if(!$("input[name='size']:checked").val() || !$("input[name='shirttypes']:checked").val() ||
   !$("input[name='favcolor']:checked").val() || !$("input[name='favSinger']:checked").val() ||
   !$("input[name='favMovie']:checked").val() || !$("input[name='payOnce']:checked").val()){
    if($('.women').is(':checked') || $('.men').is(':checked') ){
     if (!$("input[name='size']:checked").val()) {
    		$(".size-error").show();
    	}
    if (!$("input[name='shirttypes']:checked").val() ) {
    		$(".shirttypes-error").show();
    	}
    if (!$("input[name='favcolor']:checked").val() ) {
    		$(".favcolor-error").show();
    	}
     if (!$("input[name='favSinger']:checked").val() ) {
        	$(".favSinger-error").show();
    	}
     if (!$("input[name='favMovie']:checked").val() ) {
    		$(".favMovie-error").show();
    	}
        $("#women").show();
     }
    if($('.payonce').is(':checked')){

    	if (!$("input[name='payOnce']:checked").val() ) {
    		$(".payonce-error").show();
    	}
    $(".payOnce").show();
    }
    if($('.paymonthly').is(':checked')){

       if (!$("input[name='payOnce']:checked").val() ) {
    		$(".paymonthly-error").show();
    	}
    	$(".payMonthly").show(); 
    }
}
else {
	 	
	 $("#myForm").submit();
	 }
});

</script>
<footer class="site-footer">
<?php include 'includes/footer.php'; ?>
</footer>
</body>

</html>