<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "razmoy@post.bgu.ac.il";
  $subject = "Message from website";
  $message = $_POST["message"];
  $headers = "From: " . $_POST["email"];

  $mailtoUrl = "mailto:" . $to . "?subject=" . urlencode($subject) . "&body=" . urlencode($message);

  header("Location: " . $mailtoUrl);
  exit();
}
?>