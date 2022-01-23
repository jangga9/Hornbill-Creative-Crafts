<?php include "confiq.php"; ?>
<!DOCTYPE html>

<html>
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>View New Services</title>
        <link rel="shortcut icon" href ="images/ShortcutIcon.png"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,800;0,900;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/admin.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar">
                <div class="nav_icon" onclick="toggleSidebar()">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="navbar-left">
                    <a class="nav-link" href="UploadNewServices.php">Upload<span class="sr-only">(current)</span></a>
                    <a class="active-link" href="ViewUploadedImages.php">View</a>
                </div>
                <div class="navbar-right">
                    <a href="#">
                        <i class="fa fa-search"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-envelope-o"></i>
                    </a>
                    <a href="#">
                        <img class="profile" src="images/Admin.png" alt="profile picture">
                    </a>
                </div>
            </nav>
            <main class="view-customer">

                    <?php
                        $sql = "SELECT * FROM images ORDER BY id DESC";
                        $res = mysqli_query($conn, $sql); 

                        if(mysqli_num_rows($res) > 0){
                        while($images = mysqli_fetch_assoc($res)) { ?>

                    <div class="uploaded-photos">
                        <img src="uploads/<?=$images['image_url']?>">
                    </div>

                <?php } }?>
                        

            </main>
            <div id="sidebar">
                <div class="sidebar-title">
                    <div class="sidebar-img">
                        <img src="images/Logo.png" alt="shop logo0">
                        <h1>Hornbill Creative Crafts</h1>
                    </div>
                    <i class="fa fa-times" id="sidebarIcon" onclick="closeSidebar()"></i>
                </div>
                <div class="sidebar-menu">
                    <div class="sidebar-link">
                        <i class="fa fa-home"></i>
                        <a href="AdminDashboard.php"> Dashboard</a>
                    </div>
                    <h2>Content</h2>
                    <div class="sidebar-link">
                        <i class="fa fa-check-square"></i>
                        <a href="ViewCustomerTransaction.php"> Transaction Records</a>
                    </div>
                    <div class="sidebar-link">
                        <i class="fa fa-user-secret"></i>
                        <a href="ViewCustomerDetails.php"> View Customers</a>
                    </div>
                    <div class="sidebar-link active-menu-link">
                        <i class="fa fa-upload"></i>
                        <a href="UploadNewServices.php">Upload New Services</a>
                    </div>
                    <div class="sidebar-link">
                        <i class="	fa fa-edit"></i>
                        <a href="ViewUpdateServices.php">View and Update Services </a>
                    </div>
                    <div class="sidebar-logout">
                        <i class="	fa fa-power-off"></i>
                        <a href="WelcomeAdmin.php">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>