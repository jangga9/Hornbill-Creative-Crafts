<?php

    $server = "sql201.epizy.com";
    $username = "epiz_27612136";
    $password = "FZFMeGttO5nB1";
    $dbname = "epiz_27612136_hornbilladmin";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){
        die("Connection: Failed" .mysqli_connect_error());
    }
?>