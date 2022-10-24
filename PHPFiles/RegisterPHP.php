<?php
if(!isset($_SESSION)) { session_start(); }
    include 'resources/DBconnection/config.php';

    if(isset($_POST['reg'])){
        $email = $_POST['u-email'];
        $password = $_POST['u-password'];
        // $cpass = $_POST['u-cpassword'];
        $date = date("Y-m-d h:i:s a");

        $pass = strlen($password);
        
        $select = mysqli_query($link, "SELECT * FROM users WHERE uemail = '".$_POST['u-email']."'");
        if(!mysqli_num_rows($select)) {
                
            
            if($pass >=6){            
                $q = "INSERT INTO users(uemail, upassword, registrationDate) VALUES ('$email','".md5($password)."','$date')";
                $check = mysqli_query($link,$q);
                $_SESSION['regSuccess']  = "Registration successfull. Please Login to continue.";
                header('Location: Login.php');
            }else{
                $_SESSION['message'] = "REGISTRATION ERROR";
            }
        }else{
            $_SESSION['regFailed'] = 'This email already exists';
        }
    }

    ?>