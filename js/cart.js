// A $( document ).ready() block.
$( document ).ready(function() {
  var price = $("#shirtprice").attr("data-id");
  var giftprice = $("#giftprice").attr("data-id");
  var shipprice = $("#shipprice").attr("data-id");
  var disprice = $("#disprice").attr("data-id");
  var totalprice = parseInt(price) + parseInt(giftprice) + parseInt(shipprice);
  var totalprice1 = parseInt(totalprice) - parseInt(disprice);
  $(".totalprice").html("<h5 id='totalprice' data-id='"+totalprice1+"'>"+totalprice1+"</h5>");
  $("#shipform .total").html("<input type='hidden' name='totalprice' id='totalprices' value='"+totalprice1+"'>");
  var price = document.getElementById("subscription").value;
  if(price == 89 || price == 3 || price == 6 || price == 9 || price == 12){
  	var qty = 1;
  	$(".mini-cart").html("<a href='cart.php'>My Cart <span>1</span></a>");
  	$(".mini-cart").show();
  }
  else if(price == 82){
  	var qty = 2;
  	$(".mini-cart").html("<a href='cart.php'>My Cart <span>2</span></a>");
  	$(".mini-cart").show();
  }
  else if(price == 75){
  	var qty = 3;
  	$(".mini-cart").html("<a href='cart.php'>My Cart <span>3</span></a>");
  	$(".mini-cart").show();
  }
});
function updatecart(){
  var price = $("#shirtprice").attr("data-id");
  var giftprice = $("#giftprice").attr("data-id");
  var shipprice = $("#shipprice").attr("data-id");
  var disprice = $("#disprice").attr("data-id");
  var totalprice = parseInt(price) + parseInt(giftprice) + parseInt(shipprice);
  var totalprice1 = parseInt(totalprice) - parseInt(disprice);
  $(".totalprice").html("<h5 id='totalprice' data-id='"+totalprice1+"'>"+totalprice1+"</h5>");
  $("#shipform .total").html("<input type='hidden' name='totalprice' id='totalprices' value='"+totalprice1+"'>");
  $(".update-cart").hide();
  $(".order").html("<button type='' class='btn-checkout' onclick='formsubmit()'>Place Your Order</button>");
}

$(".subscription").change(function(){
	var price = document.getElementById("subscription").value;
	var wrap = document.getElementById("wrapping").value;
	$(".update-cart").html("<p>Update your cart</p>");
	$(".order").html("<button type='' class='btn-checkout' onclick='formsubmit()' disabled >Place Your Order</button>");
	$(".update-cart").show();

	if(price == 89){
     $(".pricenew").html("<h5 id='shirtprice' data-id='"+price+"'>"+price+" AED</h5>");
     $("#shipform .sub").html("<input type='hidden' name='subscriptions' id='subscriptions' value='1 T-Shirt/Month'>");
     if(wrap == "yes"){
     $(".giftprice").html("<h5 id='giftprice' data-id='5'>5 AED</h5>(5 AED per month)");
     }
     else if(wrap == "no"){
     $(".giftprice").html("<h5 id='giftprice' data-id='0' >0 AED</h5>(5 AED per month)");
	 }
	 $(".disprice").html("<h5 id='shipprice' data-id='7'>7 AED</h5>(7 AED per month)");
	 $(".shipprice").html("<h5 id ='disprice' data-id='0'>0 AED</h5>");
	 $(".mini-cart").html("<a href='cart.php'>My Cart <span>1</span></a>");
	 $(".mini-cart").show();
	 
	}
	else if(price == 82){
	var newprice = 89 * 2;
     $(".pricenew").html("<h5 id='shirtprice' data-id='"+newprice+"'>"+newprice+" AED</h5>");
     if(wrap == "yes"){
     $(".giftprice").html("<h5 id='giftprice' data-id='5'>5 AED</h5>(5 AED per month)");
     }
     else if(wrap == "no"){
     $(".giftprice").html("<h5 id='giftprice' data-id='0'>0 AED</h5>(5 AED per month)");
	 }
	 $(".disprice").html("<h5 id='shipprice' data-id='7'>7 AED</h5>(7 AED per month)");
	 $(".shipprice").html("<h5 id ='disprice' data-id='14'>14 AED</h5>");
	 $("#shipform .sub").html("<input type='hidden' name='subscriptions' id='subscriptions' value='2 T-Shirt/Month'>");
	$(".mini-cart").html("<a href='cart.php'>My Cart <span>2</span></a>");
	$(".mini-cart").show()
	}
	else if(price == 75){
		var newprice = 89 * 3;
     $(".pricenew").html("<h5 id='shirtprice' data-id='"+newprice+"'>"+newprice+" AED</h5>");
     if(wrap == "yes"){
     $(".giftprice").html("<h5 id='giftprice' data-id='5'>5 AED</h5>(5 AED per month)");
     }
     else if(wrap == "no"){
     $(".giftprice").html("<h5 id='giftprice' data-id='0'>0 AED</h5>(5 AED per month)");
	 }
	 $(".disprice").html("<h5 id='shipprice' data-id='7'>7 AED</h5>(7 AED per month)");
	 $(".shipprice").html("<h5 id ='disprice' data-id='42'>42 AED</h5>");
	 $("#shipform .sub").html("<input type='hidden' name='subscriptions' id='subscriptions' value='3 T-Shirt/Month'>");
	$(".mini-cart").html("<a href='cart.php'>My Cart <span>3</span></a>");
	$(".mini-cart").show();
	}
	else{
	var newprice = 89 * price;
	$(".pricenew").html("<h5 id='shirtprice' data-id='"+newprice+"'>"+newprice+" AED</h5>");
	if(price == 3){
	$(".timeperiod").html(
	"<option value='3'>3 Months</option><option value='6'>6 Months</option><option value='9'>9 Months</option><option value='12'>1 Year</option>");
    $(".shipprice").html("<h5 id ='disprice' data-id='10.68'>10.68 AED</h5>");
    $("#shipform .sub").html("<input type='hidden' name='subscriptions' id='subscriptions' value='1 T-Shirt/3 Months'>");
   
    }
	else if(price == 6){
	$(".timeperiod").html("<option value='6'>6 Months</option><option value='3'>3 Months</option><option value='9'>9 Months</option><option value='12'>1 Year</option>");
    $(".shipprice").html("<h5 id ='disprice' data-id='42.72'>42.72 AED</h5>");
    $("#shipform .sub").html("<input type='hidden' name='subscriptions' id='subscriptions' value='1 T-Shirt/6 Months'>");

    }
	else if(price == 9){
	$(".timeperiod").html("<option value='9'>9 Months</option><option value='3'>3 Months</option><option value='6'>6 Months</option><option value='12'>1 Year</option>");
    $(".shipprice").html("<h5 id ='disprice' data-id='88.11'>88.11 AED</h5>");
    $("#shipform .sub").html("<input type='hidden' name='subscriptions' id='subscriptions' value='1 T-Shirt/9 Months'>");
    
    }
	else if(price == 12){
	$(".timeperiod").html("<option value='12'>1 Year</option><option value='3'>3 Months</option><option value='6'>6 Months</option><option value='9'>9 Months</option>");
	$(".shipprice").html("<h5 id ='disprice' data-id='160.2'>160.2 AED</h5>");
	$("#shipform .sub").html("<input type='hidden' name='subscriptions' id='subscriptions' value='1 T-Shirt/1 Year'>");
	
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
    $(".mini-cart").html("<a href='cart.php'>My Cart <span>1</span></a>");
    $(".mini-cart").show();
}
});

$(".wraping").change(function(){

	var wrap = document.getElementById("wrapping").value;
    var price = document.getElementById("subscription").value;
    $(".update-cart").html("<p>Update your cart</p>");
	$(".order").html("<button type='' class='btn-checkout' onclick='formsubmit()' disabled >Place Your Order</button>");
	$(".update-cart").show();
	if(wrap == "yes"){
	$("#ship form .giftwrap").html("<input type='hidden' name='gifts' id='gifts' value='yes'>");
	if(price == 89){
     $(".giftprice").html("<h5 id='giftprice' data-id='5'>5 AED</h5>(5 AED per month)");
     }
    else if(price == 82){
     $(".giftprice").html("<h5 id='giftprice' data-id='5'>5 AED</h5>(5 AED per month)");
     }
     else if(price == 75){
     $(".giftprice").html("<h5 id='giftprice' data-id='5'>5 AED</h5>(5 AED per month)");
     }
     else{
     var giftprice = price * 5;
     $(".giftprice").html("<h5 id='giftprice' data-id='"+giftprice+"'>"+giftprice+"</h5>(5 AED per month)");
     }
       
	}
	else if(wrap == "no"){
	$(".giftprice").html("<h5 id='giftprice' data-id='0'>0 AED</h5>(5 AED per month)");
	$("#ship form .giftwrap").html("<input type='hidden' name='gifts' id='gifts' value='no'>");

	}

    
});


$(".timeperiod").change(function(){
	var price = document.getElementById("timeperiod").value;
	var wrap = document.getElementById("wrapping").value;
	$(".update-cart").html("<p>Update your cart</p>");
	$(".update-cart").show();
	$(".order").html("<button type='' class='btn-checkout' onclick='formsubmit()' disabled >Place Your Order</button>");
	var newprice = 89 * price;
	$(".pricenew").html("<h5 id='shirtprice' data-id='"+newprice+"'>"+newprice+" AED</h5>");
	$(".mini-cart").html("<a href='cart.php'>My Cart <span>1</span></a>");
	$(".mini-cart").show();
	if(price == 3){
	$(".subscription").html(
	"<option value='3'>1 T-Shirt/3 Months</option><option value='6'>1 T-Shirt/6 Months</option><option value='9'>1 T-Shirt/9 Months</option><option value='12'>1 T-Shirt/1 Year</option>");
    $(".shipprice").html("<h5 id='disprice' data-id='10.68'>10.68 AED</h5>");
    $("#shipform .sub").html("<input type='hidden' name='subscriptions' id='subscriptions' value='1 T-Shirt/3 Months'>");
    
    }
	else if(price == 6){
	$(".subscription").html("<option value='6'>1 T-Shirt/6 Months</option><option value='3'>1 T-Shirt/3 Months</option><option value='9'>1 T-Shirt/9 Months</option><option value='12'>1 T-Shirt/1 Year</option>");
    $(".shipprice").html("<h5 id='disprice' data-id='42.72'>42.72 AED</h5>");
    $("#shipform .sub").html("<input type='hidden' name='subscriptions' id='subscriptions' value='1 T-Shirt/6 Months'>");
    
    }
	else if(price == 9){
	$(".subscription").html("<option value='9'>1 T-Shirt/9 Months</option><option value='3'>1 T-Shirt/3 Months</option><option value='6'>1 T-Shirt/6 Months</option><option value='12'>1 T-Shirt/1 Year</option>");
    $(".shipprice").html("<h5 id='disprice' data-id='88.11'>88.11 AED</h5>");
    $("#shipform .sub").html("<input type='hidden' name='subscriptions' id='subscriptions' value='1 T-Shirt/9 Months'>");
    
    }
	else if(price == 12){
	$(".subscription").html("<option value='12'>1 T-Shirt/1 Year</option><option value='3'>1 T-Shirt/3 Months</option><option value='6'>1 T-Shirt/6 Months</option><option value='9'>1 T-Shirt/9 Months</option>");
	$(".shipprice").html("<h5 id='disprice' data-id='160.2'>160.2 AED</h5>");
	$("#shipform .sub").html("<input type='hidden' name='subscriptions' id='subscriptions' value='1 T-Shirt/1 Year'>");
	
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

function formsubmit(){
	$("#shipform").submit();
}


