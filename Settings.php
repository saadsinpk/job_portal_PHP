<?php
if(!isset($_SESSION)) { session_start(); }
ob_start();
include './resources/DBconnection/config.php';
include './resources/template/head/dashHead.php';

if ($_SESSION["U-Email"] == null) {
  echo "<script>window.location = 'Login.php';</script>";
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
  echo "<script>window.location = 'CreateProfile.php';</script>";
}
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-12 text-center">
                    <?php
                    if (isset($_SESSION['updatePass'])) {
                    ?>

                        <div class="alert alert-success alert-dismissible" id="myElem">
                            <h5><i class="icon fas fa-check"></i> Success!</h5>
                            <?php echo $_SESSION['updatePass'] ?>
                        </div>
                    <?php unset($_SESSION['updatePass']);
                    } ?>
                </div>
          <div class="col-sm-6">
            <h1>Settings</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <a href="ChangePassword.php">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><i class="fa fa-key"></i></span>
              <div class="info-box-content">
                <span class="info-box-text text-dark">Change Password</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <a href="ManageProfile.php">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="fa fa-pen"></i></span>

              <div class="info-box-content">
                <span class="info-box-text text-dark">Edit Profile</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

      </div>
    </section>
  </div>

<?php

include './resources/template/footer/dashFoot.php';
?>