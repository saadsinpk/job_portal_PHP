<?php
if (!isset($_SESSION)) {
    session_start();
}
ob_start();
include './resources/DBconnection/config.php';

if ($_SESSION["U-Email"] == null) {
    echo "<script>window.location = 'Login.php';</script>";
}


$q =  "Select * from users Where uemail = '" . $_SESSION["U-Email"] . "'";
$ch = mysqli_query($link, $q);
$res = mysqli_fetch_array($ch);


$uid = $res['Uid'];

$q2 =  "Select * from userinfo Where Uid = '$uid'";
$check = mysqli_query($link, $q2);
$result = mysqli_fetch_array($check);

$data = $result['Uid'];

if (isset($_GET['id'])) {
    $ticketid = $_GET['id'];

    $getsupport = "SELECT * FROM support WHERE `supp_id`= '$ticketid' ";
    $sppQuery = mysqli_query($link, $getsupport);
    $supportData = mysqli_fetch_array($sppQuery);
}

if (isset($_POST['updateTicket'])) {

    $status = $_POST['status'];

    $update_ticket = "UPDATE `support` SET `status`='$status' WHERE `supp_id` = $ticketid";
    $query = mysqli_query($link, $update_ticket);
    if ($query) {
        $_SESSION['message'] = "TICKET UPDATE SUCCESSFULLY.";
        echo "<script> window.location = 'MyTickets.php' </script>";
    } else {
        $_SESSION['message'] = "TICKET UPDATE FAILED. Please Try Again.";
        echo "<script> window.location = 'MyTickets.php' </script>";
    }
}
