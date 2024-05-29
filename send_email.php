<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = smt.gmail.com;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "shusha710@gmail.com;
$mail->Password = "Deliwe@1964;

$mail->setFrom($email, $name, $phone);

$mail->addAddress("shusha710@gmail.com", "Bongani");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo "email sent";

?>
