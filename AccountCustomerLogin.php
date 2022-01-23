
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Welcome</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/ShortcutIcon.png">
        <link rel="stylesheet" href="css/customerloginstyle.css">
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
                        <div class ="title login"> Sign In</div>
                    </div>
               
                    <div class ="form-container">
                        <div class="slide-controls">
                            <input type="radio" name="slide" id="login"checked>
							 <input type="radio" name="slide" id="signup">
							 <label  onclick="location.href='AccountCustomerSignup.php'"for="login" class="slide login">Login</label>
							 <label  for="signup" class="slide signup">Signup</label>
                            <div class="slide-tab"></div>
                        </div>
                     <div class="form-inner">
                            <form action="LoginDatabase.php"  class="login" method="POST">
                                <div class="field">
                                    <input type="text" name ="Email" id="Email"placeholder="Email Address" >
                                </div>
                                <div class="field"> <!-- This password will be verified by using the password_verify()-->
                                    <input type="password" name = "Password" id="Password" placeholder="Password">
                                   <input class="checkbox" style= "height:15px;width: 15px; position: relative; top: 15px;" type="checkbox" onclick="myFunction()"><small class="text">Show Password</small>
                            <span></span>
								
                                </div><br><br><br>
                               
                                <div class="pass-link"><a href="#">Forgot Password?</a></div>
                                <div class="field">
                                    <input name="save" type="submit" value="Login">
                                </div>
                                <div class="signup-link"> Not a registered User? <a href="AccountCustomerSignup.php"> Sign Up Now</a></div>
                            </form>
                     </div>
                    </div>
             </div>
           </div>
       </div>
       <script>
     function validate(){
		  var Email = document.getElementById('Email').value;
		  var Password = document.getElementById('Password').value;
		  var EmailRGEX = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
		  var PasswordRGEX = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/;
		  var EmailResult = EmailRGEX.test(Email);
		  var PasswordResult = PasswordRGEX.test(Password);
		  
		  
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
		
		if(EmailResult == true && PasswordResult == true)
		  { 
		  alert('Welcome To Hornbill Creative Craft !!!');
			window.location.replace("Home.php");
			return false;
		  }
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
		  } else {
			x.type = "password";
		  }
		}

		 document.getElementById("signup").onclick = function () {
				location.href = "AccountCustomerSignup.php";
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