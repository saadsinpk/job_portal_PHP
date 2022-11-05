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
                            <table id="example5" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Ticket#</th>
                                        <th>Subject</th>
                                        <th>Create Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_array($query)) { ?>
                                        <?php
                                        if (mysqli_num_rows($query) > 0) {
                                        ?>

                                            <tr>
                                                
                                                <td><?php echo $row['ticketno'] ?></td>
                                                <td><?php echo $row['subject'] ?></td>
                                                <td><?= $row['created_at'] ?></td>
                                                
                                                <?php if ($row['status'] == 'open') { ?>
                                                    <td class="text-light">
                                                        <button aria-readonly="true" class="btn btn-success"><?php echo $row['status'] ?></button>
                                                    </td>
                                                <?php } else if ($row['status'] == 'closed') { ?>
                                                    <td class="text-light">
                                                        <button aria-readonly="true" class="btn btn-danger"><?php echo $row['status'] ?></button>
                                                    </td>
                                                <?php } else if ($row['status'] == 'resolved') { ?>
                                                    <td class="text-light">
                                                        <button aria-readonly="true" class="btn btn-warning"><?php echo $row['status'] ?></button>
                                                    </td>
                                                <?php } ?>
                                                <td>
                                                    <?php if ($res['role'] == 'admin') { ?>
                                                        <a href="Messenger_Support.php?id=<?php echo $row['Uid'] ?>&supp_id=<?= $row['supp_id']?>" title="Contact User"><i class="far fa-comment-dots"></i>
                                                        </a> |
                                                        <a href="UpdateTicket.php?id=<?php echo $row['supp_id'] ?>" title="Update Ticket"><i class="fas fa-edit text-success" aria-hidden="true"></i>
                                                        </a> |
                                                    <?php } else {?>
                                                        <a href="Messenger_Support.php?id=2&supp_id=<?= $row['supp_id']?>" title="Contact User"><i class="far fa-comment-dots"></i>
                                                        </a> |
                                                    <?php } ?>
                                                    <a href="ticket.php?id=<?php echo $row['supp_id'] ?>" name="ticket"  title="View Ticket"><i class="fas fa-info-circle"></i>
                                                    </a> |
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


<?php
include 'resources/template/Footer/dashFoot.php';
?>


<script>
    $(function() {
       
       
    });
</script>