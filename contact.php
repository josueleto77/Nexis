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
            
            
 $to = "info@nxispwr.com"; //Replace your real receiving email address

 $header = "From:jgalindo@nxispwr.com \r\n"; //Replace with your real web master email
 $header .= "MIME-Version: 1.0\r\n";
 $header .= "Content-type: text/html\r\n";
 
 $mail_send = mail ($to,$subject,$message,$header);
 
 if( $mail_send == true ) {
    echo "Your message send successfully!.";
 }else {
    echo "Your message could not be send!.";
 }


?>
