<?php
if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up email
    $to = 'youremail@example.com'; // Enter your email address here
    $subject = 'New Contact Form Submission';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain\r\n";

    // Compose email message
    $email_message = "Name: $name\n\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message\n";

    // Send email
    mail($to, $subject, $email_message, $headers);

    // Redirect to thank-you page
    header('Location: thank-you.php');
    exit;
}
