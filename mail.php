<?php
$to = "kamil@test.ac.uk";
$subject = "Enquiry";
$email_field = $_POST['email'];
$message = $_POST['message'];
$body = "From: $email_field\nMessage:\n$message";
if (mail($to, $subject, $body)) {
    echo "Thank you, your message has been sent to $to";
} else {
    echo "Sorry, there was a problem sending your message.";
}
?>
