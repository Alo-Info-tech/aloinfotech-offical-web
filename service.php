<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "alogroups";
$conn = mysqli_connect($hostName, $userName, $password, $databaseName);

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$companyname=$_POST['companyname'];
$countrycode=$_POST['countrycode'];
$phonenumber=$_POST['phonenumber'];
$interestedservices=$_POST['interestedservices'];
$budget=$_POST['budget'];
$message=$_POST['message'];
if (isset($name)&& isset($email)&& isset($companyname)) {
    $sql = "INSERT into quote(name,email,companyname,countrycode,phonenumber,interestedservices,budget,message) VALUES('$name','$email','$companyname', '$countrycode','$phonenumber','$interestedservices','$budget','$message')";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        
        echo "<script>window.location.href='request-for-services.php?successr=1'</script>";
    } else {
        echo "failed";
    }

}

}
