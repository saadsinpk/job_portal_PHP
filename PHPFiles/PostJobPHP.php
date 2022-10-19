
    <?php

session_start();

include './resources/DBconnection/config.php';

if($_SESSION["U-Email"] == null){
    header('Location: Login.php');
}


$q =  "Select * from users Where uemail = '".$_SESSION["U-Email"]."'";
$ch = mysqli_query($link,$q);
$res = mysqli_fetch_array($ch);


$uid = $res['Uid'];

$q2 =  "Select * from userinfo Where Uid = '$uid'";
$check = mysqli_query($link,$q2);
$result= mysqli_fetch_array($check);



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

        $q = "INSERT INTO joblist (`Location`, `Days`, `Hours`, `Position`, `Pay`, `Description`, `MasterLicenseNo`, `Status`, `Uid`)
         VALUES ('$Loc','$Days','$Hours','$Post','$Pay','$Desc','$mlNum','$Status','$uid')";
        $check = mysqli_query($link,$q);

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
