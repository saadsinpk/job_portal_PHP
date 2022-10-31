<?php
if (!isset($_SESSION)) {
    session_start();
}
include './resources/template/head/dashHead.php';
include 'PHPFiles/AdminDashboardPHP.php';
include 'PHPFiles/UpdateTicketPHP.php';
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
                    <h1 class="m-0"></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">

        <div class="card">
            <div class="card-header d-flex justify-content-center mb-3 mt-5">
                <h4>Update Ticket</h4>
            </div>
            <div class="card-body row d-flex justify-content-center">
                <div class="col-6">
                    <form method="POST">
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <select class="selectpicker form-control" data-mdb-placeholder="Select Days" id="ticket_status" name="ticket_status">
                                <option value="Open">Open</option>
                                <option value="Resolved">Resolved</option>
                                <option value="Closed">Closed</option>
                            </select>
                            <input type="hidden" id="status" name="status" value="<?php echo $supportData['status']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="updateTicket" id="updateTicket" class="btn btn-primary" value="Send message">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- /.content-wrapper -->
<?php
include './resources/template/footer/dashFoot.php';
?>