<?php
if (!isset($_SESSION)) {
    session_start();
}
include 'PHPFiles/DashboardPHP.php';
include './resources/template/head/dashHead.php';
include 'PHPFiles/AppliedJobsPHP.php';


if ($_SESSION["U-Email"] == null) {
    echo "<script>window.location = 'Login.php';</script>";
}


$q =  "Select * from users Where uemail = '" . $_SESSION["U-Email"] . "'";
$ch = mysqli_query($link, $q);
$res = mysqli_fetch_array($ch);


$uid = $res['Uid'];

$q2 =  "Select * from userinfo Where Uid = '$uid'";
$check = mysqli_query($link, $q2);
$userresult = mysqli_fetch_array($check);

$data = $userresult['Uid'];

if ($uid != $data) {
    echo "<script>window.location = 'CreateProfile.php';</script>";
}

?>

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Applied Jobs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                    </ol>
                </div>
            </div>
        </div>
    </div>

    <?php

    $q = "Select joblist.* , appliedjobs.*
from joblist
INNER JOIN appliedjobs ON joblist.JobId = appliedjobs.JobId WHERE UserId = $uid";
    $result = mysqli_query($link, $q);


    ?>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Available Jobs.</h3>
                            <div class="col-sm-12 text-center">
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Location</th>
                                        <th>Days</th>
                                        <th>Hours</th>
                                        <th>Positions</th>
                                        <th>Pay</th>
                                        <th>Description</th>
                                        <th>MasterLicenseNo</th>
                                        <th>Status</th>
                                        <th>Applied On</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <?php
                                        if (mysqli_num_rows($result) > 0) {
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
                                                    <?php echo $row["Timestamp"]; ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php

include 'resources/template/Footer/dashFoot.php';
?>