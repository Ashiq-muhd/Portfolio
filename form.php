<?php
$to = "ashiqmuhd0786@gmail.com";
$subject = "Form Submission";

$fname = $_POST['fname'];
// $lname = $_POST['lname'];
$email = $_POST['email'];
$subject_input = $_POST['subject'];

$message = "First Name: " . $fname . "\r\n";
// $message .= "Last Name: " . $lname . "\r\n";
$message .= "Email: " . $email . "\r\n";
$message .= "Subject: " . $subject_input . "\r\n";

mail($to, $subject, $message);
?>