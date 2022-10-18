<?php
    $conn = mysqli_connect('localhost','root','','job_portal');


    if(isset($_POST['reg'])){
        $email = $_POST['u-email'];
        $password = $_POST['u-password'];
        $cpass = $_POST['u-cpassword'];
        $date = date("Y-m-d h:i:s a");

        $select = mysqli_query($conn, "SELECT * FROM users WHERE uemail = '".$_POST['u-email']."'");
        if(mysqli_num_rows($select)) {
            exit('This username already exists');
        }

        $q = "INSERT INTO users(uemail, upassword, registrationDate) VALUES ('$email','$password','$date')";
        $check = mysqli_query($conn,$q);

        if($check){
            header('Location: CreateProfile.php');
        }
        else{
            echo "<script>alert('User Already Exist or You're Missing Field. Please Try Again.')</script>";
        }
        
    }

    ?>