<?php
$to = $_POST['email'];
$name = $_POST['name'];
$email = $_POST['email'];
$subject = "Leave Info";
$message = "Leave Accepted";
$message = "<form>
         <label>Name: $name</label><br>
         <label>Email: $email</label><br>
         <label>Subject: $subject</label><br>
         <label>Message: $message</label><br>
         </form>";

$header = "From:info@alogroups.com \r\n";
$header .= "Cc:natarajanaloinfotech@gmail.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail($to, $subject, $message, $header);


if ($retval == true) {
    header("Location:http://alogroups.com/alogroupsweb/leavedetails.php");
    echo "Approved";
} else {
    echo "Declined";
}
?>




