<?php
// Include PHPMailer library
require 'PHPMailer/PHPMailerAutoload.php';

// Configuration
$toEmail = 'aurelius.tp2003@gmail.com'; // Ganti dengan alamat email penerima
$subject = 'Pesan dari Formulir Kontak';
$fromEmail = $_POST['email'];
$fromName = $_POST['name'];
$message = $_POST['comment'];

// Create a new PHPMailer instance
$mail = new PHPMailer;


// Set sender and recipient
$mail->setFrom($fromEmail, $fromName);
$mail->addAddress($toEmail);

// Set email subject and message
$mail->Subject = $subject;
$mail->Body = $message;

// Send the email
if ($mail->send()) {
    // Jika email berhasil dikirim
    echo 'Pesan Anda telah berhasil terkirim.';
} else {
    // Jika ada kesalahan dalam pengiriman
    echo 'Pesan Anda tidak dapat terkirim. Error: ' . $mail->ErrorInfo;
}
?>