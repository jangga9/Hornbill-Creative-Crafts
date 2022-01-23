<?php

    session_start();

    //initialised variables 
    $ServiceName ="";
    $ServicePrice ="";
    $id = 0;
    $update = false;

    //connect database 
    $db = mysqli_connect('sql201.epizy.com', 'epiz_27612136','FZFMeGttO5nB1', 'epiz_27612136_hornbilladmin');

    //if save button is clicked
    if(isset($_POST['save'])){
        $ServiceName = $_POST['ServiceName'];
        $ServicePrice = $_POST['ServicePrice'];

        mysqli_query($db, "INSERT INTO info (ServiceName, ServicePrice) VALUES ('$ServiceName','$ServicePrice')");
        $_SESSION['msg'] = "Information Saved";
        header('location: ViewUpdateServices.php'); // redirect to view update service page 
    }

    //update records
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $ServiceName = $_POST['ServiceName'];
        $ServicePrice = $_POST['ServicePrice'];
    
        mysqli_query($db, "UPDATE info SET ServiceName='$ServiceName', ServicePrice='$ServicePrice' WHERE id=$id");
        $_SESSION['msg'] = "Service updated!"; 
        header('location: ViewUpdateServices.php');
    }

    //delete records
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM info WHERE id=$id");
        $_SESSION['msg'] = "Service deleted!"; 
        header('location: ViewUpdateServices.php');
    }

    //retrieve records
    $results = mysqli_query($db, "SELECT * FROM info");

?>