<?php
if(!isset($_SESSION)) { session_start(); }
include './PHPFiles/UpdateJobPHP.php';
include './resources/template/head/dashHead.php';


?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Advertise Job</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Job Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post">

                            <div class="card-body">
                                <div class="form-group">
                                    <label >Location</label>
                                    <input type="text" class="form-control" name="location" id="location" placeholder="Location" value="<?php echo $row["Location"]; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label >Select Days: </label>
                                    <select class="selectpicker" data-mdb-placeholder="Select Days" name="days[]" id="days[]" multiple data-live-search="true" required>
                                        <option selected="<?php echo $row["Days"]; ?>" value="<?php echo $row["Days"]; ?>"><?php echo $row["Days"]; ?></option>
                                        <option value="Mon">Monday</option>
                                        <option value="Tue">Tuesday</option>
                                        <option value="Wed">Wednesday</option>
                                        <option value="Thurs">Thursday</option>
                                        <option value="Fri">Friday</option>
                                        <option value="Sat">Saturday</option>
                                        <option value="Sun">Sunday</option>
                                    </select>
                                    <input type="text" name="selecteddays" id="selecteddays" hidden>
                                </div>
                                <div class="form-group">
                                    <label >Select Hours</label>
                                    <select class="selectpicker" data-mdb-placeholder="Select Days" name="hours" id="hours" data-live-search="true" required>
                                        <option selected="<?php echo $row["Hours"]; ?>"><?php echo $row["Hours"]; ?></option>
                                        <option value="1hour">1hour</option>
                                        <option value="2hours">2hours</option>
                                        <option value="3hours">3hours</option>
                                        <option value="4hours">4hours</option>
                                        <option value="5hours">5hours</option>
                                        <option value="6hours">6hours</option>
                                        <option value="7hours">7hours</option>
                                        <option value="8hours">8hours</option>
                                        <option value="9hours">9hours</option>
                                        <option value="10hours">10hours</option>
                                        <option value="11hours">11hours</option>
                                        <option value="12hours">12hours</option>
                                        <option value="13hours">13hours</option>
                                        <option value="14hours">14hours</option>
                                        <option value="15hours">15hours</option>
                                        <option value="16hours">16hours</option>
                                        <option value="17hours">17hours</option>
                                        <option value="18hours">18hours</option>
                                        <option value="19hours">19hours</option>
                                        <option value="20hours">20hours</option>
                                        <option value="21hours">21hours</option>
                                        <option value="22hours">22hours</option>
                                        <option value="23hours">23hours</option>
                                        <option value="24hours">24hours</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label >Job Position</label>
                                    <select onchange="yesnoCheck(this);" class="selectpicker" data-mdb-placeholder="Select Days" name="position" id="position" data-live-search="true" required>
                                        <option selected="<?php echo $row["Position"]; ?>"><?php echo $row["Position"]; ?></option>
                                        <option value="Age Care Facilities">Age Care Facilities</option>
                                        <option value="RSA Work">RSA Work</option>
                                        <option value="GateHouse">GateHouse</option>
                                        <option value="Retail Rover">Retail Rover</option>
                                        <option value="Retail Shopping Centre">Retail Shopping Centre</option>
                                        <option value="General Static">General Static</option>
                                        <option value="Other ( Name )">Other ( Name )</option>
                                    </select>
                                    <input type="text" class="form-control" value="<?php echo $row["Position"]; ?>" name="positions" id="positions" placeholder="Other Position" style="display:none;">
                                </div>
                                <div class="form-group">
                                    <label >Pay</label>
                                    <input type="text" class="form-control" value="<?php echo $row["Pay"]; ?>" name="pay" id="pay" placeholder="PAY" required>
                                </div>
                                <div class="form-group">
                                    <label >Description</label>
                                    <input type="text" name="desc" id="desc" value="<?php echo $row["Description"]; ?>" placeholder="Description" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label >Master License No</label>
                                    <input type="text" name="MLnum" value="<?php echo $row["MasterLicenseNo"]; ?>" id="MLnum" placeholder="Master License No" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label >Status</label>
                                    <select class="selectpicker" data-mdb-placeholder="Select Job Status" name="status" id="status" required>
                                        <option selected="<?php echo $row["Status"]; ?>"><?php echo $row["Status"]; ?></option>
                                        <option value="Available">Available</option>
                                        <option value="No Vacancies">No Vacancies</option>
                                    </select>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" id="updateJob" name="updateJob" class="btn btn-success">UPDATE JOB</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    $(document).ready(function() {
        $('#updateJob').click(function() {
            var selected = $("#days :selected").map((_, e) => e.value).get();
            $("#selecteddays").val(selected);
        });
    });

    $('select').selectpicker();


    function yesnoCheck(that) {
        if (that.value == "Other ( Name )") {
            document.getElementById("positions").style.display = "block";


            var data = document.getElementById("positions").value;
            document.getElementById("position").innerHtml = data;


        } else {
            document.getElementById("positions").style.display = "none";
        }
    }
</script>


<?php
include 'resources/template/Footer/dashFoot.php';
?>