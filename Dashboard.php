<?php
include 'PHPFiles/DashboardPHP.php';
include './resources/template/head/dashHead.php';
?>





<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Profile</a></li>
                        <li class="breadcrumb-item active">Dashboard v3</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <?php
    $q = "Select * from joblist";
    $result = mysqli_query($link, $q);

    ?>

    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Available Jobs.</h3>
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
                                        </tr>
                                    </thead>
                                    <?php
                                    $i = 0;
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <tbody>
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
                                                    <a href="applyJob.php?userJob=<?php echo $row['JobId'] ?>" class="btn btn-block bg-gradient-success">Apply</a>
                                                </td>
                                            </tr>
                                        </tbody>
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
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
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