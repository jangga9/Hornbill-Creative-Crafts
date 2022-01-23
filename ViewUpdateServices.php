<?php include('server.php'); 

    if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");

    if (count(array($record)) == 1) {
        $n = mysqli_fetch_array($record);
        $ServiceName = $n['ServiceName'];
        $ServicePrice = $n['ServicePrice'];
    }
}

?>
<!DOCTYPE html>

<html>
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>View and Update Services</title>
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
                <div class="update">

                    <?php if (isset($_SESSION['msg'])): ?>
	                    <div class="msg">
		            <?php 
			                echo $_SESSION['msg']; 
			                unset($_SESSION['msg']);
		            ?>
	                    </div>
                    <?php endif ?>
                    <table>
                        <thead>
                            <tr>
                                <th>Service Name </th>
                                <th>Service Price (RM)</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_array($results)){ ?>
                            <tr>
                                <td><?php echo $row['ServiceName']; ?> </td>
                                <td><?php echo $row['ServicePrice']; ?> </td>
                                <td>
                                    <a href="ViewUpdateServices.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Update</a>
                                </td>
                                <td>
                                    <a href="server.php?del=<?php echo $row['id']; ?>"  class="del_btn" >Delete</a>
                                </td>
                            </tr>
                            <?php }?> 
                        </tbody>
                    </table>
                    <form class="table-update" method="post" action="server.php" >

                        <input type="hidden" name="id" value="<?php echo "$id"; ?>">
                        <h3>Please Update service here</h3>
		                <div class="input-group">
			                <label>Service Name</label>
			                <input type="text" name="ServiceName" value="<?php echo $ServiceName; ?>">
		                </div>
		                <div class="input-group">
			                <label>Service Price(RM) </label>
			                <input type="text" name="ServicePrice" value="<?php echo $ServicePrice; ?>">
		                </div>
		                <div class="input-group">

                        <?php if ($update == true): ?>
	                            <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
                            <?php else: ?>
	                            <button class="btn" type="submit" name="save" >Save</button>
                            <?php endif ?>

		                </div>
                    </form>
                </div>
            </main>
            <div id="sidebar">
                <div class="sidebar-title">
                    <div class="sidebar-img">
                        <img src="images/Logo.png" alt="shop logo">
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
                    <div class="sidebar-link">
                        <i class="fa fa-check-square"></i>
                        <a href="ManageCustomer-List.php"> Manage Customer</a>
                    </div>
                    <div class="sidebar-link">
                        <i class="fa fa-upload"></i>
                        <a href="UploadNewServices.php">Upload New Services</a>
                    </div>
                    <div class="sidebar-link active-menu-link">
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