<?php
if(!isset($_SESSION)) { session_start(); }
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $q = "Delete from support where `supp_id` ='$id'";
    $check = mysqli_query($link, $q);
    if($check){
        $_SESSION['msg'] = "Ticket Removed Successfully.";
        echo "<script>window.location = 'MyTickets.php';</script>";
    }
    else{
        $_SESSION['msg'] = "Ticket Removal Failed!";
    }
}

?>