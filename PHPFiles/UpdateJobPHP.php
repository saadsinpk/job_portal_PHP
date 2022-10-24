<?php
if(!isset($_SESSION)) { session_start(); }
ob_start();
include_once 'resources/DBconnection/config.php';

if($_SESSION["U-Email"] == null){
    echo "<script>window.location = 'Login.php';</script>";
    exit();
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
        $Days = $_POST['days'];
        $Hours = $_POST['hours'];
        $Post = $_POST['position'];
        $Pay = $_POST['pay'];
        $Desc = $_POST['desc'];
        $mlNum = $_POST['MLnum'];
        $Status = $_POST['status'];
        $date = date("Y-m-d h:i:s a");

        if ($Post == "Other ( Name )") {
            $p = $_POST['positions'];
            $Post = $p;
        }

        $Days_String = "";

        for ($i=0; $i < count($Days); $i++){
            if($i == count($Days) -1){
                $Days_String .= $Days[$i];
            }else{
                $Days_String .= $Days[$i] . ", "   ;
            }
        }
       

        $q = "UPDATE joblist SET `Location`='$Loc',`Days`='$Days_String',`Hours`='$Hours',`Position`='$Post',`Pay`='$Pay',`Description`='$Desc',`MasterLicenseNo`='$mlNum',`Status`='$Status', `UpdatedOn` = '$date' , `Uid`= '$uid' WHERE JobId='$jobId'";
        $check = mysqli_query($link, $q);

        if ($check) {
            $_SESSION['msg'] = "Job Updated successfully!";
            echo "<script>window.location = 'ManageJobListing.php';</script>";
            exit();
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