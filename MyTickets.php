<?php
if (!isset($_SESSION)) {
    session_start();
}
include './resources/template/head/dashHead.php';
include 'PHPFiles/TicketsPHP.php';
include 'PHPFiles/DeleteTicketPHP.php';
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
                    <h1 class="m-0">My Tickets</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                    </ol>
                </div>
            </div>
        </div>
    </div>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tickets</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Ticket#</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_array($query)) { ?>
                                        <?php
                                        if (mysqli_num_rows($query) > 0) {
                                        ?>

                                            <tr>
                                                <td><?php echo $row['FirstName'] . $row['LastName'] ?></td>
                                                <td><?php echo $row['ContactNo'] ?></td>
                                                <td><?php echo $row['subject'] ?></td>
                                                <td><?php echo $row['message'] ?></td>
                                                <?php if ($row['status'] == 'Open') { ?>
                                                    <td class="text-light">
                                                        <button aria-readonly="true" class="btn btn-success"><?php echo $row['status'] ?></button>
                                                    </td>
                                                <?php } else if ($row['status'] == 'Closed') { ?>
                                                    <td class="text-light">
                                                        <button aria-readonly="true" class="btn btn-danger"><?php echo $row['status'] ?></button>
                                                    </td>
                                                <?php } else if ($row['status'] == 'Resolved') { ?>
                                                    <td class="text-light">
                                                        <button aria-readonly="true" class="btn btn-warning"><?php echo $row['status'] ?></button>
                                                    </td>
                                                <?php } ?>
                                                <td><?php echo $row['ticketno'] ?></td>
                                                <td>
                                                    <?php if ($res['role'] == 'admin') { ?>
                                                        <a href="Messenger.php?id=<?php echo $row['Uid'] ?>" title="Contact User"><i class="fa fa-phone text-primary" aria-hidden="true"></i>
                                                        </a>&nbsp;|
                                                        <a href="UpdateTicket.php?id=<?php echo $row['supp_id'] ?>" title="Update Ticket"><i class="fa fa-underline text-success" aria-hidden="true"></i>
                                                        </a>&nbsp;|
                                                    <?php } ?>
                                                    <a href="MyTickets.php?id=<?php echo $row['supp_id'] ?>" name="deleteTicket" onclick="return  confirm('do you want to delete Y/N')" title="Remove Ticket"><i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                    <?php }
                                    } ?>
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