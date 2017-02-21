

<html>
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


<form name="form1" method="post" action="location.php" >

	<div id="header">
		<img src="pic/back.png" height="42" width="42"/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		O R D E R&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		<input type="image" src="pic/submit.png" name="submit">
		<hr width="125" align="left" size="3" color="f3777f" >
	</div>
	<br>
	<br>
	&nbsp;&nbsp;&nbsp; Select Product <br>
	
	&nbsp;&nbsp;&nbsp;&nbsp;



  <div class="select-sim" id="product">
  &nbsp;&nbsp;<div class="options">
    <div class="option">
      <img src="pic/P1.png" alt="" width="82"/> 
     &nbsp;
        <input type="radio" name="product_name" value="Anchan Lemon Wate" id="Anchan Lemon Water"/> 
    </div>

    <div class="option">
        <img src="pic/P2.png" alt="" width="82"/> 
        &nbsp;
        <input type="radio" name="product_name" value="Aloe Wate" id="Aloe Water" />
    </div>

    <div class="option">
    	<img src="pic/P3.png" alt="" width="82"/> 
    	&nbsp;
      	<input type="radio" name="product_name" value="flower Tea Water" id="flower Tea Water" />
    </div>

    <div class="option">
    	<img src="pic/P4.png" alt="" width="82"/> 
    	&nbsp;
      	<input type="radio" name="product_name" value="kajeab Water" id="kajeab Water" />
    </div>

  </div>
 

	
	<br>
	<br>
	<br>
	&nbsp;&nbsp;&nbsp; Amounts <br>
	&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" id="amount" name="product_amount" placeholder="0" min="1" max="30"required/> 
	<br>
	<br>
	<br>
	&nbsp;&nbsp;&nbsp; Datetime <br>
	&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" id="orderdate" name="product_date" placeholder="date" required />
	<br>
	&nbsp;&nbsp;&nbsp; <input type="time" id="ordertime" name="product_time" placeholder="time" required />



</form>
</body>
</html>