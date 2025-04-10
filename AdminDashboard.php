<?php
if (!isset($_SESSION)) {
    session_start();
}
include './resources/template/head/dashHead.php';
include 'PHPFiles/AdminDashboardPHP.php';

// echo $_SERVER['SERVER_NAME'];
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


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Users</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Contact#</th>
                                        <th>Registration Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $userList =  "SELECT users.* , userinfo.* from users LEFT JOIN userinfo ON userinfo.UserId = users.Uid";
                                    $result = mysqli_query($link, $userList); ?>
                                    <?php while ($row = mysqli_fetch_array($result)) { ?>
                                        <?php
                                        if (mysqli_num_rows($result) > 0) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['uemail'] ?></td>
                                                <td><?php echo $row['FirstName'] . $row['LastName'] ?></td>
                                                <td><?php echo $row['ContactNo'] ?></td>
                                                <td><?php echo $row['registrationDate'] ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg<?php echo $row['Uid'] ?>">More Details
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- MODAL PHP -->

                                            <?php

                                            if (isset($_GET['id'])) {
                                                $userId = $_GET['id'];

                                                $userData = "SELECT * FROM userinfo WHERE `Uid` = '" . $_GET['id'] . "' ";
                                                $qu = mysqli_query($link, $userData);
                                                $userDetails = mysqli_fetch_array($qu);
                                            }
                                            ?>
                                            <!-- USER DETAILS MODAL -->

                                            <div class="modal fade" id="modal-lg<?php echo $row['Uid'] ?>">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title"><?php echo $row['FirstName']; ?></h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="post">
                                                                <div class="user-block">
                                                                    
                                                                    <img class="img-circle img-bordered-sm" src="images/ProfilePicture/<?php echo $row['ProfileImage']; ?>" alt="User Image">
                                                                    <span class="username">
                                                                        <a href="#"><?php echo $row['FirstName']; ?></a><br>
                                                                        <small><?php echo $row['uemail']; ?>
                                                                    </span>
                                                                </div>
                                                                <br>
                                                                <div class="row mb-3">
                                                                    <div class="col-sm-12 mb-2">
                                                                        <label class="h5 text-center">Divers License</label>
                                                                        &nbsp;&nbsp;
                                                                        <?php if(!empty($row['DriversLicense'])) {?>
                                                                            <a  class='btn btn-primary' download href="images/DrivingLicense/<?php echo $row['DriversLicense']; ?>">Download</a>
                                                                        <?php } ?>
                                                                         

                                                                    </div>
                                                                    
                                                                    <div class="col-sm-12  mb-2">
                                                                        <label class="h5 text-center">Security License</label>
                                                                        &nbsp;&nbsp;
                                                                        <?php if(!empty($row['SecurityLicense'])) {?>
                                                                            <a  class='btn btn-primary' download href="images/SecurityLicense/<?php echo $row['SecurityLicense']; ?>">Download</a>
                                                                        <?php } ?>
                                                                       
                                                                    </div>
                                                                   
                                                                    <div class="col-sm-12 mb-2">
                                                                        <label class="h5 text-center">First Aid</label>
                                                                         &nbsp;&nbsp;
                                                                        <?php if(!empty($row['FirstAid'])) {?>
                                                                            <a  class='btn btn-primary' download href="images/FirstAid/<?php echo $row['FirstAid']; ?>">Download</a>
                                                                        <?php } ?>

                                                                         
                                                                    </div>
                                                                     
                                                                    <div class="col-sm-12  mb-2">
                                                                        <label class="h5 text-center">Covid Vaccination</label>
                                                                       &nbsp;&nbsp;
                                                                        <?php if(!empty($row['CovidVacc'])) {?>
                                                                            <a  class='btn btn-primary' download href="images/CovidVacc/<?php echo $row['CovidVacc']; ?>">Download</a>
                                                                        <?php } ?>
                                                                         
                                                                    </div>
                                                                  
                                                                    <div class="col-sm-12 mb-2">
                                                                        <label class="h5 text-center">RSA License</label>
                                                                        &nbsp;&nbsp;
                                                                        <?php if(!empty($row['RSALicense'])) {?>
                                                                            <a  class='btn btn-primary' download href="images/RSA/<?php echo $row['RSALicense']; ?>">Download</a>
                                                                        <?php } ?>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-end">
                                                             
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close" >Close</button>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
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

include 'resources/template/Footer/dashFoot.php';
?>