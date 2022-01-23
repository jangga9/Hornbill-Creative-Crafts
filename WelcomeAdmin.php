<?php require_once 'controller/authController.php'; 

    /* block user to enter this page after logout */
    if(!isset($_SESSION['id'])){
        header('location: adminlogin.php');
        exit();
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome Admin</title>
    <link rel="shortcut icon" href ="images/ShortcutIcon.png"> 
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,800;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="notify-container">
        <div class="notify-row">

            <!-- Display Messages -->
            <?php if(isset($_SESSION['message'])): ?>   
                <div class="alert <?php echo $_SESSION['alert-class']; ?>">
                    <?php 
                        echo $_SESSION['message']; 
                        unset($_SESSION['message']);
                        unset($_SESSION['alert-class']);
                    ?>
                </div>
            <?php endif; ?>

            <h3>Welcome, <?php echo $_SESSION['username']; ?> </h3>
                
            <a class="logout-link" href="WelcomeAdmin.php?logout=1"> Log Out </a>
        
                <a href="AdminDashboard.php">
                    <input type="button" class="proceed" value="Proceed to Dashboard"></input>
                </a>
            
        </div>
    </div>
    
</body>
</html>