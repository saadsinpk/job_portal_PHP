<?php
if(!isset($_SESSION)) { session_start(); }
include 'PHPFiles/CreateProfilePHP.php';
include 'resources/template/head/head.php';
?>

<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="../../index2.html" class="h2"><b>JOB</b>Portal</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Setup Profile</p>
            <?php
            if (isset($_SESSION['CRmessage'])) {
            ?>

                <p class="login-box-msg text-success" style="font-size: 12px;margin-top: -10px;"><?php echo $_SESSION['CRmessage'] ?></p>

            <?php unset($_SESSION['CRmessage']); } ?>
            <form method="post" enctype="multipart/form-data">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" name="u-fname" id="u-fname" placeholder="First Name" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" name="u-lname" id="u-lname" placeholder="Last Name" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-2">
                    <input type="number" class="form-control" name="u-contact" id="u-contact" required placeholder="Contact No">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-phone"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-2">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="u-driverLicense" id="u-driverLicense" required>
                        <label class="custom-file-label text_1" for="exampleInputFile">Driver License</label>
                    </div>
                </div>
                <div class="input-group mb-2">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="u-securityLicense" id="u-securityLicense" required>
                        <label class="custom-file-label text_2" for="exampleInputFile">Security License</label>
                    </div>
                </div>
                <div class="input-group mb-2">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="u-covidVacc" id="u-covidVacc" required>
                        <label class="custom-file-label text_3" for="exampleInputFile">Covid Vaccination</label>
                    </div>
                </div>
                <div class="input-group mb-2">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="u-firstAid" id="u-firstAid" required>
                        <label class="custom-file-label text_4" for="exampleInputFile">First Aid</label>
                    </div>
                </div>
                <div class="input-group mb-2">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="u-RSALicense" id="u-RSALicense" required>
                        <label class="custom-file-label text_5" for="exampleInputFile">RSA License</label>
                    </div>
                </div>
                <div class="input-group mb-2">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="u-profileImg" id="u-profileImg" required>
                        <label class="custom-file-label text_6" for="exampleInputFile">Profile Picture</label>
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
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
    $('#u-driverLicense').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.text_1').html(fileName);
    })
    $('#u-securityLicense').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.text_2').html(fileName);
    })
    $('#u-covidVacc').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.text_3').html(fileName);
    })
    $('#u-firstAid').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.text_4').html(fileName);
    })
    $('#u-RSALicense').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.text_5').html(fileName);
    })
    $('#u-profileImg').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.text_6').html(fileName);
    })
</script>

<?php
include  'resources/template/footer/footer.php';

?>