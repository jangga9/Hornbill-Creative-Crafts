<?php
session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Welcome</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/ShortcutIcon.png">
        <link rel="stylesheet" href="css/customeraccountstylesheet.css">
    </head>
	
    <body>

        <div class="split left">
            <div class = "centered">
                <img src = "images/Logo.png" alt="Shop Logo">
            </div>
        </div>

        <div class="split right">
            <div class="centered">

                <div class="wrapper">
                    <div class="title-text">
                        
                        <div class ="title signup"> Sign Up </div>
                    </div>
                   
                    <div class ="form-container">
                        <div class="slide-controls">
                            <input type="radio" name="slide" id="login" >
							 <input type="radio" name="slide" id="signup"checked>
							 <label  for="login" class="slide login">Login</label>
							 <label onclick="location.href='AccountCustomerLogin.php'" for="signup" class="slide signup">Signup</label>
                         <div class="slide-tab"></div>
                       </div>
                    <div class="form-inner">
                            <form method="POST" action="Customerdatabase.php" class="signup" onsubmit="return validate()" >
                                <div class="field">
                                    <input type="text" id="Fullname" name="Fullname" placeholder="Full Name">
                                </div>
                                <div class="field">
                                    <input type="text"id="Mobile" name="Mobile" placeholder="Mobile Number">
                                </div>
                                <div class="field">
                                    <input type="text" id="Email" name="Email" placeholder="Email Address" >
                                </div>
                                <div class="field"> <!--The Password will be use with password_hash() for encryption -->
                                    <input type="password"id="Password" name="Password" placeholder="Password">
									<input class="checkbox" style= "height:15px;width: 15px; position: relative; top: 15px;" type="checkbox" onclick="myFunction()"><small class="text">Show Password</small>
                                </div><br>
                                <div class="field">
                                    <input type="password"id="Confirm" placeholder="Confirm Password">
									<input class="checkbox" style= "height:15px;width: 15px; position: relative; top: 15px;" type="checkbox" onclick="myFunction2()"><small class="text">Show Password</small>
                                </div><br><br>
                                <div class="field">
                                    <input id="log"type="submit"name"save" value="Sign Up">
                                </div><br>
                                <div class="login-link"> Already registered ? <a style="text-decoration:none" href="AccountCustomerLogin.php"> Log In Now</a></div>
                            </form>
                   </div>
                  </div>
              </div>
          </div>
        </div>
        
        <!--Inline Javascript for validation -->
		<script>
        function validate(){
	      var Fullname = document.getElementById('Fullname').value;
		  var Mobile = document.getElementById('Mobile').value;
		  var Email = document.getElementById('Email').value;
		  var Password = document.getElementById('Password').value;
		  var Confirm = document.getElementById('Confirm').value;
		  var FullnameRGEX = /([A-Z]{1})([a-z]{2}){0,1}/;
		  var MobileRGEX = /^[0-9]+$/;
		  var EmailRGEX = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
		  var PasswordRGEX = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/;
		  var FullnameResult = FullnameRGEX.test(Fullname);
		  var MobileResult = MobileRGEX.test(Mobile);
		  var EmailResult = EmailRGEX.test(Email);
		  var PasswordResult = PasswordRGEX.test(Password);
		
		
		   if(FullnameResult == false)
		  {
			alert('Please enter valid username');
			return false;
		  }
		  
		   if(MobileResult == false)
		  {
			alert('Please enter your valid mobile number ');
			return false;
		  }
		  
		  if(EmailResult == false)
		  {
			alert('Please enter a valid Email Address');
			return false;
		  }

		  if(PasswordResult == false)
		  {
			alert('Please enter a valid Password number');
			return false;
		  }
		  
		  if(Password != Confirm)
		  {
			alert('Password are not matching');
			return false;
		  }
		  if(FullnameResult == true && MobileResult == true && EmailResult == true && PasswordResult == true &&Password != Confirm )
			 { 
		  alert('You have successfully registered !!!');
			window.location.replace("AccountCustomerLogin.php");
			return false;
		  }
		   return true;
		  
		}
		 
		function myFunction() {
		var x = document.getElementById("Password");
		if (x.type === "password") {
		x.type = "text";
		} else {
		x.type = "password";
		}
		}
		function myFunction2() {
		var x = document.getElementById("Confirm");
		if (x.type === "password") {
		x.type = "text";
		}	 else {
		x.type = "password";
		}
		}

	 document.getElementById("login").onclick = function () {
			location.href = "AccountCustomerLogin.php";
		};
		  const loginText = document.querySelector(".title-text .login");
		  const loginForm = document.querySelector("form.login");
		  const loginBtn = document.querySelector("label.login");
		  const signupBtn = document.querySelector("label.signup");
		  const signupLink = document.querySelector("form .signup-link a");
		  signupBtn.onclick = (()=>{
			loginForm.style.marginLeft = "-50%";
			loginText.style.marginLeft = "-50%";
		  });
		  loginBtn.onclick = (()=>{
			loginForm.style.marginLeft = "0%";
			loginText.style.marginLeft = "0%";
		  });
		  signupLink.onclick = (()=>{
			signupBtn.click();
			return false;
		  });
          </script>


    </body>
</html>
