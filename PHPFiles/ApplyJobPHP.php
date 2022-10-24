<?php
if (!isset($_SESSION)) {
    session_start();
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require './vendor/phpmailer/phpmailer/src/Exception.php';
require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
require './vendor/phpmailer/phpmailer/src/SMTP.php';
require_once "./vendor/phpmailer/phpmailer/src/PHPMailer.php";

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


if (isset($_POST['applyjob'])) {

    $jobid = $_POST['jobid'];
    $date = date("Y-m-d h:i:s a");
    $adID = $_POST['advertiserID'];

    $q = "INSERT INTO `appliedjobs`(`UserId`, `JobId`, `Timestamp`) VALUES ('$data','$jobid','$date')";
    $check = mysqli_query($link, $q);

    if ($check) {

        $advertiser = "SELECT * FROM joblist WHERE JobId='$jobid'";
        $adQuery = mysqli_query($link, $advertiser);
        $adData = mysqli_fetch_array($adQuery);

        $adUserData = "SELECT * FROM users WHERE Uid = '$adID'";
        $AdUserquery = mysqli_query($link, $adUserData);
        $getAdUserData = mysqli_fetch_array($AdUserquery);

        $UserData = "SELECT * FROM userinfo WHERE Uid = '$uid'";
        $Userquery = mysqli_query($link, $UserData);
        $getUserData = mysqli_fetch_array($Userquery);


        $_SESSION['msg'] = "You have successfully applied for the Job!";


        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = "jobportalsmtp@gmail.com"; // GMAIL username
            $mail->Password = "vsipaqybytgbyvnt"; // GMAIL password            
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            //Send Email
            $mail->setFrom('jobportalsmtp@gmail.com');

            //Recipients
            $mail->addAddress($getAdUserData['uemail']);
            $mail->addReplyTo('jobportalsmtp@gmail.com');

            //Content
            $mail->isHTML(true);
            $mail->Subject = "JOB APPLICATION";
            $mail->Body    = $getUserData['FirstName'] . " " . $getUserData['LastName'] . " has applied for a job" .
                " Position: " . $adData['Position'] . " MasterLicense# : " . $adData['MasterLicenseNo'];

            $mail->send();

            $_SESSION['result'] = 'An email has been sent to the Advertiser.';
            $_SESSION['status'] = 'ok';
        } catch (Exception $e) {
            $_SESSION['result'] = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
            $_SESSION['status'] = 'error';
        }
    } else {
        $_SESSION['msg'] = "FAILED";
    }
}
