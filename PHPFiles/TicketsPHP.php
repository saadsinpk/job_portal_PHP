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

if ($uid != $data) {
    echo "<script>window.location = 'CreateProfile.php';</script>";
}

if ($res['role'] == 'admin') {
    $getTickets = "SELECT userinfo.*, support.* FROM support LEFT JOIN userinfo ON userinfo.UId = support.Uid ";
    $query = mysqli_query($link, $getTickets);
} else {
    $getTickets = "SELECT userinfo.*, support.* FROM support LEFT JOIN userinfo ON userinfo.UId = support.Uid WHERE support.Uid = '".$_SESSION['Uid']."'";
    $query = mysqli_query($link, $getTickets);
}
