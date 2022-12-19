<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $feedback = $_POST['feedback'];

  $to = 'fraumarzhuk@gmail.com';
  $subject = 'Feedback from ' . $name;
  $message = $feedback . "\n\n" . 'From: ' . $name . ' <' . $email . '>';
  $headers = 'From: noreply@example.com' . "\r\n" .
             'Reply-To: ' . $email . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);
}
?>
