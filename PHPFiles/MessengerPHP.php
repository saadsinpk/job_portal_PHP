<?php 
    include './resources/DBconnection/config.php';

if ($_SESSION["U-Email"] == null) {
    header('Location: Login.php');
}


$q =  "Select * from users Where uemail = '" . $_SESSION["U-Email"] . "'";
$ch = mysqli_query($link, $q);
$res = mysqli_fetch_array($ch);


$uid = $res['Uid'];

$q2 =  "Select * from userinfo Where Uid = '$uid'";
$check = mysqli_query($link, $q2);
$result = mysqli_fetch_array($check);

$currentUser = $result['Uid'];

$_SESSION['user'] = $currentUser;

if ($uid != $currentUser) {
    header('Location: CreateProfile.php');
}


if(isset($_GET['id'])){
    $user = $_GET['id'];

    
    $query = "SELECT * FROM chat WHERE sender_userid='$user'";
    $run = mysqli_query($link,$query);

    $data = mysqli_fetch_array($run);
    $_SESSION['user'] =  $user;
}

if(isset($_POST['sendmsg'])){

    $msg = $_POST["message"];
    
    $msgquery = "INSERT INTO `chat`(`sender_userid`, `reciever_userid`, `message`) VALUES ('$uid','$user','$msg')";

    $sendmsg = mysqli_query($link,$msgquery);
}
