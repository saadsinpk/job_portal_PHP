<?php
include 'PHPFiles/PostJobPHP.php';
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
                                    <input type="text" class="form-control" name="location" id="location" placeholder="Location" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Select Days: </label>
                                    <select class="selectpicker" data-mdb-placeholder="Select Days" name="days" id="days" multiple data-live-search="true" required>
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
                                    <input type="text" class="form-control" name="hours" id="hours" placeholder="Hours" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Job Position</label>
                                    <select onchange="yesnoCheck(this);" class="selectpicker" data-mdb-placeholder="Select Days" name="position" id="position" data-live-search="true" required>
                                        <option value="Age Care Facilities">Age Care Facilities</option>
                                        <option value="RSA Work">RSA Work</option>
                                        <option value="GateHouse">GateHouse</option>
                                        <option value="Retail Rover">Retail Rover</option>
                                        <option value="Retail Shopping Centre">Retail Shopping Centre</option>
                                        <option value="General Static">General Static</option>
                                        <option value="Other ( Name )">Other ( Name )</option>
                                    </select>
                                    <input type="text" class="form-control" name="positions" id="positions" placeholder="Other Position" style="display:none;">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pay</label>
                                    <input type="text" class="form-control" name="pay" id="pay" placeholder="PAY" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <input type="text" name="desc" id="desc" placeholder="Description" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Master License No</label>
                                    <input type="text" name="MLnum" id="MLnum" placeholder="Master License No" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status</label>
                                    <select class="selectpicker" data-mdb-placeholder="Select Job Status" name="status" id="status" required>
                                        <option value="Available">Available</option>
                                        <option value="No Vacancies">No Vacancies</option>
                                    </select>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" id="postJob" name="postJob" class="btn btn-primary">POST JOB</button>
                            </div>




                            

                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>


<?php

include './resources/template/footer/dashFoot.php';
?>