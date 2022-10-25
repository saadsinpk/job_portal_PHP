<?php
if (!isset($_SESSION)) {
    session_start();
}
ob_start();
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
                            <h3 class="card-title">Inbox Jobs.</h3>
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
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;

                                    $q = "SELECT * FROM appliedjobs LEFT JOIN joblist ON joblist.JobId = appliedjobs.JobId LEFT JOIN userinfo ON userinfo.UId = joblist.Uid WHERE appliedjobs.UserId = '$uid' GROUP BY joblist.Uid";
                                    $JobresultNew = mysqli_query($link, $q);
                                    $q2 = "SELECT * FROM joblist LEFT JOIN appliedjobs ON appliedjobs.JobId = joblist.JobId LEFT JOIN userinfo ON userinfo.UId = appliedjobs.UserId WHERE joblist.Uid = '$uid'";
                                    $JobresultNew2 = mysqli_query($link, $q2);
                                    $total_row = mysqli_num_rows($JobresultNew) + mysqli_num_rows($JobresultNew2);
                                    if ($total_row > 0) {
                                        while ($row = mysqli_fetch_array($JobresultNew)) {
                                            if(!empty($row["Uid"])) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row["FirstName"] . " " . $row["LastName"]; ?>
                                                </td>
                                                <td class="text-center">
                                                    <a href="Messenger.php?id=<?php echo $row["Uid"];?>">CHAT</a>
                                                </td>
                                            </tr>
                                        <?php
                                            $i++;
                                            }
                                        }
                                        while ($row = mysqli_fetch_array($JobresultNew2)) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row["FirstName"] . " " . $row["LastName"]; ?>
                                                </td>
                                                <td class="text-center">
                                                    <a href="Messenger.php?id=<?php echo $row["Uid"];?>">CHAT</a>
                                                </td>
                                            </tr>
                                        <?php
                                        $i++;
                                        }
                                    } else {
                                        echo "<tr><td>No result found</td><td></td></tr>";
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