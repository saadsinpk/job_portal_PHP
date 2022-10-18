<?php
include 'PHPFiles/CreateProfilePHP.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
</head>
<body>
 
    <form method="post" enctype="multipart/form-data">

        <input type="text" name="u-fname" id="u-fname" placeholder="First Name" required><br><br>
        <input type="text" name="u-lname" id="u-lname" placeholder="Last Name" required><br><br>
        <input type="number" name="u-contact" id="u-contact" placeholder="Contact No" required><br><br>
        <input type="file" name="u-driverLicense" id="u-driverLicense" required><br><br>
        <input type="file" name="u-securityLicense" id="u-securityLicense" required><br><br>
        <input type="file" name="u-covidVacc" id="u-covidVacc" required><br><br>
        <input type="file" name="u-firstAid" id="u-firstAid" required><br><br>
        <input type="file" name="u-RSALicense" id="u-RSALicense" required><br><br>
        <input type="file" name="u-profileImg" id="u-profileImg" required><br><br>

        <input type="submit" name="create" value="Create Profile">

    </form>
   
</body>
</html>