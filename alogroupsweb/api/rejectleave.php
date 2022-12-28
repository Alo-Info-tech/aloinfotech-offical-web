<?php
$to = $_POST['email'];
$email = $_POST['email'];
$subject = 'Leave Cancellation';
$message = 'Your Leave Request has Cancelled';
$message = "<form>
         <label>Email: $email</label><br>
         <label>Subject: $subject</label><br>
         <label>Message: $message</label><br>
         </form>";
 $header = "From:arokiaani2423@gmail.com \r\n";
         $header .= "Cc:arokiaanialogroups@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
        
         
         if( $retval == true ) {
           
           echo "Your Permission regarding leave has Denied";

         }else {
             
           echo "Declined";

         }
      ?>
