

    <?php 

session_start();

if($_SESSION["U-Email"] == null){
    header('Location: Login.php');
}



    if (isset($_POST['create'])) {

        $firstname = $_POST['u-fname'];
        $lasttname = $_POST['u-lname'];
        $contact = $_POST['u-contact'];


        

        $dLicensefilename = $_FILES["u-driverLicense"]["name"];
        $DLtempname = $_FILES["u-driverLicense"]["tmp_name"];
        
        $sLfilename = $_FILES["u-securityLicense"]["name"];
        $SLtempname = $_FILES["u-securityLicense"]["tmp_name"];

        $cVfilename = $_FILES["u-covidVacc"]["name"];
        $CVtempname = $_FILES["u-covidVacc"]["tmp_name"];

        $fAfilename = $_FILES["u-firstAid"]["name"];
        $FAtempname = $_FILES["u-firstAid"]["tmp_name"];

        $RSAfilename = $_FILES["u-RSALicense"]["name"];
        $RSAtempname = $_FILES["u-RSALicense"]["tmp_name"];

        $profilefilename = $_FILES["u-profileImg"]["name"];
        $Proftempname = $_FILES["u-profileImg"]["tmp_name"];

        $newName = rand(1,50);

        echo "<h2>".$newName."</h2";


        $folder = "images/DrivingLicense/" . $dLicensefilename;
        $folder1 = "images/SecurityLicense/" . $sLfilename ;
        $folder2 = "images/CovidVacc/" . $cVfilename ;
        $folder3 = "images/FirstAid/" . $fAfilename ;
        $folder4 = "images/RSA/" . $RSAfilename ;
        $folder5 = "images/ProfilePicture/" . $profilefilename ;
        
        $db = mysqli_connect("localhost", "root", "", "job_portal");
     
        // Get all the submitted data from the form
        $sql = "INSERT INTO userinfo(`FirstName`, `LastName`, `ContactNo`, `DriversLicense`, `SecurityLicense`, `CovidVacc`, `FirstAid`, `RSALicense`, `ProfileImage`)  VALUES  ('$firstname','$lasttname','$contact','$dLicensefilename','$sLfilename','$cVfilename','$fAfilename','$RSAfilename','$profilefilename')";
     
        // Execute query
        mysqli_query($db, $sql); 
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($DLtempname, $folder)) {       
            $_SESSION["UserName"] = $contact;
            header('Location: Dashboard.php');
        }
        else {
            echo "<h3>  Failed Creating Profile.!</h3>";
        }
        
        if(move_uploaded_file($SLtempname, $folder1)) {
            header('Location: Dashboard.php');
        }else {
            echo "<h3>  Failed Creating Profile.!</h3>";
        }

        if(move_uploaded_file($CVtempname, $folder2)) {
            header('Location: Dashboard.php');
        }else {
            echo "<h3>  Failed Creating Profile.!</h3>";
        }
        
        if(move_uploaded_file($FAtempname, $folder3)) {
            header('Location: Dashboard.php');
        }else {
            echo "<h3>  Failed Creating Profile.!</h3>";
        } 
        
        if(move_uploaded_file($RSAtempname, $folder4)) {
            header('Location: Dashboard.php');
        }else {
            echo "<h3>  Failed Creating Profile.!</h3>";
        }
        
        if(move_uploaded_file($Proftempname, $folder5)) {
            header('Location: Dashboard.php');
        }else {
            echo "<h3>  Failed Creating Profile.!</h3>";
        }
    }
    
    
    ?>
