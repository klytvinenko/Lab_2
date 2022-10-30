<?php

$senderName = 'lytvynenko.kristina1119@vu.cdu.edu.ua';
$address = htmlspecialchars($_POST['mail']);
$body = htmlspecialchars($_POST['message']);
$str_message_sent_successfully = 'Message sent successfully on ';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/Exception.php';
require_once __DIR__ . '/PHPMailer.php';
require_once __DIR__ . '/SMTP.php';

$mail = new PHPMailer(true);
if ($address == $senderName) {
    echo "<label>Error: you cannot send a message to yourself!</label>";
} else {
    try {
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->CharSet = "UTF-8";

        $mail->setFrom($senderName, 'Sender Name');
        $mail->Username = $senderName;
        $mail->Password = "lytvinenko001";

        $mail->addAddress($address);

        $mail->Subject = "Service";
        $mail->msgHTML($body);

        $mail->send();
        echo "<label> $str_message_sent_successfully </label>
        <label style='font-weight: bold;'> $address </label>
        <label>!</label>"; 
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo} {$e}";
    }
}
