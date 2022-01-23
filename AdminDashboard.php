<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
        <link rel="shortcut icon" href ="images/ShortcutIcon.png"> 
        <meta name="description" content="">
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
                    <a class="active-link" href="#">Dashboard</a>
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
                <div class="main-container">
                    <div class="main-title">
                        <img class="greeting-img" src="images/Hello.svg" alt="Greeting">
                        <div class="main-greeting">
                            <h1>Hello Admin</h1>
                            <p>Welcome to your dashboard</p>
                        </div>
                    </div>

                    <div class="main-cards">

                        <div class="card">
                            <i class="fa fa-user-o fa-2x"></i>
                            <div class="card-inner">
                                <p class="text-primary-p"> Active Customers</p>
                                <span class="font-bold text-title">30</span>
                            </div>
                        </div>
                        <div class="card">
                            <i class="	fa fa-handshake-o fa-2x"></i>
                            <div class="card-inner">
                                <p class="text-primary-p"> Registered Customers  </p>
                                <span class="font-bold text-title">90</span>
                            </div>
                        </div>
                        <div class="card">
                            <i class="	fa fa-book fa-2x"></i>
                            <div class="card-inner">
                                <p class="text-primary-p"> Total Services</p>
                                <span class="font-bold text-title">7</span>
                            </div>
                        </div>
                        <div class="card">
                            <i class="	fa fa-shopping-cart fa-2x"></i>
                            <div class="card-inner">
                                <p class="text-primary-p"> Total Orders</p>
                                <span class="font-bold text-title">55</span>
                            </div>
                        </div>

                    </div>

                    <div class="charts">

                        <div class="charts-left">
                            <div class="chart-left-title">
                                <div>
                                    <h1>Earnings Overview</h1>
                                    <p>Hornbill Creative Crafts Services</p>
                                </div>
                            </div>
                            <div id="apex1"></div>
                        </div>

                        <div class="charts-right">
                            <div class="chart-right-title">
                                <div>
                                    <h1>Revenue Sources</h1>
                                    <p>Kota Samarahan</p>
                                </div>
                            </div>
                    
                        <div class="charts-right-cards">

                            <div class="card1">
                                <h3>Income</h3>
                                <p> RM 3482.65</p>
                            </div>
                            <div class="card2">
                                <h3>Sales</h3>
                                <p> RM 89467.43</p>
                            </div>
                            <div class="card3">
                                <h3>Earnings(Weekly)</h3>
                                <p> RM 672,346.26</p>
                            </div>
                            <div class="card4">
                                <h3>Earnings(Monthly)</h3>
                                <p> RM 7481,278.34</p>
                                
                            </div>
                        </div>
                    </div>
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
                    <div class="sidebar-link active-menu-link">
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
                    <div class="sidebar-link">
                        <i class="fa fa-check-square"></i>
                        <a href="ViewCustomerTransaction.php"> Manage Customer</a>
                    </div>
                    <div class="sidebar-link">
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

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="js/adminscript.js"></script>
    </body>
</html>