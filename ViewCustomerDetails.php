<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Customer Details</title>
        <link rel="shortcut icon" href ="images/ShortcutIcon.png"> 
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,800;0,900;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/admin.css">
        <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
        <script text="text/javascript" src="js/adminscript.js"></script> 

    </head>
    <body>
        <div class="container">
            <nav class="navbar">
                <div class="nav_icon" onclick="toggleSidebar()">
                    <i class="fa fa-bars"></i>
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

        <main>
            <!-- CUSTOMER 1 -->
            <div class="view-customer">
                <table class="table-customer" id="table">  
                    <tr>
                        <th class="profile-user" rowspan="6">
                        <img class="user-profile" src="images/User1.png" alt="user profile picture">
                        </th>
                    </tr>
                    <tr>
                        <th>Customer ID </th>
                        <td>3453</td>
                    </tr>
                    <tr>
                        <th>Customer Name</th>
                        <td>Jane Roberts <td>
                    </tr>
                    <tr>
                        <th>Customer Identity Card Number</th>
                        <td>975462 - 13 - 6152 <td>
                    </tr>
                    <tr>
                        <th>Customer Phone Number</th>
                        <td>012 764 8287</td>
                    </tr>
                    <tr>
                        <th>Customer Email Address</th>
                        <td>jane45@gmail.com</td>
                    </tr>
                </table> 
                <br>

            </div>
            <!-- CUSTOMER 2 -->
            <div class="view-customer">
                <table class="table-customer">
                    <tr>
                        <th class="profile-user" rowspan="6">
                        <img class="user-profile" src="images/User2.png" alt="user profile picture"> 
                        </th>
                    </tr>
                    <tr>
                        <th>Customer ID </th>
                        <td>7863</td>
                    </tr>
                    <tr>
                        <th>Customer Name</th>
                        <td>John Doe <td>
                    </tr>
                    <tr>
                        <th>Customer Identity Card Number</th>
                        <td>984521 - 13 - 7823 <td>
                    </tr>
                    <tr>
                        <th>Customer Phone Number</th>
                        <td>019 368 7279</td>
                    </tr>
                    <tr>
                        <th>Customer Email Address</th>
                        <td>john76@gmail.com</td>
                    </tr>
                </table> 
            </div>
            <!-- CUSTOMER 3 -->
            <div class="view-customer">
                <table class="table-customer">  
                    <tr>
                        <th class="profile-user" rowspan="6">
                        <img class="user-profile" src="images/user3.png" alt="user profile picture">
                        </th>
                    </tr>
                    <tr>
                        <th>Customer ID </th>
                        <td>1347</td>
                    </tr>
                    <tr>
                        <th>Customer Name</th>
                        <td>Mary Kay <td>
                    </tr>
                    <tr>
                        <th>Customer Identity Card Number</th>
                        <td>963412 - 13 - 8273 <td>
                    </tr>
                    <tr>
                        <th>Customer Phone Number</th>
                        <td>011 763 4782</td>
                    </tr>
                    <tr>
                        <th>Customer Email Address</th>
                        <td>mary89@gmail.com</td>
                    </tr>
                </table> 
            </div>
            <!-- CUSTOMER 4 -->
            <div class="view-customer">
                <table class="table-customer">
                    <tr>
                        <th class="profile-user" rowspan="6">
                        <img class="user-profile" src="images/user4.png" alt="user profile picture">
                        </th>
                    </tr>  
                    <tr>
                        <th>Customer ID </th>
                        <td>7637</td>
                    </tr>
                    <tr>
                        <th>Customer Name</th>
                        <td>Tony Hawk <td>
                    </tr>
                    <tr>
                        <th>Customer Identity Card Number</th>
                        <td>996625 - 13 - 7126 <td>
                    </tr>
                    <tr>
                        <th>Customer Phone Number</th>
                        <td>012 896 7193</td>
                    </tr>
                    <tr>
                        <th>Customer Email Address</th>
                        <td>tony35@gmail.com</td>
                    </tr>
                </table> 
            </div>
            <!-- CUSTOMER 5 -->
            <div class="view-customer">
                <table class="table-customer">
                    <tr>
                        <th class="profile-user" rowspan="6">
                        <img class="user-profile" src="images/user5.png" alt="user profile picture">
                        </th>
                    </tr>  
                
                    <tr>
                        <th>Customer ID </th>
                        <td>9806</td>
                    </tr>
                    <tr>
                        <th>Customer Name</th>
                        <td>Peter Parker<td>
                    </tr>
                    <tr>
                        <th>Customer Identity Card Number</th>
                        <td>962541 - 13 - 1252 <td>
                    </tr>
                    <tr>
                        <th>Customer Phone Number</th>
                        <td>019 783 2879</td>
                    </tr>
                    <tr>
                        <th>Customer Email Address</th>
                        <td>peter@yahoo.com</td>
                    </tr>
                </table> 
            </div>
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
                    <div class="sidebar-link  active-menu-link">
                        <i class="fa fa-user-secret"></i>
                        <a href="ViewCustomerDetails.php"> View Customers</a>
                    </div>
                    <div class="sidebar-link">
                        <i class="fa fa-check-square"></i>
                        <a href="ManageCustomer-List.php"> Manage Customer</a>
                    </div>
                    <div class="sidebar-link">
                        <i class="fa fa-upload"></i>
                        <a href="UploadNewServices.php">Upload New Services</a>
                    </div>
                    <div class="sidebar-link">
                        <i class="fa fa-edit"></i>
                        <a href="ViewUpdateServices.php">View and Update Services </a>
                    </div>
                    <div class="sidebar-logout">
                        <i class="fa fa-power-off"></i>
                        <a href="WelcomeAdmin.php">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>