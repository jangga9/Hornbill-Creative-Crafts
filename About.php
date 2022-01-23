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
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA_Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, intial-scale=1.0">
		<title>About</title>
		<!--page-icon------------>
		<link rel="shortcut icon" href="About_images/ShortcutIcon.png">
		<!--stylesheet------------->
		<link type="text/css" rel="stylesheet" href="css/aboutstylesheet.css">
	</head>
		
	<body class = "carving">

		<div class = "about_title">
			<p>ABOUT US</p>
		</div>
		<br><br><br>

	
	<! -- content  --> 
		<div class = "About_container">
			<div class = "content">
				<div class = "face_image">
				<img src="About_images/avatar.png" alt="avatar icon">
				</div>
				<div class = "info">
					<h3>Melvin Jangga Anak Rupitan</h3>
					<p>72331</p>
					<p>Project Leader</p>
				</div>
			</div>
			
			<br><br><br><br><br><br>
				
			<div class = "content_rigth">
				<div class = "face_image">
				<img src="About_images/avatar.png" alt="avatar icon">
				</div>
				<div class = "info">
					<h3>Azhar Chong</h3>
					<p>69186</p>
					<p>Web Developer</p>
				</div>
			</div>
			
			<br><br><br><br><br><br>
			
			<div class = "content">
				<div class = "face_image">
				<img src="About_images/avatar.png" alt="avatar icon">
				</div>
				<div class = "info">
					<h3>Albert Anak Aliam</h3>
					<p>72080</p>
					<p>Web Developer</p>
				</div>
			</div>
			
			<br><br><br><br><br><br>
			
			<div class = "content_rigth">
				<div class = "face_image">
				<img src="About_images/avatar.png" alt="avatar icon">
				</div>
				<div class = "info">
					<h3>Muhammad Hafiz bin Abdul Aziz</h3>
					<p>72414</p>
					<p>Web Developer</p>
				</div>
			</div>
			
			<br><br><br><br><br><br>
			
			<div class = "content_group">
				<h2>G01 Virus.Co</h2>
				<p>Jalan UNIMAS</p>
				<p>Kota Samarahan, Sarawak, 94300</p>
				<p>Phone | +60123456789</p>	
				<p>Fax | 123456</p>
			</div>
			
			<br><br><br><br><br><br>
			
			<div class = "content_rigth">
				<div class = "face_image">
				<img src="About_images/avatar.png" alt="avatar icon">
				</div>
				<div class = "info">	
					<h3>Peter Achilles Lidadun</h3>
					<p>71303</p>
					<p>Web Developer</p>
				</div>
			</div>
			
			
			
			
		</div>
	<! -- end of content  -->
	</body>



</html>