<?php
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
                                    <label for="exampleInputEmail1">Location</label>
                                    <input type="text" class="form-control" name="location" id="location" placeholder="Location" value="<?php echo $row["Location"]; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Select Days: </label>
                                    <select class="selectpicker" data-mdb-placeholder="Select Days" name="days" id="days" multiple data-live-search="true" required>
                                        <option selected="<?php echo $row["Days"]; ?>"><?php echo $row["Days"]; ?></option>
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
                                    <label for="exampleInputPassword1">Select Hours</label>
                                    <input type="text" class="form-control" name="hours" id="hours" placeholder="Hours" value="<?php echo $row["Hours"]; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Job Position</label>
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
                                    <label for="exampleInputEmail1">Pay</label>
                                    <input type="text" class="form-control" value="<?php echo $row["Pay"]; ?>" name="pay" id="pay" placeholder="PAY" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <input type="text" name="desc" id="desc" value="<?php echo $row["Description"]; ?>" placeholder="Description" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Master License No</label>
                                    <input type="text" name="MLnum" value="<?php echo $row["MasterLicenseNo"]; ?>" id="MLnum" placeholder="Master License No" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status</label>
                                    <option selected="<?php echo $row["Status"]; ?>"><?php echo $row["Status"]; ?></option>
                                    <select class="selectpicker" data-mdb-placeholder="Select Job Status" name="status" id="status" required>
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

include './resources/template/footer/dashFoot.php';
?>