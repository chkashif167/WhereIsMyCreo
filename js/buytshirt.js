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
if($('.gift').is(':checked') && $('.women').is(':checked')){
	//alert("hello")
   $(".first").text("She wears a..");
   $(".second").text("She Likes..");
   $(".third").text("Her Favorite color is..");
   $(".fourth").text("Her Favorite movie is..");
   $(".fifth").text("Her Favorite singer is..");
}
if($('.gift').is(':checked') && $('.men').is(':checked')){
   $(".first").text("He wears a..");
   $(".second").text("He Likes..");
   $(".third").text("His Favorite color is..");
   $(".fifth").text("His Favorite singer is..");
   $(".fourth").text("His Favorite movie is..");
}
if($('.mine').is(':checked') && $('.women').is(':checked') || $('.mine').is(':checked') && $('.men').is(':checked')){
   $(".first").text("Give me");
   $(".second").text("Make it a");
   $(".third").text("My Favorite color is..");
   $(".fourth").text("My Favorite movie is..");
   $(".fifth").text("My Favorite singer is..");
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
    else{
    	$(".size-error").hide();
    }
    if (!$("input[name='shirttypes']:checked").val() ) {
    		$(".shirttypes-error").show();
    	}
    else{
    	$(".shirttypes-error").hide();
    }
    if (!$("input[name='favcolor']:checked").val() ) {
    		$(".favcolor-error").show();
    	}
    else{
    	$(".favcolor-error").hide();
    }
     if (!$("input[name='favSinger']:checked").val() ) {
        	$(".favSinger-error").show();
    	}
    else{
    	$(".favSinger-error").hide();
    }
     if (!$("input[name='favMovie']:checked").val() ) {
    		$(".favMovie-error").show();
    	}
    else{
    	$(".favMovie-error").hide();
    }
        $("#women").show();
     }
    if($('.payonce').is(':checked')){

    	if (!$("input[name='payOnce']:checked").val() ) {
    		$(".payonce-error").show();
    	}
    else{
    	$(".payonce-error").hide();
    }
    $(".payOnce").show();
    }
    if($('.paymonthly').is(':checked')){

       if (!$("input[name='payOnce']:checked").val() ) {
    		$(".paymonthly-error").show();
    	}
    else{
    	$(".paymonthly-error").hide();
    }
    	$(".payMonthly").show(); 
    }
}
else {
	 	
	 $("#myForm").submit();
	 }
});
