<?php
$to = "aloinfotechpvtltd@gmail.com";
$leavefrom = $_POST['leavefrom'];
$leaveto = $_POST['leaveto'];
$leavetype = $_POST['leavetype'];
$reason = $_POST['reason'];
$message = $_POST['message'];
$message = "<form>
         <label>leavefrom: $leavefrom</label><br>
         <label>leaveto: $leaveto</label><br>
         <label>leavetype: $leavetype</label><br>
        
         </form>";

$header = "From:info@alogroups.com \r\n";
$header .= "Cc:natarajanaloinfotech@gmail.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail($to, $leavefrom, $leaveto, $leavetype, $reason, $header);


if ($retval == true) {
    header("Location:http://alogroups.com/01_contact.php");
    echo "Leave Accepted";
} else {
    echo "Declined";
}
