
<?php

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

$data = $result['Uid'];

if ($uid != $data) {
    header('Location: CreateProfile.php');
}


if(isset($_POST['applyjob'])){

    $jobid = $_POST['jobid'];
    $date = date("Y-m-d h:i:s a");

    $q = "INSERT INTO `appliedjobs`(`UserId`, `JobId`, `Timestamp`) VALUES ('$data','$jobid','$date')";
    $check = mysqli_query($link,$q);

    if($check){
        $_SESSION['msg'] = "You have successfully applied for the Job!";
    }else{
        $_SESSION['msg'] = "FAILED";
    }

}


?>