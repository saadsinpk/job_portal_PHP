<?php
session_start();
include_once 'resources/DBconnection/config.php';

if($_SESSION["U-Email"] == null){
    header('Location: Login.php');
}


$q =  "Select * from users Where uemail = '".$_SESSION["U-Email"]."'";
$ch = mysqli_query($link,$q);
$res = mysqli_fetch_array($ch);


$uid = $res['Uid'];

$q2 =  "Select * from userinfo Where Uid = '$uid'";
$check = mysqli_query($link,$q2);
$result= mysqli_fetch_array($check);


if (isset($_GET['id'])) {
    $jobId = $_GET['id'];

    $qu = "Select * from joblist where JobId = '" . $jobId . "' ";
    $result = mysqli_query($link, $qu);
    $row = mysqli_fetch_array($result);
}

    if (isset($_POST['updateJob'])) {

        $Loc = $_POST['location'];
        $Days = $_POST['selecteddays'];
        $Hours = $_POST['hours'];
        $Post = $_POST['position'];
        $Pay = $_POST['pay'];
        $Desc = $_POST['desc'];
        $mlNum = $_POST['MLnum'];
        $Status = $_POST['status'];

        if ($Post == "Other ( Name )") {
            $p = $_POST['positions'];
            $Post = $p;
        }


        $q = "UPDATE joblist SET `Location`='$Loc',`Days`='$Days',`Hours`='$Hours',`Position`='$Post',`Pay`='$Pay',`Description`='$Desc',`MasterLicenseNo`='$mlNum',`Status`='$Status', `Uid`= '$uid' WHERE JobId='$jobId'";
        $check = mysqli_query($link, $q);

        if ($check) {
            $_SESSION['msg'] = "Job Updated successfully!";
            header('Location: ManageJobListing.php');
        } else {
            $_SESSION['msg'] = "Job Update Failed. Please Try Again!";
        }
    }

    if (isset($_GET['id'])) {
        $jobId = $_GET['id'];
    
        $qu = "Select * from joblist where JobId = '" . $jobId . "' ";
        $result = mysqli_query($link, $qu);
        $row = mysqli_fetch_array($result);
    }

    ?>