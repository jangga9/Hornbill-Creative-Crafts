<?php include("header.php"); 
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
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="About_images/ShortcutIcon.png">
        <link rel="stylesheet" href="css/aboutstylesheet.css">
    </head>
    <body class = "carving">		
		<div class="welcome-text">
			<h1> We provide the best <br> services for you, suited <br> for all your needs.</h1>
			<a href="Services.php">Explore Services<img class="explore" src="About_images/explore.png"></a>
		</div>
        <div> 
</div>

    </body>
    
    
</html>
