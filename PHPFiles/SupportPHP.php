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


$q2 =  "SELECT ticketno FROM `support` ORDER BY supp_id DESC LIMIT 1";
$check = mysqli_query($link, $q2);
$support = mysqli_fetch_array($check);

$supportLastTicketNo = ltrim($support['ticketno'],'0');

 
$ticketNo = 0;

$data = $result['Uid'];


$q =  "Select * from users Where uemail = '" . $_SESSION["U-Email"] . "'";
$ch = mysqli_query($link, $q);
$res = mysqli_fetch_array($ch);

$uid = $res['Uid'];

$q2 =  "Select * from userinfo Where Uid = '$uid'";
$check = mysqli_query($link, $q2);
$result = mysqli_fetch_array($check);

$name = $result['FirstName'] . " " . $result['LastName'];


if (isset($_POST['sendMessage'])) {
    $name = $name;
    $email = $_SESSION["U-Email"];
    $subject = $_POST['u-subject'];
    $message = $_POST['u-message'];
    $status = "open";
    $userId = $data;
    $today = date("Y-m-d H:i:s");

    if($supportLastTicketNo > 0){
        $ticketNo = str_pad($supportLastTicketNo+1, 6, '0', STR_PAD_LEFT);
    }else{
        $ticketNo = str_pad(1, 6, '0', STR_PAD_LEFT);
    }
     


    $msgQuery = "INSERT INTO `support`(`name`, `email`, `subject`, `message`,`status`,`Uid`,`ticketno`,`created_at`) VALUES ('$name','$email','$subject','$message','$status','$userId','$ticketNo','$today')";
    $runQuery = mysqli_query($link, $msgQuery);

    if ($runQuery) {
        $_SESSION['message'] = "You're request has been submitted successfully.";
        // echo "<script>window.location = 'MyTickets.php'</script>";
    } else {
        $_SESSION['message'] = "ERROR SEND REQUEST. TRY AGAIN LATER.";
        // echo "<script>window.location = 'ContactSupport.php'</script>";
    }
       
}
