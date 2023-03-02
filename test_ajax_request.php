<!doctype html>
<html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 </head>
 <body>
 
 
	<h3 id="text">
	456
	</h3> 
 
 
 
 
 
 
 
 
</body>
<script type="text/javascript">
var text = $("#text").html();

/*
$.post("URL", {
	DATA//這裡要下陣列
}, function(result){
	"收到做什麼";
}, "json");

*/

$.post("test_ajax_respond.php", {
	name : "江**",
	phone_number : "0910979899"	
}, function(result){	
	console.log(result);
}, "json");

</script> 	



</html>
