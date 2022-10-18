
    <?php

session_start();

if($_SESSION["U-Email"] == null){
    header('Location: Login.php');
}


    $conn = mysqli_connect('localhost','root','','job_portal');


    if(isset($_POST['postJob'])){
        $Loc = $_POST['location'];
        $Days = $_POST['selecteddays'];
        $Hours = $_POST['hours'];
        $Post = $_POST['position'];
        $Pay = $_POST['pay'];
        $Desc = $_POST['desc'];
        $mlNum = $_POST['MLnum'];
        $Status = $_POST['status'];

        if($Post == "Other ( Name )"){
            $p = $_POST['positions'];
            $Post = $p;
        }

        $q = "INSERT INTO joblist (`Location`, `Days`, `Hours`, `Position`, `Pay`, `Description`, `MasterLicenseNo`, `Status`)
         VALUES ('$Loc','$Days','$Hours','$Post','$Pay','$Desc','$mlNum','$Status')";
        $check = mysqli_query($conn,$q);

        $counter = 0;

        if($check){
            echo "<script>alert('Job Posted Successfully.')</script>";
            $counter ++;
        }
        else{
            echo "<script>alert('Job Post Failed. Please Try Again.')</script>";
        }

        if($counter > 0){
            header('Location: ManageJobListing.php');
            exit();
        }

    }
     
     
?>
