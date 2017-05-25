$(document).ready(function(){
var checkkey = function(){ //checks is it worth to update the amount of beers by typing it
var val = parseInt($(this).val());
if((Number.isInteger(val) == true) && val != $(this).prev(":hidden").val())
$(this).next(":submit").removeAttr("disabled");
else $(this).next(":submit").attr("disabled", true);
}
var checkminus = function(){ //checks is it worth to update the amount of beers by clicking minus button
var val = parseInt($(this).prev().prev().prev().val());
if((Number.isInteger(val) == true) && val != $(this).prev().prev().prev().prev().val())//i know it looks terrible but .prev(":text") doesn't work. dunno

$(this).prev().prev().removeAttr("disabled");
else $(this).prev().prev().attr("disabled", true);
}
var checkplus = function(){ //checks is it worth to update the amount of beers by clicking plus button
var val = parseInt($(this).prev().prev().val());
if((Number.isInteger(val) == true) && val !=$(this).prev().prev().prev().val())
$(this).prev().removeAttr("disabled");
else $(this).prev().attr("disabled", true);
}
$(".minus").bind("click", function(){ // the subtract function after clicking minus button
var val = parseInt($(this).prev().prev().prev().val());var minus =function(){
if(val > 0)
return val-1;
else
return 0;
}
$(this).prev().prev().prev().val(minus);
})
$(".plus").bind("click", function(){ //the addition function after clicking plus button
var val = parseInt($(this).prev().prev().val());
var plus =function(){
if(val >= 0)
return val+1;
else
return 0;
}
$(this).prev().prev().val(plus);
})
$(":text").bind("keyup", checkkey)
$(".minus").bind("click", checkminus)
$(".plus").bind("click", checkplus)
});

