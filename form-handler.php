<?php
$name= $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$Message = $_POST['message']

$email_from = 'jabulani.maluleke@younglings.africa';

$email_subject = 'New Form Submission';

$email_body ="User Name: $name.\n".
"User Email: $visitor_email .\n".
"subject: $subject.\n".
"User Message: $Message.\n";


$to  = 'malulekejabulani96@gmail.com';
$headers= " from: $email_from \r\h";
$headers .= "Reply-To: $visitor_email";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>