
<?php
session_start();

include './resources/DBconnection/config.php';


    if(isset($_POST['log'])){
        $email = $_POST['u-email'];
        $password = $_POST['u-password'];


        $select = mysqli_query($link, "SELECT * FROM users WHERE uemail = '".$_POST['u-email']."' AND upassword = '".md5($password)."'");

        $row = mysqli_fetch_array($select);
       
        if(mysqli_num_rows($select)) {
            $_SESSION["U-Email"] = $email;
            $_SESSION["Uid"] = $row['Uid'];
            $_SESSION['CRmessage'] = 'Logged in Successfully!' . "</br>" . 'Please create your profile to continue.';
            $_SESSION['message'] = "Logged in Successfully! Welcome to JOB PORTAL Dashboard.";      
            header('Location: Dashboard.php');
        }
        else{
            $_SESSION['message'] = "Invalid Email/Passowrd";
        }
        
    }

    ?>