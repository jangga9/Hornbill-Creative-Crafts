<?php
if (!empty($_GET['ID'])) {
    // require connection
    require_once 'confiq.php';

    //search for customer ID 
    $Customerid = $_GET['ID'];
    $del_query = "DELETE FROM CustomerData WHERE ID = '". $Customerid . "'" ;
    $result = mysqli_query($conn, $del_query);
    if ($result) {
        header('location: ManageCustomer-List.php?msg=del');
    }
}
