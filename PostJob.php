<?php
include 'PHPFiles/PostJobPHP.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

</head>

<body>

<br>
<a href="ManageJobListing.php" >Manage Jobs</a> <br><br>

    <form method="post">

        <input type="text" name="location" id="location" placeholder="Location" required><br><br>

        <select class="selectpicker" data-mdb-placeholder="Select Days" name="days" id="days" multiple
            data-live-search="true" required>
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
        <input type="text" name="hours" id="hours" placeholder="Hours" required><br><br>

        <select onchange="yesnoCheck(this);" class="selectpicker" data-mdb-placeholder="Select Days" name="position"
            id="position" data-live-search="true" required>
            <option value="Age Care Facilities">Age Care Facilities</option>
            <option value="RSA Work">RSA Work</option>
            <option value="GateHouse">GateHouse</option>
            <option value="Retail Rover">Retail Rover</option>
            <option value="Retail Shopping Centre">Retail Shopping Centre</option>
            <option value="General Static">General Static</option>
            <option value="Other ( Name )">Other ( Name )</option>
        </select><br><br>
        <input type="text" name="positions" id="positions" placeholder="Positions" style="display:none;"
            ><br><br>

        <input type="text" name="pay" id="pay" placeholder="PAY" required><br><br>
        <input type="text" name="desc" id="desc" placeholder="Description" required><br><br>
        <input type="text" name="MLnum" id="MLnum" placeholder="Master License No" required><br><br>

        <select class="selectpicker" data-mdb-placeholder="Select Job Status" name="status" id="status" required>
            <option value="Available">Available</option>
            <option value="No Vacancies">No Vacancies</option>
        </select><br><br>

        <input type="submit" id="postJob" name="postJob" value="Post Job">

    </form>

    <script>
        $(document).ready(function () {
            $('#postJob').click(function () {
                var selected = $("#days :selected").map((_, e) => e.value).get();
                $("#selecteddays").val(selected);
            });
        });

        $('select').selectpicker();


        function yesnoCheck(that) {
            if (that.value == "Other ( Name )") {
                document.getElementById("positions").style.display = "block";
                document.getElementById("positions").setAttribute('required', '');


                var data = document.getElementById("positions").value;
                document.getElementById("position").innerHtml = data;


            } else {
                document.getElementById("positions").style.display = "none";
            }
        }
    </script>

</body>

</html>