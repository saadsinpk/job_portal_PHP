<?php
session_start();
include './resources/template/head/dashHead.php';
include 'PHPFiles/AppliedUsersPHP.php';
?>



<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
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
                                        <th>Name</th>
                                        <th>Contact#</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;

                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <?php
                                        if (mysqli_num_rows($query) > 0) {
                                            if ($row['Uid'] != $uid) {
                                        ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $row["FirstName"] . " " . $row["LastName"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["ContactNo"]; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <form method="get" action="Messenger.php">

                                                            <input type="text" name="id" id="id" value="<?php echo $row["Uid"]; ?>" hidden>

                                                            <button type="submit" class="btn btn-primary" title="Start Chat" name="chat" id="chat">
                                                                <i class="fas fa-comments"></i> CHAT
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
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
                </div>


            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

include './resources/template/footer/dashFoot.php';
?>