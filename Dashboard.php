<?php
include 'PHPFiles/DashboardPHP.php';
$conn = mysqli_connect("localhost", "root", "", "job_portal");

if ($_SESSION["UserName"] != null) {
    $contact = $_SESSION["UserName"];

    $q = "Select * from userinfo where ContactNo='$contact'";
    $check = mysqli_query($conn, $q);
    $result = mysqli_fetch_array($check);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
</head>

<body>


    <a href="UpdateProfile.php?uid=<?php echo $result['UserId'] ?>">Edit Profile</a><br><br>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'job_portal');

    $q = "Select * from joblist";
    $result = mysqli_query($conn, $q);

    ?>

    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
        <table class="table-bordered">

            <tr>
                <td>Location</td>
                <td>Days</td>
                <td>Hours</td>
                <td>Positions</td>
                <td>Pay</td>
                <td>Description</td>
                <td>MasterLicenseNo</td>
                <td>Status</td>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td>
                        <?php echo $row["Location"]; ?>
                    </td>
                    <td>
                        <?php echo $row["Days"]; ?>
                    </td>
                    <td>
                        <?php echo $row["Hours"]; ?>
                    </td>
                    <td>
                        <?php echo $row["Position"]; ?>
                    </td>
                    <td>
                        <?php echo $row["Pay"]; ?>
                    </td>
                    <td>
                        <?php echo $row["Description"]; ?>
                    </td>
                    <td>
                        <?php echo $row["MasterLicenseNo"]; ?>
                    </td>
                    <td>
                        <?php echo $row["Status"]; ?>
                    </td>
                    <td>
                        <a href="applyJob.php?userJob=<?php echo $row['JobId'] ?>">Apply</a>
                    </td>
                </tr>
            <?php
                $i++;
            }
            ?>
        </table>
    <?php
    } else {
        echo "No result found";
    }
    ?>


</body>

</html>