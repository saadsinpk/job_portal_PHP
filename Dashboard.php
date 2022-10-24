<?php
if(!isset($_SESSION)) { session_start(); }
include 'PHPFiles/DashboardPHP.php';
include './resources/template/head/dashHead.php';
include 'PHPFiles/ApplyJobPHP.php';
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
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                    </ol>
                </div>
            </div>
        </div>
    </div>
    <?php
    $q = "Select * from joblist";
    $result = mysqli_query($link, $q);

    $qu = "Select * from appliedjobs WHERE UserId = '" . $uid . "'";
    $row2 =  mysqli_query($link, $qu);
    $list = mysqli_fetch_array($row2);

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
                                        <th>Posted On</th>
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
                                                    <?php echo $row["Timestamp"]; ?>
                                                </td>

                                                <?php
                                                if ($list != null) {
                                                    if ($uid == $list['UserId'] && $uid != $row['Uid']) {
                                                ?>
                                                        <td>
                                                            <input type="submit" class="btn btn-block bg-gradient-success" disabled value="APPLIED" name="applyjob">
                                                        </td>
                                                    <?php
                                                    } else {
                                                    ?>

                                                        <td>
                                                            <a href="ManageJobListing.php" class="btn btn-block bg-gradient-primary">Manage</a>
                                                        </td>

                                                    <?php }
                                                } else {
                                                    if ($row['Uid'] == $uid) {
                                                    ?>
                                                        <td>
                                                            <a href="ManageJobListing.php" class="btn btn-block bg-gradient-primary">Manage</a>
                                                        </td>

                                                    <?php } else { ?>
                                                        <td>
                                                            <form method="post">
                                                                <input type="text" class="btn btn-block bg-gradient-success" value="<?php echo $row['JobId'] ?>" id="jobid" name="jobid" hidden>
                                                                <input type="submit" class="btn btn-block bg-gradient-success" value="Apply" name="applyjob">
                                                            </form>
                                                        </td>

                                                <?php }
                                                } ?>





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
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false
        }).container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

<?php

include './resources/template/footer/dashFoot.php';
?>