<?php
session_start();

include './resources/DBconnection/config.php';

if ($_SESSION["U-Email"] == null) {
    header('Location: Login.php');
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


    <a href="PostJob.php">Post New Job</a><br><br>


    <?php

    $q = "Select * from joblist";
    $result = mysqli_query($link, $q);

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
                <td></td>
                <td></td>
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
                        <a href="updateJob.php?id=<?php echo $row['JobId'] ?>">Update</a>
                    </td>
                    <td>
                        <form method="get">
                            <a href="ManageJobListing.php?id=<?php echo $row['JobId'] ?>" name="cancelListing">Cancel Listing</a>
                        </form>
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


    <?php

    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        $q = "Delete from joblist where JobId ='$id'";
        $check = mysqli_query($link, $q);
    }

    ?>


</body>

</html>