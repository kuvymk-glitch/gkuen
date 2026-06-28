<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name    = $_POST['name'];
  $email   = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to      = "kuvymk@gmail.com";   // change to your email
  $headers = "From: $email";

  if (mail($to, $subject, $message, $headers)) {
    echo "Thank You, your message is successfully sent!";
  } else {
    echo "Sorry, something went wrong.";
  }
}
?>
