<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['add'])) {
    $mail = new PHPMailer(true);
     // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        // Handle the error as needed, maybe redirect back to the form
        exit;
    }

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'bitfcm23@gmail.com';
    $mail->Password = 'muexqxwrsqytqbkp';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($_POST['email'], "{$_POST['name']} <{$_POST['email']}>");

    $mail->addAddress('bitfcm23@gmail.com');

    $mail->isHTML(true);
    
    $mail->Body = $_POST['message'];

    try {
        $mail->send();
        echo "
        <script>
            alert('Email is verstuurd!');
            window.location.href='index.php#contact';
        </script>
        ";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}