<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$number = $_POST['Subject'];
$number = $_POST['number'];
$message = $_POST['message'];

$email_from = 'jamhuriyascool221@gmail.com';

$email_subject = 'new form comment';


$email_body = "user name: $name.\n".
                "user email: $visitor_email.\n".
                "user Subject: $Subject.\n".
                "user number: $number.\n".
                "user message: $message.\n";


$to = 'jamhuriyascool221@gmail.com';



$headers = "from: $email_from \r\n";


$headers .="reply-to:$visitor_email \r\n";

mail($to,$email_subject,$email_body);


header("Location: contact.html");

?>