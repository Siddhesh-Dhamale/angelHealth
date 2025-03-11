<?php
ob_start();

// User Information
$fullname = "Umesh Jaiswar";
$mobile = "9139416990";
$email = "test@gmail.com";
$to_email = "webdeveloper1.crezvatic@gmail.com"; // Add recipient email here

// Email Subject and Body
$subject = "Book Appointment";
$body = "
    <b>Hi, Angel Health Centre, </b><br>
    <span>
        <p><b> Full Name: </b> $fullname</p>
        <p><b> Mobile: </b> $mobile</p>
        <p><b> Email: </b> $email</p>
    </span>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: angelhealthcareclinic@gmail.com" . "\r\n";
$headers .= "CC: angelhealthcareclinic@gmail.com" . "\r\n";

// Send Email
if (mail($to_email, $subject, $body, $headers)) {
    echo "Mail Sent Successfully";
} else {
    echo "Email could not be sent.";
}
?>
