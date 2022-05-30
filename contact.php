<?php 

 //contact form info
 $Firstname=  $_POST['Firstname'];
 $Lastname=  $_POST['Lastname'];
 $email=  $_POST['email'];
 $subject = $_POST['subject'];
 $contact_message = $_POST['message'];


 $message = "<b>Mail Sender Info:</b> </br>
            <h5><b>Name:</b>".$Firstname." ".$Lastname."</h5>
            <h5><b>Email:</b>".$email."</h5>
            </br>
            <p>".$contact_message."</p>";
            
            
 $to = "info@nxispwr.com". "r/n";

 $header = "From: info@nxispwr.com ". "\r\n";
 $header .= "X-Mailer: PHP/". phpversion();
 $header .= "Content-type: text/html". "r/n";
 
 $mail = @mail($to,$subject,$message,$header);
 
 if( $mail_send == true ) {
    echo "<h4>Your message send successfully!.</h4>";
 }else {
    echo "<h4>Your message could not be send!.</h4>";
 }


?>
