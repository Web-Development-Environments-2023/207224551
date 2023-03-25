<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Set the recipient email address
$to = 'razmoy@post.bgu.ac.il';

// Set the email headers
$headers = "From: $name <$email>" . "\r\n";
$headers .= "Reply-To: $email" . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8" . "\r\n";

// Encode the subject and message for proper email delivery
$subject = "=?UTF-8?B?" . base64_encode($subject) . "?=";
$message = "=?UTF-8?B?" . base64_encode($message) . "?=";

// Send the email
if (mail($to, $subject, $message, $headers)) {
  // Return a success message
  echo 'Email sent!';
} else {
  // Return an error message
  echo 'An error occurred while sending the email.';
}
?>