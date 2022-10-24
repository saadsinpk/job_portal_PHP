<?php
if(!isset($_SESSION)) { session_start(); }
ob_start();

include './resources/DBconnection/config.php';
include './resources/template/head/dashHead.php';
if(!isset($_GET['id'])) {
    echo "<script>window.location = 'ManageJobListing.php';</script>";
    exit();
}
$q =  "Select * from joblist Where JobId = '" . $_GET["id"] . "'";
$ch = mysqli_query($link, $q);
$rowcount=mysqli_num_rows($ch);
if($rowcount == 0) {
    echo "<script>window.location = 'ManageJobListing.php';</script>";
    exit();
}
$res_view_job = mysqli_fetch_array($ch);

if ($_SESSION["U-Email"] == null) {
    echo "<script>window.location = 'Login.php';</script>";
}

$q =  "Select * from users Where uemail = '" . $_SESSION["U-Email"] . "'";
$ch = mysqli_query($link, $q);
$res = mysqli_fetch_array($ch);


$uid = $res['Uid'];

$q2 =  "Select * from userinfo Where Uid = '$uid'";
$check = mysqli_query($link, $q2);
$result = mysqli_fetch_array($check);

$data = $result['Uid'];

if ($uid != $data) {
    echo "<script>window.location = 'CreateProfile.php';</script>";
}

$q = "Select * from appliedjobs LEFT JOIN userinfo ON userinfo.UserId = appliedjobs.UserId WHERE JobId = '".$_GET['id']."' ";
$result = mysqli_query($link, $q);


?>
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 text-center">
                    <?php
                    if (isset($_SESSION['message'])) {
                    ?>
                        <div class="alert alert-success alert-dismissible" id="myElem">
                            <h5><i class="icon fas fa-check"></i> Success!</h5>
                            <p class="text-center"><?php echo $_SESSION['msg'] ?></p>
                        </div>
                    <?php unset($_SESSION['message']);
                    } ?>
                </div>
                <div class="col-sm-6">
                    <h1 class="m-0">View User Apply <b><?php echo $res_view_job['Location'];?></b></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                    </ol>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">View User Apply</h3>
                                <div class="col-sm-12 text-center">
                                    <?php
                                    if (isset($_SESSION['msg'])) {
                                    ?>
                                        <div class="alert alert-success alert-dismissible" id="myElem">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h5><i class="icon fas fa-check"></i> Success!</h5>
                                            <p class="text-center"><?php echo $_SESSION['msg'] ?></p>
                                        </div>
                                    <?php unset($_SESSION['msg']);
                                    } ?>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Img</th>
                                            <th>Name</th>
                                            <th>No#</th>
                                            <th>Driving</th>
                                            <th>Security</th>
                                            <th>Covid</th>
                                            <th>Aid</th>
                                            <th>RSA</th>
                                            <th>Posted On</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0;

                                        while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                            <?php
                                            if (mysqli_num_rows($result) > 0) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <img src="images/ProfilePicture/<?php echo $row["ProfileImage"]; ?>" style="max-width:50px;">
                                                    </td>
                                                    <td>
                                                        <?php echo $row["FirstName"]; ?> <?php echo $row["LastName"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["ContactNo"]; ?>
                                                    </td>
                                                    <td>
                                                        <a href="images/DrivingLicense/<?php echo $row["DriversLicense"]; ?>">Download</a>
                                                    </td>
                                                    <td>
                                                        <a href="images/SecurityLicense/<?php echo $row["SecurityLicense"]; ?>">Download</a>
                                                    </td>
                                                    <td>
                                                        <a href="images/CovidVacc/<?php echo $row["CovidVacc"]; ?>">Download</a>
                                                    </td>
                                                    <td>
                                                        <a href="images/FirstAid/<?php echo $row["FirstAid"]; ?>">Download</a>
                                                    </td>
                                                    <td>
                                                        <a href="images/RSA/<?php echo $row["RSALicense"]; ?>">Download</a>
                                                    </td>
                                                    <td>
                                                        <?php echo 'test'; ?>
                                                    </td>
                                                </tr>
                                            <?php
                                            } else {
                                                echo "No result found";
                                            }
                                            ?>
                                        <?php
                                            $i++;
                                        }
                                        ?>
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
    </div>
</div>

<?php

include './resources/template/footer/dashFoot.php';
?>