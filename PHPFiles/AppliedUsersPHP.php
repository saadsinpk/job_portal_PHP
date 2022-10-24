<?php
if (!isset($_SESSION)) {
    session_start();
}
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

$allUsers = "SELECT * FROM userinfo";
$Usersquery = mysqli_query($link,$allUsers);


$data = $result['Uid'];

if ($uid != $data) {
    echo "<script>window.location = 'CreateProfile.php';</script>";
}

$q = "Select * from userinfo";
$query = mysqli_query($link, $q);

$q = "Select joblist.* , appliedjobs.*
from joblist
INNER JOIN appliedjobs ON joblist.JobId = appliedjobs.JobId WHERE UserId = $uid";
$Jobresult = mysqli_query($link, $q);
