<?php include 'sendemail.php'; 
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
    
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  		<meta charset="utf-8">
		<meta http-equiv="X-UA_Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, intial-scale=1.0">
		<title>FEEDBACK</title>
		<!--page-icon------------>
		<link rel="shortcut icon" href="images/ShortcutIcon.png">
		<!--stylesheet------------->
		<link type="text/css" rel="stylesheet" href="stylesheetFeedback.css">
		<!--light-slider.css------------->
		<link rel="stylesheet" type="text/css" href="css/lightslider.css">
		<!--Jquery-------------------->
		<script type="text/javascript" src="js/Jquery.js"></script>
		<!--lightslider.js--------------->
		<script type="text/javascript" src="js/lightslider.js"></script>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
  
   <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->
	
  <!-- navigation bar --> 
		<div class ="container1">
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
						<li><a href="logout.php">Logout</a></li>
						<li><a class = "cart" href="Cart.php"><img src="About_images/shopping-cart.png" alt="shoping cart"></a></li>
					</ul>
				</nav>
			</div>
		</div>
	<!--end of navigation bar --> 
	
    <div class="container">
      <span class="big-circle"></span>
      <img src="imgs/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            We care and value all our customers needs and always provide the best services because your feedback matters.
          </p>

          <div class="info">
            <div class="information">
              <img src="imgs/location.png" class="icon" alt="" />
              <p>G01 VIRUS .CO Jalan UNIMAS Kota Samarahan, Sarawak, 94300</p>
            </div>
            <div class="information">
              <img src="imgs/email.png" class="icon" alt="" />
              <p>1234567</p>
            </div>
            <div class="information">
              <img src="imgs/phone.png" class="icon" alt="" />
              <p>+60123456789</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form class="contact" action="#" method="post">
            <h3 class="title">Feedback</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Full Name</label>
              <span>Full Name</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="subject" name="subject" class="input" />
              <label for="">Subject</label>
              <span>Subject</span>
            </div>
            <div class="input-container textarea">
              <textarea type="message" name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            
			<input type="submit" name="submit" class="btn" value="SUBMIT">
          </form>
        </div>
      </div>
    </div>
	
	<!----------------SEND EMAIL---------------------------------->
    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

    <script src="app.js"></script> <!---motion-->
  </body>
</html>