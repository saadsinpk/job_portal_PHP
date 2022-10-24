<?php
if(!isset($_SESSION)) { session_start(); }
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $q = "Delete from joblist where JobId ='$id'";
    $check = mysqli_query($link, $q);
    if($check){
        $_SESSION['msg'] = "Job Deleted Successfully.";
        echo "<script>window.location = 'ManageJobListing.php';</script>";
    }
    else{
        $_SESSION['msg'] = "Job Delete Failed!";
    }
}

?>
