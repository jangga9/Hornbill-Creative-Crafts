<?php

    session_start();

    require 'confiq.php';

    $errors = array();
    $username ="";
    $email = "";

    //if user clicks on sign up button 
    if(isset($_POST['signup-btn'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // validation 
        if(empty($username)){
            $errors['username'] = "Username is Required";
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Email address is invalid";
        }

        if(empty($email)){
            $errors['email'] = "Email is Required";
        }
        if(empty($password)){
            $errors['password'] = "Password is Required";
        }

        //Password must match 
        if($password !== $confirm_password){
            $errors['password'] = "The passwords does not match";
        }

        // make sure email is unique or not taken 
        $emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
        $stmt = $conn->prepare($emailQuery);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $userCount = $result->num_rows;
        $stmt->close();

        if($userCount>0){
            $errors['email'] = "Email already Exists";
        }

        if(count($errors) ===0){
            $password = password_hash($password, PASSWORD_DEFAULT);
            $token = bin2hex(random_bytes(50));
            $verified = false;

            $sql = "INSERT INTO users (username, email, verified, token, password) VALUES (?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ssbss',$username, $email, $verified, $token, $password);
            

            if($stmt->execute()){
                //login user (admin)
                $user_id = $conn->insert_id;
                $_SESSION['id'] = $user_id;
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;

                // set notification
                $_SESSION['message'] = "You are now logged in";
                $_SESSION['alert-class'] = "alert-success";
                header('location: WelcomeAdmin.php');
                exit();
            }else{
                $errors['db_error'] = "Database error: Failed to register";
            }
        }
    }

    // if user clicks in the login button 

    if(isset($_POST['login-btn']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        // validation 
        if(empty($username)){
            $errors['username'] = "Username is Required";
        }

        if(empty($password)){
            $errors['password'] = "Password is Required";
        }

        if(count($errors) === 0)
        {
            $sql = "SELECT * FROM users WHERE username = ? OR email = ? LIMIT 1";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ss', $username, $username);
            $stmt->execute();
            $result=$stmt->get_result();
            $user = $result->fetch_assoc();
            
            //verify password 
            if(password_verify($password, $user['password']))
            {
                // login sucessfully 
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['verified'] = $user['verified'];
    
    
                // set notification
                $_SESSION['message'] = "You are now logged in";
                $_SESSION['alert-class'] = "alert-success";
                header('location: WelcomeAdmin.php');
                exit(0); 

            }
            else {
            $errors['login_fail'] = "Wrong credentials";
            }
        }

    }

    // logout user

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['verified']);
        header('location: adminlogin.php');
        exit();

    }
?>