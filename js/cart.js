// A $( document ).ready() block.
$( document ).ready(function() {
  var price = document.getElementById("shirtprice").value;
  var giftprice = document.getElementById("giftprice").value;
  var shipprice = document.getElementById("shipprice").value;
  var shipprice = document.getElementById("disprice").value;
  var totalprice = price + giftprice + shipprice;


});
$(".subscription").change(function(){
	var price = document.getElementById("subscription").value;
	var wrap = document.getElementById("wrapping").value;
	if(price == 89){
     $(".pricenew").html("<h5 id='shirtprice'>"+price+" AED</h5>");
     if(wrap == "yes"){
     $(".giftprice").html("<h5 id='giftprice'>5 AED</h5>(5 AED per month)");
     }
     else if(wrap == "no"){
     $(".giftprice").html("<h5 id='giftprice'>0 AED</h5>(5 AED per month)");
	 }
	 $(".disprice").html("<h5 id='shipprice'>7 AED</h5>(7 AED per month)");
	 $(".shipprice").html("<h5 id ='disprice'>0 AED</h5>");
	}
	else if(price == 82){
	var newprice = 89 * 2;
     $(".pricenew").html("<h5 id='shirtprice'>"+newprice+" AED</h5>");
     if(wrap == "yes"){
     $(".giftprice").html("<h5 id='giftprice'>10 AED</h5>(5 AED per month)");
     }
     else if(wrap == "no"){
     $(".giftprice").html("<h5 id='giftprice'>0 AED</h5>(5 AED per month)");
	 }
	 $(".disprice").html("<h5 id='shipprice'>7 AED</h5>(7 AED per month)");
	 $(".shipprice").html("<h5 id ='disprice'>14 AED</h5>");
	}
	else if(price == 75){
		var newprice = 89 * 3;
     $(".pricenew").html("<h5 id='shirtprice'>"+newprice+" AED</h5>");
     if(wrap == "yes"){
     $(".giftprice").html("<h5 id='giftprice'>15 AED</h5>(5 AED per month)");
     }
     else if(wrap == "no"){
     $(".giftprice").html("<h5 id='giftprice'>0 AED</h5>(5 AED per month)");
	 }
	 $(".disprice").html("<h5 id='shipprice'>7 AED</h5>(7 AED per month)");
	 $(".shipprice").html("<h5 id ='disprice'>42 AED</h5>");
	}
	else{
	var newprice = 89 * price;
	$(".pricenew").html("<h5 id='shirtprice'>"+newprice+" AED</h5>");
	if(price == 3){
	$(".timeperiod").html(
	"<option value=''>3 Months</option><option value=''>6 Months</option><option value=''>9 Months</option><option value=''>1 Year</option>");
    $(".shipprice").html("<h5 id ='disprice'>10.68 AED</h5>");
    }
	else if(price == 6){
	$(".timeperiod").html("<option value=''>6 Months</option><option value=''>3 Months</option><option value=''>9 Months</option><option value=''>1 Year</option>");
    $(".shipprice").html("<h5 id ='disprice'>42.72 AED</h5>");
    }
	else if(price == 9){
	$(".timeperiod").html("<option value=''>9 Months</option><option value=''>3 Months</option><option value=''>6 Months</option><option value=''>1 Year</option>");
    $(".shipprice").html("<h5 id ='disprice'>88.11 AED</h5>");
    }
	else if(price == 12){
	$(".timeperiod").html("<option value=''>1 Year</option><option value=''>3 Months</option><option value=''>6 Months</option><option value=''>9 Months</option>");
	$(".shipprice").html("<h5 id ='disprice'>160.2 AED</h5>");
	}
	if(wrap == "yes"){
	var giftpric = 5 * price;
     $(".giftprice").html("<h5 id='giftprice'>"+giftpric+" AED</h5>(5 AED per month)");
     }
    else if(wrap == "no"){
    $(".giftprice").html("<h5 id='giftprice'>0 AED</h5>(5 AED per month)");
	 }
	var disprice = 7 *price;
	$(".disprice").html("<h5 id='shipprice'>"+disprice+" AED</h5>(7 AED per month)");
}

$(".wrapping").change(function(){
	var wrap = document.getElementById("wrapping").value;
    var price = document.getElementById("subscription").value;
	if(wrap == "yes"){
	if(price == 89){
     $(".giftprice").html("<h5 id='giftprice'>5 AED</h5>(5 AED per month)");
     }
    else if(price == 82){
     $(".giftprice").html("<h5 id='giftprice'>10 AED</h5>(5 AED per month)");
     }
     else if(price == 75){
     $(".giftprice").html("<h5 id='giftprice'>15 AED</h5>(5 AED per month)");
     }
     else{
     var giftprice = price * 5;
     $(".giftprice").html("<h5 id='giftprice'>"+giftprice+"</h5>(5 AED per month)");
     }
       
	}
	else if(wrap == "no"){
	$(".giftprice").html("<h5 id='giftprice'>0 AED</h5>(5 AED per month)");

	}

    
}
});

$(".timeperiod").change(function(){
	var price = document.getElementById("timeperiod").value
	var wrap = document.getElementById("wrapping").value
	var newprice = 89 * price;
	$(".pricenew").html("<h5>"+newprice+" AED</h5>");
	if(price == 3){
	$(".timeperiod").html(
	"<option value=''>3 Months</option><option value=''>6 Months</option><option value=''>9 Months</option><option value=''>1 Year</option>");
    $(".shipprice").html("<h5>10.68 AED</h5>");
    }
	else if(price == 6){
	$(".timeperiod").html("<option value=''>6 Months</option><option value=''>3 Months</option><option value=''>9 Months</option><option value=''>1 Year</option>");
    $(".shipprice").html("<h5>42.72 AED</h5>");
    }
	else if(price == 9){
	$(".timeperiod").html("<option value=''>9 Months</option><option value=''>3 Months</option><option value=''>6 Months</option><option value=''>1 Year</option>");
    $(".shipprice").html("<h5>88.11 AED</h5>");
    }
	else if(price == 12){
	$(".timeperiod").html("<option value=''>1 Year</option><option value=''>3 Months</option><option value=''>6 Months</option><option value=''>9 Months</option>");
	$(".shipprice").html("<h5>160.2 AED</h5>");
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