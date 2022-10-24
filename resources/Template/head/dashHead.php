<?php

$link = mysqli_connect("108.167.133.11", "hiresecu_db", "-mJ.cG@)3fb1", "hiresecu_job_portal");

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


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JOB PORTAL | DASHBOARD </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="resources\assets\plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="resources\assets\dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="resources\assets\plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="resources\assets\plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="resources\assets\plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="resources\assets\plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-th-large"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="Settings.php" class="dropdown-item">
              <i class="fas fa-cog mr-2"></i> Settings
            </a>
            <a href="Signout.php" class="dropdown-item">
              <i class="fas fa-sign-out-alt mr-2"></i> Sign Out
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="resources\assets\dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">JOB PORTAL</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="images/ProfilePicture/<?php echo $result['ProfileImage']; ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $result['FirstName'] . " " . $result['LastName']; ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open mb-2">
              <a href="Dashboard.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item menu-open mb-2">
              <a href="ManageJobListing.php" class="nav-link">
                <i class="nav-icon fas fa-tasks"></i>
                <p>
                  Manage Job Listing
                </p>
              </a>
            </li>
            <li class="nav-item menu-open mb-2">
              <a href="AppliedJobs.php" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>

                <p>
                  Applied Jobs
                </p>
              </a>
            </li>
            <li class="nav-item menu-open mb-2">
              <a href="PostJob.php" class="nav-link">
                <i class="nav-icon fas fa-ad"></i>
                <p>
                  Advertise Job
                </p>
              </a>
            </li>
            <li class="nav-item menu-open mb-2">
              <a href="AppliedUsers.php" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i>
                <p>
                  User Applications (Inbox)
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>