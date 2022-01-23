<?php 
    session_start();
    $server = "sql201.epizy.com";
    $username = "epiz_27612136";
    $password = "FZFMeGttO5nB1";
    $dbname = "epiz_27612136_hornbilladmin";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    /* block user to enter this page after logout */
    if(!isset($_SESSION['ID'])){
        header("Refresh: 0.1; url= AccountCustomerLogin.php");
        echo '<script>alert("ERROR You have not Logged In as Customer")</script>)';
    }
    
    include("header.php"); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA_Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, intial-scale=1.0">
		<title>Services</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="mainstylesheet.css">
		<script type="text/javascript" src="js/script.js"></script>
		</head>
		<body>
	   <div class="slider">
			<ul id="autoWidth" class="cS-hidden">
				<li>
				<form action="manage_cart.php" method="POST">
					<div class="box">
						<div class="slide-img">
							<img src="images/5.jpg" alt="1">
							<div class="overlay">
								<button type="submit" name="Add_To_Cart" class="buy-btn">Add To Cart</button>	
								<input  type="hidden" class="type"  name="Name"value="Carved Wooden Keychain">
								<input  type="hidden" class="price" name="Price" value="450">
							</div>
						</div>
						<div class="detail-box">
							<div > 
							<h6 class="type"> Carved Wooden Keychain</h6>
							<p class="price"> RM450</p>
								
							</div>
						</div>
					</div>	
				   </form>
		        </li>
				<li>
				<form action="manage_cart.php" method="POST">
					<div class="box">
						<div class="slide-img">
							<img src="images/1.jpg" alt="1">
							<div class="overlay">
								<button type="submit" name="Add_To_Cart" class="buy-btn">Add To Cart</button>	
								<input  type="hidden" class="type"  name="Name"value="Carved Wooden Statue">
								<input  type="hidden" class="price" name="Price" value="150">
							</div>
						</div>
						<div class="detail-box">
							<div > 
							<h6 class="type"> Carved Wooden Statue</h6>
							<p class="price"> RM150</p>
								
							</div>
						</div>
					</div>	
				   </form>
		        </li>
				<li>
				<form action="manage_cart.php" method="POST">
					<div class="box">
						<div class="slide-img">
							<img src="images/2.jpg" alt="1">
							<div class="overlay">
								<button type="submit" name="Add_To_Cart" class="buy-btn">Add To Cart</button>	
								<input  type="hidden" class="type"  name="Name"value="Carved Tribal Shield">
								<input  type="hidden" class="price" name="Price" value="250">
							</div>
						</div>
						<div class="detail-box">
							<div > 
							<h6 class="type"> Carved Tribal Shield</h6>
							<p class="price"> RM 250</p>
								
							</div>
						</div>
					</div>	
				   </form>
		        </li>	
				<li>
				<form action="manage_cart.php" method="POST">
					<div class="box">
						<div class="slide-img">
							<img src="images/4.jpg" alt="1">
							<div class="overlay">
								<button type="submit" name="Add_To_Cart" class="buy-btn">Add To Cart</button>	
								<input  type="hidden" class="type"  name="Name"value="Carved Wooden Pendant">
								<input  type="hidden" class="price" name="Price" value="45">
							</div>
						</div>
						<div class="detail-box">
							<div > 
							<h6 class="type"> Carved Wooden Pendant</h6>
							<p class="price">RM 45</p>
								
							</div>
						</div>
					</div>	
				   </form>
		        </li>	

                <li>
				<form action="manage_cart.php" method="POST">
					<div class="box">
						<div class="slide-img">
							<img src="images/3.jpg" alt="1">
							<div class="overlay">
								<button type="submit" name="Add_To_Cart" class="buy-btn">Add To Cart</button>	
								<input  type="hidden" class="type"  name="Name"value="Carved Wooden Board">
								<input  type="hidden" class="price" name="Price" value="90">
							</div>
						</div>
						<div class="detail-box">
							<div > 
							<h6 class="type"> Carved Wooden Board</h6>
							<p class="price">RM 90</p>
								
							</div>
						</div>
					</div>	
				   </form>
		        </li>	

                 <li>
				<form action="manage_cart.php" method="POST">
					<div class="box">
						<div class="slide-img">
							<img src="images/6.jpg" alt="1">
							<div class="overlay">
								<button type="submit" name="Add_To_Cart" class="buy-btn">Add To Cart</button>	
								<input  type="hidden" class="type"  name="Name"value="Carved Name On Pen">
								<input  type="hidden" class="price" name="Price" value="30">
							</div>
						</div>
						<div class="detail-box">
							<div > 
							<h6 class="type"> Carved Name On Pen</h6>
							<p class="price">RM 30</p>
							</div>
						</div>
					</div>	
				   </form>
		        </li>
                <li>
				<form action="manage_cart.php" method="POST">
					<div class="box">
						<div class="slide-img">
							<img src="images/7.jpg" alt="1">
							<div class="overlay">
								<button type="submit" name="Add_To_Cart" class="buy-btn">Add To Cart</button>	
								<input  type="hidden" class="type"  name="Name"value=" Combo A">
								<input  type="hidden" class="price" name="Price" value="90">
							</div>
						</div>
						<div class="detail-box">
							<div > 
							<h6 class="type"> Combo A</h6>
							<p class="price">RM 90</p>
							</div>
						</div>
					</div>	
				   </form>
		        </li>
                <li>
				<form action="manage_cart.php" method="POST">
					<div class="box">
						<div class="slide-img">
							<img src="images/8.jpg" alt="1">
							<div class="overlay">
								<button type="submit" name="Add_To_Cart" class="buy-btn">Add To Cart</button>	
								<input  type="hidden" class="type"  name="Name"value="Combo B">
								<input  type="hidden" class="price" name="Price" value="130">
							</div>
						</div>
						<div class="detail-box">
							<div > 
							<h6 class="type"> Combo B</h6>
							<p class="price">RM 130</p>
							</div>
						</div>
					</div>	
				   </form>
		        </li>
			</ul>
		</div>
	</body>
</html>