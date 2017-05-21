<?php
session_start();
//session_destroy();
?>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css">
<script src="jquery.min.js"></script>
</head>
<body>
<form action="basket.php" method="post">
<input type="text" name="val" value="<?php if(isset($_SESSION['val'])) echo $_SESSION['val']; else echo "0"; ?>">
<input disabled type="submit" name="kosz" value="do kosza">
</form> 
<div class="plus">plus</div>
<div class="minus">minus</div>
<script>
//var val =parseInt($(":text").val());
var func = function(){
var val =parseInt($(":text").val());
if(Number.isInteger(val) == true) // == <?php echo "3"; ?>)
$(":submit").removeAttr("disabled");
else
{
$(":submit").attr("disabled", true);
//alert ("yo");
}
}
$(document).ready(function(){

$(".minus").bind("click", function(){
var val =parseInt($(":text").val());
function minus(){
if(val > 0)
return val-1;
else
return 0;
}
$(":text").val(minus());
})
$(":text").bind("keyup", func)
$(".minus").bind("click", func)
$(".plus").bind("click", func)
//$(.plus).()

});

</script>
<?php

echo $_SESSION['val'];
print_r($_SESSION);
?>
</body>
</html>
