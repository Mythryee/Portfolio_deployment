<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Absolute paths for Docker
require __DIR__ . '/../phpmailer/src/Exception.php';
require __DIR__ . '/../phpmailer/src/PHPMailer.php';
require __DIR__ . '/../phpmailer/src/SMTP.php';

function sendThankYouEmail($toEmail, $firstName) {
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = '22b01a4256@svecw.edu.in'; // Gmail
        $mail->Password   = 'esytdsjvsiqrktmn';       // App-specific password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Email settings
        $mail->setFrom('22b01a4256@svecw.edu.in', 'Mythryee');
        $mail->addAddress($toEmail, $firstName);

        $mail->isHTML(false); // Plain text
        $mail->Subject = 'Thanks for contacting me!';
        $mail->Body    = "Hi {$firstName},\n\nThank you for reaching out. I will get back to you shortly.\n\nBest regards,\nMythryee";

        $mail->send();
        return true;

    } catch (Exception $e) {
        error_log("Email sending failed: " . $mail->ErrorInfo);
        return false;
    }
}
?>
