<?php 
if(!isset($_SESSION)) { session_start(); }
ob_start();
session_destroy();
echo "<script>window.location = 'Login.php';</script>";

if(!isset($_SESSION["U-Email"])){
    echo "<script>window.location = 'Login.php';</script>";
}
echo $_SESSION["U-Email"];

?>