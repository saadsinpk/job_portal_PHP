<?php
session_start();
include './resources/DBconnection/config.php';
include './resources/template/head/dashHead.php';

if ($_SESSION["U-Email"] == null) {
    header('Location: Login.php');
}


$q =  "Select * from users Where uemail = '" . $_SESSION["U-Email"] . "'";
$ch = mysqli_query($link, $q);
$res = mysqli_fetch_array($ch);


$uid = $res['Uid'];

$q2 =  "Select * from userinfo Where Uid = '$uid'";
$check = mysqli_query($link, $q2);
$result = mysqli_fetch_array($check);

$data = $result['Uid'];

if ($uid != $data) {
    header('Location: CreateProfile.php');
}
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

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header text-center">
                            <a href="#" class="h2"><b>Update</b> Profile</a>
                        </div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" name="u-fname" id="u-fname" placeholder="First Name" value="<?php echo $result['FirstName'] ?>" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" name="u-lname" id="u-lname" placeholder="Last Name" value="<?php echo $result['LastName'] ?>" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-2">
                                        <input type="number" class="form-control" name="u-contact" id="u-contact" required placeholder="Contact No" value="<?php echo $result['ContactNo'] ?>">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-phone"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-group mb-2">
                                            <div class="custom-dropify">
                                                <input type="hidden" id="oldImage" value="<?php echo $result['DriversLicense'] ?>">

                                                <input type="file" class="custom-file-input dropify" name="u-driverLicense" id="u-driverLicense" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group mb-2">
                                            <div class="custom-dropify">
                                                <input type="hidden" id="oldImage1" value="<?php echo $result['SecurityLicense'] ?>">

                                                <input type="file" class="custom-file-input dropify"  name="u-securityLicense" id="u-securityLicense" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-group mb-2">
                                            <div class="custom-dropify">
                                                <input type="hidden" id="oldImage2" value="<?php echo $result['CovidVacc'] ?>">

                                                <input type="file" class="custom-file-input dropify" name="u-covidVacc" id="u-covidVacc" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group mb-2">
                                            <div class="custom-dropify">
                                                <input type="hidden" id="oldImage3" value="<?php echo $result['FirstAid'] ?>">

                                                <input type="file" class="custom-file-input dropify" name="u-firstAid" id="u-firstAid"  required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-group mb-2">
                                            <div class="custom-dropify">
                                                <input type="hidden" id="oldImage4" value="<?php echo $result['RSALicense'] ?>">

                                                <input type="file" class="custom-file-input dropify" name="u-RSALicense" id="u-RSALicense"  required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group mb-2">
                                            <div class="custom-dropify">
                                                <input type="hidden" id="oldImage5" value="<?php echo $result['ProfileImage'] ?>">

                                                <input type="file" class="custom-file-input dropify" name="u-profileImg" id="u-profileImg" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                        </div>




                        <div class="row">
                            <div class="col-12">
                                <button type="submit" name="create" class="btn btn-primary btn-block">Create Profile</button>
                            </div>
                        </div>
                        </form>
                    </div>

                </div>
            </div>

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

include './resources/template/footer/dashFoot.php';
?>