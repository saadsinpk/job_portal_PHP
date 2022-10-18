
<?php
session_start();

$conn = mysqli_connect('localhost','root','','job_portal');


    if(isset($_POST['log'])){
        $email = $_POST['u-email'];
        $password = $_POST['u-password'];

        $select = mysqli_query($conn, "SELECT * FROM users WHERE uemail = '".$_POST['u-email']."' AND upassword = '".$_POST['u-password']."'");
       
        if(mysqli_num_rows($select)) {
            $_SESSION["U-Email"] = $email;
            header('Location: Dashboard.php');
        }
        else{
            exit("Invalid Email/Password.");
        }
        
    }

    ?>