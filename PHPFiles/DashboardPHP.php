<?php
session_start();
include './resources/DBconnection/config.php';

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

        $data = $result['Uid'];
        
    if($uid != $data){
        header('Location: CreateProfile.php');
    }



?>

