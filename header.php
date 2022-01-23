<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/ShortcutIcon.png">
        <link rel="stylesheet" href="mainstylesheet.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="images/ShortcutIcon.png">
		<!--light-slider.css------------->
		<link rel="stylesheet" type="text/css" href="css/lightslider.css">
		<!--Jquery-------------------->
		<script type="text/javascript" src="js/Jquery.js"></script>
		<!--lightslider.js--------------->
		<script type="text/javascript" src="js/lightslider.js"></script>

		<link rel="stylesheet" href="mainstylesheet.css">
		<script type="text/javascript" src="js/script.js"></script>
	
	</head>
    </head>
	<body>
	<div class ="container">
			<div class="logo">
				<img src="images/Logo.png" alt="shop logo">
            </div>
			<div class = "navbar">
            <?php
            session_start();
            echo "User: " . $_SESSION["Fullname"] . ".";
            ?>
				<nav>
					<ul>
						<li><a href="Home.php">Home</a></li>
						<li><a href="Services.php">Services</a></li>
						<li><a href="Feedback.php">Feedback</a></li>
						<li><a href="About.php">About</a></li>
						<li><a href="logout.php">Log out</a></li>
						<li><a class = "cart" href="Cart.php"><img src="About_images/shopping-cart.png" alt="shoping cart"></a></li>
					</ul>
					<div>
					 
				</nav>
			</div>
		</div>
	</body>
	</html>