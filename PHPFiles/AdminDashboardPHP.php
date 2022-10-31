<?php
if (!isset($_SESSION)) {
    session_start();
}
ob_start();
if ($_SESSION["U-Email"] == null) {
    echo "<script>window.location = 'Login.php';</script>";
}


$q =  "Select * from users Where uemail = '" . $_SESSION["U-Email"] . "'";
$ch = mysqli_query($link, $q);
$res = mysqli_fetch_array($ch);


$uid = $res['Uid'];



?>