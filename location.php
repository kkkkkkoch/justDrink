<html>

<?php


mysql_connect("localhost","root","root");
mysql_select_db("waterDB");
$strSQL ="INSERT INTO product_order";
$strSQL .= "(product_name,product_amount,product_date,product_time) VALUES ('".$_POST["product_name"]."','".$_POST["product_amount"]."','".$_POST["product_date"]."','".$_POST["product_time"]."')";
$objQuery = mysql_query($strSQL);
?>

<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
@import url("font/stylesheet.css");
@import url("font/stylesheet.css");
body,td,th {
	font-family: "ralewaybold";
	font-size: 14px;
}
	</style>


</head>

<body>
<div id="header">

	<form name="form2" method="post" action="finish.php">
		<a href="order.php"><img src="pic/back.png" height="42" width="42"/></a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		L O C A T I O N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<input type="image" src="pic/submit.png" alt="Submit feedback">
		<hr width="125" align="center" size="3" color="f3777f">
	</div>
	<br>
	<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Location 
<br>
<br>
<form>
  <input type="radio" name="address" value="no" checked> <br><h2>Input your location<h2>
  <br>
  
 
  &nbsp;&nbsp;&nbsp;&nbsp;<textarea name="address" placeholder="address" equired /></textarea>
<br>
<br>
<br>
<hr width="100%" align="center" size="1" color="ededed">
  <input type="radio" name="address" value="no"><br> <h2>Take product by yourself</h2>
  <br>


<div id="googleMap" style="width:100%;height:200px;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgntetH_woV4q81CE40nLLiz5_4rSL-5I&callback=myMap"></script>
<br>
<hr width="100%" align="center" size="1" color="ededed">
</form>



</body>
</html>