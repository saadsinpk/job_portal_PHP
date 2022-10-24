<?php
if(!isset($_SESSION)) { session_start(); }

$_SESSION['data'] = "TESTING SESSION";


echo $_SESSION['data'];
echo $_SESSION["U-Email"];
echo $_SESSION["Uid"];
echo $_SESSION['CRmessage'];
echo $_SESSION['message'];

header('Location: test2.php');

?>
