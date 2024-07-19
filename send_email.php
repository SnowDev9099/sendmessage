<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = 'From: your-email@example.com' . "\r\n" .
               'Reply-To: your-email@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully to $to";
    } else {
        echo "Failed to send email.";
    }
}
?>
