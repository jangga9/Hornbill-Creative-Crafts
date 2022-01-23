<!DOCTYPE html>
<?php include("header.php"); 
 ?>
<html>
    <head>
	    <title>Payment Details</title>
	    <script>
		function passvalues()
		{
		  var fullname=document.getElementById("fullname").value;
		  localStorage.setItem("fullname",fullname);
		  var idNum=document.getElementById("idNum").value;
		  localStorage.setItem("idNum",idNum);
		  var date=document.getElementById("date").value;
		  localStorage.setItem("date",date);
		  var address=document.getElementById("address").value;
		  localStorage.setItem("address",address);
		  var addrequest=document.getElementById("addrequest").value;
		  localStorage.setItem("addrequest",addrequest);
		  var phone=document.getElementById("phone").value;
		  localStorage.setItem("phone",phone);
		  var email=document.getElementById("email").value;
		  localStorage.setItem("email",email);
		}
		
		</script>

        <script>
        function myFunction() {
        alert("Payment successful!");
        }
        </script>
		
		
		
    <meta charset="utf-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="css/details.css">
    
	</head>

    <body>
	
        
            
		<div class = "col-lg-12 text-center border rounded  my-5 ">
			   <h1 style= "background-color:#f6f1df;box-shadow: 0px 15px 20px rgba(0,0,0,0.1);">PAYMENT DETAILS</h1>
			</div>
		
		<form method="post" action="receipt.php">
        <div class ="paymentcontainer">
		
		
		<div class="ServiceDetail"> 
        <h2>Service Detail</h2>
		<br>
		<p><label>Additional Request</label></p>
        <p><input class="w3-input w3-border" name="addrequest" id="addrequest" type="text" placeholder="Special notes, colouring etc."></p>
		
        <p><label>Booking Date</label></p>
        <p><input class="w3-input w3-border" name="date" id="date" type="date" placeholder="21/03/2021" required></p>

        <p><label>Delivery Address</label></p>
        <p><input class="w3-input w3-border" name="address" id="address" type="text" placeholder="Kuching, Sarawak" required></p>
 

        <p><label>Promo Code</label></p>
        <p><input class="w3-input w3-border" name="promo" id="promo" type="text" placeholder=""></p>
        </div>
		 
		 
		 
		 
		 
		 
		<div class="CustomerDetail">
  	    <h2>Your Detail</h2>
		<br>
        <p><label >Full name</label></p>
	    <p><input type="text" name="fullname" id="fullname" placeholder="Sarah Sinclair" pattern="[a-​zA-Z\s]{2,}" required></p>
	
	    <p><label >Identitiy Number</label></p>
	    <p><input type="text" name="idNum" id="idNum" placeholder="111144-01-2233" pattern="[0-9]{6}[-][0-9]{2}[-][0-9]{4}" required></p>
	
	    <p><label >Phone Number</label></p>
	    <p><input type="text" name="phone" id="phone" placeholder="012-3456789" pattern="[0-9]{3}[-][0-9]{7}" required></p>
	
	    <p><label>Email</label></p>
	    <p><input type="email" name="email" id="email" placeholder="sarah@gmail.com" required></p>
        </div>

  
		 
		 
		 
		<div class="PaymentDetail">
  	    <h2>Please Fill in Your Payment </h2>
		<br>
	    <p><label>Card Holder</label></p>
	    <p><input type="text" name="holder" id="holder" placeholder="Sarah Sinclair" pattern="[a-​zA-Z\s]{2,}" required></p>
	
	    <p><label>Card Number</label></p>
	    <p><input type="text" name="cardnum" id="cardnum" placeholder="1111-2222-3333-4444" pattern="[0-9]{4}[-][0-9]{4}[-][0-9]{4}[-][0-9]{4}" required></p>
	
	    <p><label>Expiry Date</label></p>
	    <p><input type="date" name="expdate" id="expdate" placeholder="20/10/2022" required></p>
			
	    <p><label>CVV</label></p>
	    <p><input type="text" name="cvv" id="cvv" placeholder="233" maxlength="3" pattern="[0-9]{3}" required></p>
        </div>
		 
		 </div>
		 
		 <div class="paybutton">
		<input type ="submit" value="Make Payment" class="btn" onclick="passvalues(); myFunction()"/>
        
		</div>
		 
		</form>
		
		 
		

  
			
		
		
		
		
	</body>
</html>