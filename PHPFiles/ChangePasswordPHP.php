    <?php
    if(!isset($_SESSION)) { session_start(); }

    // include './resources/DBconnection/config.php';

    if ($_SESSION["U-Email"] == null) {
        echo "<script>window.location = 'Login.php';</script>";
    }


    $q =  "Select * from users Where uemail = '" . $_SESSION["U-Email"] . "'";
    $ch = mysqli_query($link, $q);
    $res = mysqli_fetch_array($ch);
    
    
    $uid = $res['Uid'];

if(isset($_POST['update'])){

    $old = $_POST['oldPass'];
    $new = $_POST['newPass'];
    $cPass = $_POST['cPass'];


    $q= "Select * from users Where  uemail= '".$_SESSION["U-Email"]."' &&  upassword = '$old' ";
    $check = mysqli_query($link,$q);

    if($check){

        $qu = "UPDATE `users` SET `uemail`='".$_SESSION["U-Email"]."',`upassword`='".md5($new)."' WHERE Uid = '$uid'";
        $res = mysqli_query($link,$qu);
        $_SESSION['updatePass'] = "Password Updated Successfully.";
        echo "<script>window.location.href = 'Settings.php';</script>";

    }



}













    ?>


