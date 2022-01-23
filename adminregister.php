<?php require_once 'controller/authController.php'; ?>

<!DOCTYPE html>
<html>
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
        <div class="split left">
            <div class = "centered">
                <h1>Hey There!</h1>
                <p>Are you a new Admin? Please Sign Up to view your personalised Dashboard</p>
                <img src = "images/Logo.png" alt="Shop Logo">
                
            </div>
        </div>
        <div class="split right">
            <div class="centered">
                <div class="center admin1">
                    <h2> SIGN UP</h2>

                    <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $errors): ?>
                        <li><?php echo $errors; ?> </li> 
                        <?php endforeach; ?>
                    </div> 
                    <?php endif; ?>

                    <form action="adminregister.php" method="post">
                        <div class="field">
                            <input type="text" name="username" value="<?php echo $username; ?>">
                            <span></span>
                            <label>Username</label>
                        </div>
                        <div class="field">
                            <input type="email" name="email" value="<?php echo "$email"; ?>">
                            <span></span>
                            <label>Email Address</label>
                        </div>
                        <div class="field">
                            <input type="password"  name="password"id="password" >
                            <input class="checkbox" style= "float:left;height:15px;width: 15px; position: relative; top:5px;" type="checkbox" onclick="myFunction()"><small class="text">Show Password</small>
                            <span></span>
                            <label>Password</label>
                        </div>
                        <div class="field">
                            <input type="password"  name="confirm_password" id="confirm_password" >
                            <input class="checkbox" style= "float:left;height:15px;width: 15px; position: relative; top:5px;" type="checkbox" onclick="myFunction1()"><small class="text">Show Password</small>
                            <span></span>
                            <label>Confirm Password</label>
                        </div>
                        <input class="formsubmit" type="submit" name="signup-btn" value="Sign Up">
                        <p> Already have an account? <a class="login-link" href="adminlogin.php"> Sign In here </a> </p>
                    </form>
                </div>
            </div>
        </div>
        <script>
         function myFunction() {
		var x = document.getElementById("password");
		if (x.type === "password") {
		x.type = "text";
		}	 else {
		x.type = "password";
		}
		}

        function myFunction1() {
		var x = document.getElementById("confirm_password");
		if (x.type === "password") {
		x.type = "text";
		}	 else {
		x.type = "password";
		}
		}
         </script>
    </body>
</html>