<?php
if(!isset($_SESSION)) { session_start(); }
ob_start();

include './resources/DBconnection/config.php';
    if(isset($_POST['log'])){
    // echo "<pre>";
    //     print_r($_POST);
    // echo "</pre>";
        $email = $_POST['u-email'];
        $password = $_POST['u-password'];


        $select = mysqli_query($link, "SELECT * FROM users WHERE uemail = '".$_POST['u-email']."' AND upassword = '".md5($password)."'");

        $row = mysqli_fetch_array($select);
       
        if(mysqli_num_rows($select)) {
            $_SESSION["U-Email"] = $row['uemail'];
            $_SESSION["Uid"] = $row['Uid'];
            $_SESSION['CRmessage'] = 'Logged in Successfully!' . "</br>" . 'Please create your profile to continue.';
            $_SESSION['message'] = "Logged in Successfully! Welcome to JOB PORTAL Dashboard.";      
            echo "<script>window.location = 'Dashboard.php';</script>";
        }
        else{
            $_SESSION['message'] = "Invalid Email/Passowrd";
        }
        
    }
    // exit();

    ?>