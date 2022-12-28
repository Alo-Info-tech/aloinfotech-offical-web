
<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "alogroups";
$conn = mysqli_connect($hostName, $userName, $password, $databaseName);

if (!empty($_POST['submit'])) {
    $name = $_POST['name'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $experience = $_POST['experience'];
    $Applyforpost = $_POST['Applyforpost'];
    $pname = $_FILES["file"]["name"];
    // echo 'resume: ' . $pname;
    $file_size = $_FILES["file"]["size"];
    if (($file_size > 2097152)) {
        // $message = 'File too large. File must be less than 2 megabytes.';
        // echo '<script type="text/javascript">alert("'.$message.'");</script>'; 
        echo "<script>window.location.href='flutter-dev.php?error=1'</script>";
        exit();
    }

    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];

    #upload directory path
    $uploads_dir = 'resumes';
    #TO move the uploaded file to specific location
    $result =  move_uploaded_file($tname, $uploads_dir . '/' . $pname);

    if ($result) {


        // database insert SQL code
        // $sql = "INSERT INTO `tbl_contact` (`name`, `contact`, `email`, `position`,'file') VALUES ( '$name', '$contact', '$email', '$position','$pname')";

        $sql = "INSERT into career(name,phoneno,email,experience,Applyforpost,resume) VALUES('$name','$phoneno','$email','$experience','$Applyforpost','$pname')";
        


        // insert in database 
        $rs = mysqli_query($conn, $sql);

        if ($rs) {

            echo "<script>window.location.href='careers.php?successr=1'</script>";
        } else {
            echo "failed";
        }
    }
}
?>