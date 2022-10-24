<?php
if(!isset($_SESSION)) { session_start(); }
include './resources/DBconnection/config.php';


if ($_SESSION["U-Email"] === null) {
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





if (isset($_POST['updateProf'])) {

    $firstname = $_POST['fname'];
    $lasttname = $_POST['lname'];
    $contact = $_POST['contact'];

    $dLicensefilename = $_FILES["dl"]["name"];
    $DLtempname = $_FILES["dl"]["tmp_name"];

    $sLfilename = $_FILES["sl"]["name"];
    $SLtempname = $_FILES["sl"]["tmp_name"];

    $cVfilename = $_FILES["cv"]["name"];
    $CVtempname = $_FILES["cv"]["tmp_name"];

    $fAfilename = $_FILES["fa"]["name"];
    $FAtempname = $_FILES["fa"]["tmp_name"];

    $RSAfilename = $_FILES["rsa"]["name"];
    $RSAtempname = $_FILES["rsa"]["tmp_name"];

    $profilefilename = $_FILES["pp"]["name"];
    $Proftempname = $_FILES["pp"]["tmp_name"];

    $folder = "images/DrivingLicense/" . $dLicensefilename;
    $folder1 = "images/SecurityLicense/" . $sLfilename;
    $folder2 = "images/CovidVacc/" . $cVfilename;
    $folder3 = "images/FirstAid/" . $fAfilename;
    $folder4 = "images/RSA/" . $RSAfilename;
    $folder5 = "images/ProfilePicture/" . $profilefilename;


    $q = "SELECT * from userinfo WHERE 'Uid' = $uid";
    $check = mysqli_query($link, $q);

    $qu = "UPDATE `userinfo` SET `FirstName`='$firstname',`LastName`='$lasttname',`ContactNo`='$contact', `Uid`='$uid' WHERE `Uid` = $uid";
        $res = mysqli_query($link, $qu);

    if (move_uploaded_file($DLtempname, $folder)) {

        $qu = "UPDATE `userinfo` SET `FirstName`='$firstname',`LastName`='$lasttname',`ContactNo`='$contact',`DriversLicense`='$dLicensefilename' WHERE `Uid` = $uid";
        $res = mysqli_query($link, $qu);
        $_SESSION['success']  = "Profile Updated Successfully.";
    }

    if (move_uploaded_file($SLtempname, $folder1)) {

        $qu = "UPDATE `userinfo` SET `SecurityLicense`='$sLfilename' WHERE `Uid` = $uid";
        $res = mysqli_query($link, $qu);
        $_SESSION['success']  = "Profile Updated Successfully.";
    }


    if (move_uploaded_file($CVtempname, $folder2)) {

        $qu = "UPDATE `userinfo` SET `CovidVacc`='$cVfilename' WHERE `Uid` = $uid";
        $res = mysqli_query($link, $qu);
        $_SESSION['success']  = "Profile Updated Successfully.";
    }


    if (move_uploaded_file($FAtempname, $folder3)) {

        $qu = "UPDATE `userinfo` SET `FirstAid`='$fAfilename' WHERE `Uid` = $uid";
        $res = mysqli_query($link, $qu);
        $_SESSION['success']  = "Profile Updated Successfully.";
    }

    if (move_uploaded_file($RSAtempname, $folder4)) {

        $qu = "UPDATE `userinfo` SET `RSALicense`='$RSAfilename' WHERE `Uid` = $uid";
        $res = mysqli_query($link, $qu);
        $_SESSION['success']  = "Profile Updated Successfully.";
    }
    
    if (move_uploaded_file($Proftempname, $folder5)) {

        $qu = "UPDATE `userinfo` SET `ProfileImage`='$profilefilename' WHERE `Uid` = $uid";
        $res = mysqli_query($link, $qu);
        $_SESSION['success']  = "Profile Updated Successfully.";
    }

    if ($res) {
        $_SESSION['updatePass'] = "Profile Updated Successfully.";
        echo "<script>window.location = 'Settings.php';</script>";
    }

}
