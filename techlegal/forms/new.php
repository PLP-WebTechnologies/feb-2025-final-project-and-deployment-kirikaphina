<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Recipient email address
    $to = 'njorogejn5@gmail.com';

    // Email subject
    $email_subject = "New Message from " . $name . " - " . $subject;

    // Email body content
    $email_body = "You have received a new message from your website contact form.\n\n";
    $email_body .= "Name: " . $name . "\n";
    $email_body .= "Email: " . $email . "\n";
    $email_body .= "Message:\n" . $message;

    // Email headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<script>alert('Your message has been sent. Thank you!'); window.location.href = 'thank-you-page.html';</script>";
    } else {
        echo "<script>alert('Sorry, something went wrong. Please try again later.'); window.location.href = 'contact.html';</script>";
    }
}
?>
