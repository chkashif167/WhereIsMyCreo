// A $( document ).ready() block.
$( document ).ready(function() {
  var price = $("#shirtprice").attr("data-id");
  var giftprice = $("#giftprice").attr("data-id");
  var shipprice = $("#shipprice").attr("data-id");
  var disprice = $("#disprice").attr("data-id");
  var totalprice = parseInt(price) + parseInt(giftprice) + parseInt(shipprice);
  var totalprice1 = parseInt(totalprice) - parseInt(disprice);
  $(".totalprice").html("<h5 id='totalprice'>"+totalprice1+"</h5>");

});
function updatecart(){
  var price = $("#shirtprice").attr("data-id");
  var giftprice = $("#giftprice").attr("data-id");
  var shipprice = $("#shipprice").attr("data-id");
  var disprice = $("#disprice").attr("data-id");
  var totalprice = parseInt(price) + parseInt(giftprice) + parseInt(shipprice);
  var totalprice1 = parseInt(totalprice) - parseInt(disprice);
  $(".totalprice").html("<h5 id='totalprice'>"+totalprice1+"</h5>");
}

$(".subscription").change(function(){
	var price = document.getElementById("subscription").value;
	var wrap = document.getElementById("wrapping").value;
	if(price == 89){
     $(".pricenew").html("<h5 id='shirtprice' data-id='"+price+"'>"+price+" AED</h5>");
     if(wrap == "yes"){
     $(".giftprice").html("<h5 id='giftprice' data-id='5'>5 AED</h5>(5 AED per month)");
     }
     else if(wrap == "no"){
     $(".giftprice").html("<h5 id='giftprice' data-id='0' >0 AED</h5>(5 AED per month)");
	 }
	 $(".disprice").html("<h5 id='shipprice' data-id='7'>7 AED</h5>(7 AED per month)");
	 $(".shipprice").html("<h5 id ='disprice' data-id='0'>0 AED</h5>");
	}
	else if(price == 82){
	var newprice = 89 * 2;
     $(".pricenew").html("<h5 id='shirtprice' data-id='"+newprice+"'>"+newprice+" AED</h5>");
     if(wrap == "yes"){
     $(".giftprice").html("<h5 id='giftprice' data-id='10'>10 AED</h5>(5 AED per month)");
     }
     else if(wrap == "no"){
     $(".giftprice").html("<h5 id='giftprice' data-id='0'>0 AED</h5>(5 AED per month)");
	 }
	 $(".disprice").html("<h5 id='shipprice' data-id='7'>7 AED</h5>(7 AED per month)");
	 $(".shipprice").html("<h5 id ='disprice' data-id='14'>14 AED</h5>");
	}
	else if(price == 75){
		var newprice = 89 * 3;
     $(".pricenew").html("<h5 id='shirtprice' data-id='"+newprice+"'>"+newprice+" AED</h5>");
     if(wrap == "yes"){
     $(".giftprice").html("<h5 id='giftprice' data-id='15'>15 AED</h5>(5 AED per month)");
     }
     else if(wrap == "no"){
     $(".giftprice").html("<h5 id='giftprice' data-id='0'>0 AED</h5>(5 AED per month)");
	 }
	 $(".disprice").html("<h5 id='shipprice' data-id='7'>7 AED</h5>(7 AED per month)");
	 $(".shipprice").html("<h5 id ='disprice' data-id='42'>42 AED</h5>");
	}
	else{
	var newprice = 89 * price;
	$(".pricenew").html("<h5 id='shirtprice' data-id='"+newprice+"'>"+newprice+" AED</h5>");
	if(price == 3){
	$(".timeperiod").html(
	"<option value='3'>3 Months</option><option value='6'>6 Months</option><option value='9'>9 Months</option><option value='12'>1 Year</option>");
    $(".shipprice").html("<h5 id ='disprice' data-id='10.68'>10.68 AED</h5>");
    }
	else if(price == 6){
	$(".timeperiod").html("<option value='6'>6 Months</option><option value='3'>3 Months</option><option value='9'>9 Months</option><option value='12'>1 Year</option>");
    $(".shipprice").html("<h5 id ='disprice' data-id='42.72'>42.72 AED</h5>");
    }
	else if(price == 9){
	$(".timeperiod").html("<option value='9'>9 Months</option><option value='3'>3 Months</option><option value='6'>6 Months</option><option value='12'>1 Year</option>");
    $(".shipprice").html("<h5 id ='disprice' data-id='88.11'>88.11 AED</h5>");
    }
	else if(price == 12){
	$(".timeperiod").html("<option value='12'>1 Year</option><option value='3'>3 Months</option><option value='6'>6 Months</option><option value='9'>9 Months</option>");
	$(".shipprice").html("<h5 id ='disprice' data-id='160.2'>160.2 AED</h5>");
	}
	if(wrap == "yes"){
	var giftpric = 5 * price;
     $(".giftprice").html("<h5 id='giftprice' data-id='"+giftpric+"'>"+giftpric+" AED</h5>(5 AED per month)");
     }
    else if(wrap == "no"){
    $(".giftprice").html("<h5 id='giftprice' data-id='0' >0 AED</h5>(5 AED per month)");
	 }
	var disprice = 7 *price;
	$(".disprice").html("<h5 id='shipprice' data-id='"+disprice+"'>"+disprice+" AED</h5>(7 AED per month)");
}
});

$(".wraping").change(function(){

	var wrap = document.getElementById("wrapping").value;
    var price = document.getElementById("subscription").value;
	if(wrap == "yes"){
	if(price == 89){
     $(".giftprice").html("<h5 id='giftprice' data-id='5'>5 AED</h5>(5 AED per month)");
     }
    else if(price == 82){
     $(".giftprice").html("<h5 id='giftprice' data-id='10'>10 AED</h5>(5 AED per month)");
     }
     else if(price == 75){
     $(".giftprice").html("<h5 id='giftprice' data-id='15'>15 AED</h5>(5 AED per month)");
     }
     else{
     var giftprice = price * 5;
     $(".giftprice").html("<h5 id='giftprice' data-id='"+giftprice+"'>"+giftprice+"</h5>(5 AED per month)");
     }
       
	}
	else if(wrap == "no"){
	$(".giftprice").html("<h5 id='giftprice' data-id='0'>0 AED</h5>(5 AED per month)");

	}

    
});


$(".timeperiod").change(function(){
	var price = document.getElementById("timeperiod").value;
	var wrap = document.getElementById("wrapping").value;
	var newprice = 89 * price;
	$(".pricenew").html("<h5 id='shirtprice' data-id='"+newprice+"'>"+newprice+" AED</h5>");
	if(price == 3){
	$(".subscription").html(
	"<option value='3'>1 T-Shirt/3 Months</option><option value='6'>1 T-Shirt/ T-6 Months</option><option value='9'>1 T-Shirt/9 Months</option><option value='12'>1 T-Shirt/1 Year</option>");
    $(".shipprice").html("<h5 id='disprice' data-id='10.68'>10.68 AED</h5>");
    }
	else if(price == 6){
	$(".subscription").html("<option value='6'>1 T-Shirt/6 Months</option><option value='3'>1 T-Shirt/3 Months</option><option value='9'>1 T-Shirt/9 Months</option><option value='12'>1 T-Shirt/1 Year</option>");
    $(".shipprice").html("<h5 id='disprice' data-id='42.72'>42.72 AED</h5>");
    }
	else if(price == 9){
	$(".subscription").html("<option value='9'>1 T-Shirt/9 Months</option><option value='3'>1 T-Shirt/3 Months</option><option value='6'>1 T-Shirt/6 Months</option><option value='12'>1 T-Shirt/1 Year</option>");
    $(".shipprice").html("<h5 id='disprice' data-id='88.11'>88.11 AED</h5>");
    }
	else if(price == 12){
	$(".subscription").html("<option value='12'>1 T-Shirt/1 Year</option><option value='3'>1 T-Shirt/3 Months</option><option value='6'>1 T-Shirt/6 Months</option><option value='9'>1 T-Shirt/9 Months</option>");
	$(".shipprice").html("<h5 id='disprice' data-id='160.2'>160.2 AED</h5>");
	}
	if(wrap == "yes"){
	var giftpric = 5 * price;
     $(".giftprice").html("<h5 id='giftprice' data-id='"+giftpric+"'>"+giftpric+" AED</h5>(5 AED per month)");
     }
    else if(wrap == "no"){
    $(".giftprice").html("<h5 data-id='0'>0 AED</h5>(5 AED per month)");
	 }
	var disprice = 7 *price;
	$(".disprice").html("<h5 id='shipprice' data-id='"+disprice+"'>"+disprice+" AED</h5>(7 AED per month)");
});


