<?php 
session_start();
session_destroy();
header('Location: Login.php');

if(!isset($_SESSION["U-Email"])){
    header('Location: Login.php');
}
echo $_SESSION["U-Email"];

?>