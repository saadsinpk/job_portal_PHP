<?php
if (!isset($_SESSION)) {
    session_start();
}
include './resources/template/head/dashHead.php';
include 'PHPFiles/AdminDashboardPHP.php';
include 'PHPFiles/SupportPHP.php';
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
            <div class="d-flex float-right">
                    <a href="MyTickets.php" class="btn btn-block btn-dark">My Tickets</a>
            </div>
            <div class="card-header d-flex justify-content-center mb-3 mt-5">
                <h4>Create Ticket</h4>
            </div>
            <div class="card-body row d-flex justify-content-center">
                <div class="col-6">
                    <form method="POST">
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" id="u-name" name="u-name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">E-Mail</label>
                            <input type="email" id="u-email" name="u-email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputSubject">Subject</label>
                            <input type="text" id="u-subject" name="u-subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputMessage">Message</label>
                            <textarea id="u-message" name="u-message" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="sendMessage" class="btn btn-primary" value="Send message">
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