<?php
include_once '../database/db.php';
// include_once '../database/db.php';

$servername = "localhost";
$username = "alogroups2021";
$password = "alogroups2022";
$database = "Alogroups";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_select_db($conn, "alogroups");
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
$status = $_POST['status'];
$id = $_POST['id'];
if ($status == 1) {
//   $query = "Update leave_details  set status='2' WHERE id='$id'";
//   $sql = mysqli_query($db, $query);
$sql = mysqli_query($conn, "Update leave_details  set status='2' WHERE id=$id");
  if ($sql) {
    $to = $_POST['email'];
    $status = $_POST['status'];
    $email = $_POST['email'];
    $subject = 'Leave Approval';
    $message = 'Leave Accepted';
    $message = "<form>
         <label>Email: $email</label><br>
         <label>Subject: $subject</label><br>
         <label>Message: $message</label><br>
         </form>";
    $header = "From:arokiaani2423@gmail.com \r\n";
    $header .= "Cc:arokiaanialogroups@gmail.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $retval = mail($to, $subject, $message, $header);


    if ($retval == true) {

      echo "Leave Accepted";
    } else {
      echo "Declined";
    }
  } else {
    echo "Declined Completely";
  }
}
