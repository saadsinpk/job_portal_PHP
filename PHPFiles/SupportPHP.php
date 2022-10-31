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

if (isset($_POST['sendMessage'])) {
    $name = $_POST['u-name'];
    $email = $_POST['u-email'];
    $subject = $_POST['u-subject'];
    $message = $_POST['u-message'];
    $status = "open";
    $userId = $data;

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $string = '';

    function getRandomString($length = 32) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
        $string = '';
    
        for ($i = 0; $i < $length; $i++) {
            $string .= $characters[mt_rand(0, strlen($characters) - 1)];
        }
    
        return $string;
    }
    
    $ticketNo = getRandomString();


    $msgQuery = "INSERT INTO `support`(`name`, `email`, `subject`, `message`,`status`,`Uid`,`ticketno`) VALUES ('$name','$email','$subject','$message','$status','$userId','$ticketNo')";
    $runQuery = mysqli_query($link, $msgQuery);

    if ($runQuery) {
        $_SESSION['message'] = "You're request has been submitted successfully.";
        echo "<script>window.location = 'MyTickets.php'</script>";
    } else {
        $_SESSION['message'] = "ERROR SEND REQUEST. TRY AGAIN LATER.";
        echo "<script>window.location = 'ContactSupport.php'</script>";
    }
}
