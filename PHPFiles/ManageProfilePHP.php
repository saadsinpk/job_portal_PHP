<?php
include './resources/DBconnection/config.php';


if ($_SESSION["U-Email"] === null) {
    header('Location: Login.php');
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
    header('Location: CreateProfile.php');
}





if (isset($_POST['updateProf'])) {

    $firstname = $_POST['fname'];
    $lasttname = $_POST['lname'];
    $contact = $_POST['contact'];

    $oldpp = $_POST['oldpp'];
    $olddl = $_POST['olddl'];
    $oldsl = $_POST['oldsl'];
    $oldcv = $_POST['oldcv'];
    $oldfa = $_POST['oldfa'];
    $oldrsa = $_POST['oldrsa'];

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
    
    if($dLicensefilename == null){
        $dLicensefilename = $olddl;
    }
        
        if($sLfilename == null){
        $sLfilename =$oldsl;
    }
    
    if($cVfilename == null){
        $cVfilename =$oldcv;
    }
    if($fAfilename == null){
        $fAfilename =$oldfa;
    }
    if($RSAfilename == null){
        $RSAfilename = $oldrsa;
    }
    if($profilefilename == null){
        $profilefilename = $oldpp;
    }


    $folder = "images/DrivingLicense/" . $dLicensefilename;
    $folder1 = "images/SecurityLicense/" . $sLfilename;
    $folder2 = "images/CovidVacc/" . $cVfilename;
    $folder3 = "images/FirstAid/" . $fAfilename;
    $folder4 = "images/RSA/" . $RSAfilename;
    $folder5 = "images/ProfilePicture/" . $profilefilename;

    
    $q = "SELECT * from userinfo WHERE 'Uid' = $uid";
    $check = mysqli_query($link, $q);

    if ($check) {

        $qu = "UPDATE `userinfo` SET `FirstName`='$firstname',`LastName`='$lasttname',`ContactNo`='$contact',`DriversLicense`='$dLicensefilename',`SecurityLicense`='$sLfilename',`CovidVacc`='$cVfilename',`FirstAid`='$fAfilename',`RSALicense`='$RSAfilename',`ProfileImage`='$profilefilename',`Uid`='$uid' WHERE Uid = $uid";

        $res = mysqli_query($link, $qu);

        if($res){
            $_SESSION['updatePass'] = "Profile Updated Successfully.";
            echo "<script>window.location = 'Settings.php';</script>";
        }


            if (move_uploaded_file($DLtempname, $folder)) {
                $_SESSION['success']  = "Profile Updated Successfully.";
            } else {
                echo "<h3>  Failed Creating Profile.!</h3>";
            }

            if (move_uploaded_file($SLtempname, $folder1)) {
                $_SESSION['success']  = "Profile Updated Successfully.";
            } else {
                echo "<h3>  Failed Creating Profile.!</h3>";
            }

            if (move_uploaded_file($CVtempname, $folder2)) {
                $_SESSION['success']  = "Profile Updated Successfully.";
            } else {
                echo "<h3>  Failed Creating Profile.!</h3>";
            }
        
            if (move_uploaded_file($FAtempname, $folder3)) {
                $_SESSION['success']  = "Profile Updated Successfully.";
            } else {
                echo "<h3>  Failed Creating Profile.!</h3>";
            }
        
            if (move_uploaded_file($RSAtempname, $folder4)) {
                $_SESSION['success']  = "Profile Updated Successfully.";
            } else {
                echo "<h3>  Failed Creating Profile.!</h3>";
            }
       
            if (move_uploaded_file($Proftempname, $folder5)) {
                $_SESSION['success']  = "Profile Updated Successfully.";
            } else {
                echo "<h3>  Failed Creating Profile.!</h3>";
            }
        
    }
}
