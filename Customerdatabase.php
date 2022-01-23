<?php
session_start();
    $server = "sql201.epizy.com";
    $username = "epiz_27612136";
    $password = "FZFMeGttO5nB1";
    $dbname = "epiz_27612136_hornbilladmin";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    $name =  $_POST['Fullname'];
    $mobile =  $_POST['Mobile'];
    $email =  $_POST['Email'];
    $pwd = $_POST['Password'];

    /*Password hash for security*/
    $pass = password_hash($pwd, PASSWORD_DEFAULT);
    /*Insert data into the mycustomer table*/
    $sql = "INSERT Into CustomerData (ID, Fullname, Mobile, Email, Password) 
    VALUES (NULL,'$name', '$mobile', '$email', '$pass');";

    mysqli_query($conn, $sql); 
    
    header('location: AccountCustomerLogin.php');

    session_destroy();

?>
