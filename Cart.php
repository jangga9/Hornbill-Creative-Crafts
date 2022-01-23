<?php include("header.php"); 
session_start();
 ?>
<!DOCTYPE html>
		<meta charset="utf-8">
		<meta http-equiv="X-UA_Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, intial-scale=1.0">
		<title>Cart</title>
		<!--page-icon------------>
		<link rel="shortcut icon" href="images/ShortcutIcon.png">
		<!--stylesheet------------->
		<link type="text/css" rel="stylesheet" href="mainstylesheet.css">
		<!--light-slider.css------------->
		<link rel="stylesheet" type="text/css" href="css/lightslider.css">
        <link rel="stylesheet" type="text/css" href="css/mainstylesheet.css">

		<!--Jquery-------------------->
		<script type="text/javascript" src="js/Jquery.js"></script>
		<!--lightslider.js--------------->
		<script type="text/javascript" src="js/lightslider.js"></script>
<title>Cart</title>
</head>
<body><br><br>

	<div class="container">
		<div class="row">
		    <div style= "background-color:#f6f1df;box-shadow: 0px 15px 20px rgba(0,0,0,0.1);">
			   <h1 style="text-align:center" >MY CART</h1>
			</div>
			
			
			<div align="center" style=" padding-bottom: 0px; height: 80px;
  width: 100%;"><br><br>
<div  style= "background-color:#f6f1df;box-shadow: 0px 15px 20px rgba(0,0,0,0.1); height: 680px;padding:90px;">
				<table style="padding: 0px; margin-left:0%;
  margin-right: 0%;">
  <thead >
    <tr>
      <th style="padding:40px;">Order No.</th>
      <th style="padding:40px;">Service Name</th>
      <th style="padding:50px;">Service Price </th>
	  <th style="padding:50px;">Status</th>
      
    </tr>
  </thead>
  <tbody align="center">
  <?php
    $total=0;
    if(isset($_SESSION['cart']))
	{
     foreach($_SESSION['cart']as $key => $value)
	 {
		$total=$total+$value['Price'];
		echo"
		<tr>
			<td><br><br>1</td>
			<td><br><br>$value[Name]</td>
			<td><br><br>RM$value[Price]</td>
			<td>
		    <form action='' method='POST'>
			<button name='Remove' class='btn btn-sm btn-outline-danger my-0'>REMOVE</button>
			<input type='hidden' name='Remove' value'$value[Remove]'>
			</form>
			</td>
		</tr>
		";
	 }
	}
   ?>
  
 
  </tbody>
</table>

</div>
<div class="col-lg-4">
<div  style= "background-color:white;box-shadow: 0px 15px 20px rgba(0,0,0,0.1); height: 380px;padding:90px;">
<h4 style="text-padding:20px">Cart Summary:</h4><br>


<h5 class="text-right">RM<?php echo $total ?></h5>
<br>
<form method="post" action="Details.php">
	<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Cash On Delivery
  </label><br><br>
	<button style= "background-color:#ead790;color:black;border-radius: 20px; border:none;font-size: 12px;width:50%;height:40px; padding: 15px 32px;
    font-weight: 600;" class="btn btn-primary btn-block" type="submit"> Proceed To Checkout </button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
