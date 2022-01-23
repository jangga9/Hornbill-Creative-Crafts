<?php 
session_start();
//Connect to database  
   $server = "sql201.epizy.com"; 
   $username = "epiz_27612136"; 
   $password = "FZFMeGttO5nB1";
    $dbname = "epiz_27612136_hornbilladmin"; 

    $conn = mysqli_connect($server, $username, $password, $dbname); 
    
    
if(empty($_POST['Email']) || empty($_POST['Password'])){
    header("Refresh: 0.1; url= AccountCustomerLogin.php");
    echo '<script>alert("Both fileds are required")</script>)';
}
else{
    /* Get data from the AccountCustomerLogin.php */
    $Email = mysqli_real_escape_string($conn, $_POST["Email"]);
    $Password = mysqli_real_escape_string($conn, $_POST["Password"]); 
    $query = "SELECT * FROM CustomerData WHERE Email = '$Email'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            if(password_verify($Password, $row["Password"])){
                //return true
                //Get Information from the same row for other details.
                $Fullname =  $row["Fullname"];
                $ID = $row["ID"];
                $Mobile = $row["Mobile"];
                $_SESSION["Fullname"] = $Fullname;
                $_SESSION["ID"] = $ID;
                $_SESSION["Mobile"] = $Mobile;
                // Go to Home page and display sucessful login
                header("Refresh: 0.1; url= Home.php");
                echo "Hello, " . $_SESSION["Fullname"] . ".";
                echo '<script>alert("Welcome to our Website will be directed to Home page now.")</script>)';
            }
            else{
                //return false
                header("Refresh: 0.1; url= AccountCustomerLogin.php");
                echo '<script>alert("Wrong Password")</script>)';
            }
        }

    }
    else{
        header("Refresh: 0.1; url= AccountCustomerLogin.php");
        echo '<script>alert("Email Not Registered")</script>)';
    }
    
}
?>