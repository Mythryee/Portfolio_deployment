<?php
// Include mailer.php so we can call sendThankYouEmail()
require_once __DIR__ . '/mailer.php';

// Example function to process contact form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $firstName = $_POST['first_name'] ?? '';
    $email = $_POST['email'] ?? '';

    // Call the function from mailer.php
    if (sendThankYouEmail($email, $firstName)) {
        
    } else {
        echo "Failed to send email.";
    }
}
?>
