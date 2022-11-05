<?php
if (!isset($_SESSION)) {
    session_start();
}
include './resources/template/head/dashHead.php';
include 'PHPFiles/TicketsPHP.php';


if(isset($_GET["id"])){
$query =  "Select * from support Where supp_id = '" . $_GET["id"] . "'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
}
else{
    echo "<script>window.location = 'MyTickets.php';</script>";
}
//  var_dump($row);
//  echo $row['subject'];
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
                            <h3 class="card-title">Ticket</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                                    <h3 class="card-title"><b>Ticket # : </b><?= $row['ticketno'] ?></h3>
                                    <br>
                                    <h3 class="card-title"><b>Email : </b><?= $row['email'] ?></h3>
                                    <br>
                                    <h3 class="card-title"><b>Name : </b><?= $row['name'] ?></h3>
                                    <br>
                                    <h3 class="card-title"><b>Created Date : </b><?= $row['created_at'] ?></h3>
                                    <br>
                                    <h3 class="card-title"><b>Status : </b><?= $row['status'] ?></h3>
                                    <br>
                                    <h3 class="card-title"><b>Subject : </b><?= $row['subject'] ?></h3>
                                    <p class="card-text"><b>Message : </b><?= nl2br($row['message']); ?></p>
                                     
                                   
                                
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
include 'resources/template/Footer/dashFoot.php';
?>