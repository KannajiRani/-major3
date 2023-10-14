<?php
$name = $_POST[''];
$visitor_email = $_POST[''];
$subject = $_POST[''];
$message = $_POST[''];

$email_from ='ushaweb7@gmail.com';

$email_subject = 'New form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message:$message.\n".
              
$t0 ='ushawebpro1@gmail.com';
 
$headers = "Form: $email_from\r\n";

$headers .=  "Reply-To: $visitors_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>