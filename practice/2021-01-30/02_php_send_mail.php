<?php

ini_set("SMTP", "ssl://smtp.gmail.com");
ini_set("smtp_port", "587");
ini_set('sendmail_from', 'fashion45srk@gmail.com');

$to = 'fashion45srk@gmail.com';
$subject = 'test email';
$body = 'hello , good afternoon. this is my our test mail that has been sent to you. thank you.';
$headers = 'From: training session  <someone@gmail.com>';

if (mail($to, $subject, $body, $headers)) {
    echo 'Mail has been sent to <strong>'. $to .'</strong>';
} else {
    echo 'There was an error while sending an email.';
}

?>