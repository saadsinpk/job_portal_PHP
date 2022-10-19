<?php
include_once 'resources/DBconnection/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
</head>

<body>




    <?php


    if (isset($_GET['id'])) {
        $jobId = $_GET['id'];

        $qu = "Select * from joblist where JobId = '" . $jobId . "' ";
        $result = mysqli_query($link, $qu);
        $row = mysqli_fetch_array($result);
    }

    ?>
    <form method="post">

        <input type="text" name="location" id="location" placeholder="Location" value="<?php echo $row["Location"]; ?>" required><br><br>

        <select class="selectpicker" data-mdb-placeholder="Select Days" name="days" id="days" multiple data-live-search="true" required>
            <option selected="<?php echo $row["Days"]; ?>"><?php echo $row["Days"]; ?></option>
            <option value="Mon">Monday</option>
            <option value="Tue">Tuesday</option>
            <option value="Wed">Wednesday</option>
            <option value="Thurs">Thursday</option>
            <option value="Fri">Friday</option>
            <option value="Sat">Saturday</option>
            <option value="Sun">Sunday</option>
        </select><br><br>
        <input type="text" name="selecteddays" id="selecteddays" hidden>
        <br><br>

        <input type="text" name="hours" id="hours" placeholder="Hours" value="<?php echo $row["Hours"]; ?>" required><br><br>


        <select onchange="yesnoCheck(this);" class="selectpicker" data-mdb-placeholder="Select Positions" name="position" id="position" data-live-search="true" required>

            <option selected="<?php echo $row["Position"]; ?>"><?php echo $row["Position"]; ?></option>

            <option value="Age Care Facilities">Age Care Facilities</option>
            <option value="RSA Work">RSA Work</option>
            <option value="GateHouse">GateHouse</option>
            <option value="Retail Rover">Retail Rover</option>
            <option value="Retail Shopping Centre">Retail Shopping Centre</option>
            <option value="General Static">General Static</option>
            <option value="Other ( Name )">Other ( Name )</option>
        </select><br><br>
        <input type="text" name="positions" value="<?php echo $row["Position"]; ?>" id="positions" placeholder="Positions" style="display:none;" required><br><br>


        <input type="text" name="pay" id="pay" placeholder="PAY" value="<?php echo $row["Pay"]; ?>" required><br><br>
        <input type="text" name="desc" id="desc" placeholder="Description" value="<?php echo $row["Description"]; ?>" required><br><br>
        <input type="text" value="<?php echo $row["MasterLicenseNo"]; ?>" name="MLnum" id="MLnum" placeholder="Master License No" required><br><br>

        <select class="selectpicker" data-mdb-placeholder="Select Job Status" name="status" id="status" required>
            <option selected="<?php echo $row["Status"]; ?>"><?php echo $row["Status"]; ?></option>
            <option value="Available">Available</option>
            <option value="No Vacancies">No Vacancies</option>
        </select><br><br>

        <input type="submit" id="updateJob" name="updateJob" value="Post Job">

    </form>

    <script>
        $(document).ready(function() {
            $('#updateJob').click(function() {
                var selected = $("#days :selected").map((_, e) => e.value).get();
                $("#selecteddays").val(selected);
            });
        });

        $('select').selectpicker();


        function yesnoCheck(that) {
            if (that.value == "Other ( Name )") {
                document.getElementById("positions").style.display = "block";


                var data = document.getElementById("positions").value;
                document.getElementById("position").innerHtml = data;


            } else {
                document.getElementById("positions").style.display = "none";
            }
        }
    </script>

    <?php

    if (isset($_POST['updateJob'])) {

        $Loc = $_POST['location'];
        $Days = $_POST['selecteddays'];
        $Hours = $_POST['hours'];
        $Post = $_POST['position'];
        $Pay = $_POST['pay'];
        $Desc = $_POST['desc'];
        $mlNum = $_POST['MLnum'];
        $Status = $_POST['status'];

        if ($Post == "Other ( Name )") {
            $p = $_POST['positions'];
            $Post = $p;
        }


        $q = "UPDATE joblist SET `Location`='$Loc',`Days`='$Days',`Hours`='$Hours',`Position`='$Post',`Pay`='$Pay',`Description`='$Desc',`MasterLicenseNo`='$mlNum',`Status`='$Status' WHERE JobId='$jobId'";
        $check = mysqli_query($link, $q);

        if ($check) {
            echo "<script>alert('Job Updated Successfully.')</script>";
            echo "<script>window.location.href = 'ManageJobListing.php'</script>";
        } else {
            echo "<script>alert('Job Update Failed. Please Try Again.')</script>";
        }
    }


    ?>

</body>

</html>