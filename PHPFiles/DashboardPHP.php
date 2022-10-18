<?php
session_start();

if($_SESSION["U-Email"] == null){
    header('Location: Login.php');
}else if($_SESSION["UserName"] == null){
    header('Location: CreateProfile.php');
}

?>

