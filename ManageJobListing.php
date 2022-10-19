<?php
session_start();

include './resources/DBconnection/config.php';
include './resources/template/head/dashHead.php';

if ($_SESSION["U-Email"] == null) {
    header('Location: Login.php');
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
    header('Location: CreateProfile.php');
}

$q = "Select * from joblist WHERE Uid = $uid";
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
                            <?php echo $_SESSION['message'] ?>
                        </div>
                    <?php unset($_SESSION['message']);
                    } ?>
                </div>
                <div class="col-sm-12 text-center">
                    <?php
                    if (isset($_SESSION['messagePC'])) {
                    ?>
                        <div class="alert alert-success alert-dismissible" id="myElem">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-check"></i> Success!</h5>
                            <?php echo $_SESSION['messagePC'] ?>
                        </div>
                    <?php unset($_SESSION['messagePC']);
                    } ?>
                </div>
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Jobs</h1>
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
                                <h3 class="card-title">My Job Listing</h3>
                                <div class="col-sm-12 text-center">
                                    <?php
                                    if (isset($_SESSION['msg'])) {
                                    ?>
                                        <div class="alert alert-success alert-dismissible" id="myElem">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h5><i class="icon fas fa-check"></i> Success!</h5>
                                            <?php echo $_SESSION['msg'] ?>
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
                                            <th>Location</th>
                                            <th>Days</th>
                                            <th>Hours</th>
                                            <th>Positions</th>
                                            <th>Pay</th>
                                            <th>Description</th>
                                            <th>MasterLicenseNo</th>
                                            <th>Status</th>
                                            <th></th>
                                            <th></th>
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
                                                        <a class="btn btn-block bg-gradient-success" href="updateJob.php?id=<?php echo $row['JobId'] ?>">Update</a>
                                                    </td>
                                                    <td>
                                                        <form method="get">
                                                            <a class="btn btn-block bg-gradient-danger"  href="ManageJobListing.php?id=<?php echo $row['JobId'] ?>" name="cancelListing">Cancel Listing</a>
                                                        </form>
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





<?php

include './resources/template/footer/dashFoot.php';
?>