<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $comment = $_POST['comment'];  
  
  $to = 'contact@edgeaerialmedia.com';
  $subject = "Subject";
  $body = $comment;
  $headers = "From: " . $name;
  $headers .= "Reply-To: $email";
  mail($to,$subject,$body,$headers);
  
  echo "Email Sent";
?>