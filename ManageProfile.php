<?php
session_start();
include './resources/template/head/dashHead.php';
include 'PHPFiles/ManageProfilePHP.php';

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


if ($uid == $data) {

    $qu = "SELECT `FirstName`, `LastName`, `ContactNo`, `DriversLicense`, `SecurityLicense`, `CovidVacc`, `FirstAid`, `RSALicense`, `ProfileImage`, `Uid` FROM `userinfo` WHERE $uid";
    $result = mysqli_query($link, $qu);
    $row = mysqli_fetch_array($result);
}

?>

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Settings</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update Profile</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $row['FirstName']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $row['LastName']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Contact No</label>
                                    <input type="number" class="form-control" id="contact" name="contact" value="<?php echo $row['ContactNo']; ?>">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Profile Picture</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="pp" name="pp" value="<?php echo $row['ProfileImage']; ?>">
                                                    <input type="hidden" value="<?= $row['ProfileImage']; ?>" id="oldpp" name="oldpp">
                                                    <label class="custom-file-label"><?php echo $row['ProfileImage']; ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="images/ProfilePicture/<?php echo $row['ProfileImage']; ?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="img.png" style="height: 150px;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Driver License</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="dl" name="dl" value="<?php echo $row['DriversLicense']; ?>">
                                                    <input type="hidden" value="<?= $row['DriversLicense']; ?>" id="olddl" name="olddl">
                                                    <label class="custom-file-label"><?php echo $row['DriversLicense']; ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <img src="images/DrivingLicense/<?php echo $row['DriversLicense']; ?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="img.png" style="height: 150px;">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Security License</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="sl" name="sl" value="<?php echo $row['SecurityLicense']; ?>">
                                                    <input type="hidden" value="<?= $row['SecurityLicense']; ?>" id="oldsl" name="oldsl">
                                                    <label class="custom-file-label"><?php echo $row['SecurityLicense']; ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <img src="images/SecurityLicense/<?php echo $row['SecurityLicense']; ?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="img.png" style="height: 150px;">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Covid Vaccination</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" value="<?php echo $row['CovidVacc']; ?>" id="cv" name="cv">
                                                    <input type="hidden" value="<?= $row['CovidVacc']; ?>" id="oldcv" name="oldcv">
                                                    <label class="custom-file-label"><?php echo $row['CovidVacc']; ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <img src="images/CovidVacc/<?php echo $row['CovidVacc']; ?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="img.png" style="height: 150px;">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Aid</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="fa" name="fa" value="<?php echo $row['FirstAid']; ?>">
                                                    <input type="hidden" value="<?= $row['FirstAid']; ?>" id="oldfa" name="oldfa">
                                                    <label class="custom-file-label"><?php echo $row['FirstAid']; ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="images/FirstAid/<?php echo $row['FirstAid']; ?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="img.png" style="height: 150px;">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>RSA</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="rsa" name="rsa" value="<?php echo $row['RSALicense']; ?>">
                                                    <input type="hidden" value="<?= $row['RSALicense']; ?>" id="oldrsa" name="oldrsa">
                                                    <label class="custom-file-label"><?php echo $row['RSALicense']; ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <img src="images/RSA/<?php echo $row['RSALicense']; ?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="img.png" style="height: 150px;">
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" name="updateProf" id="updateProf" class="btn btn-primary">UPDATE</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
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