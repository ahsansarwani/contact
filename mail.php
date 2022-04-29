<?php
$to      = 'ahsanzahoor2@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    return true;
} else {
    $is_sent = mail($to, $subject, $message, $headers);
    if ($is_sent) {

        return true;
    } else {

        return false;
    }
}
