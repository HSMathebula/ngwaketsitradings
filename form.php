<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Simple validation
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Please fill in all fields.";
        exit;
    }

    // Email settings (adjust these to your needs)
    $to = "youremail@example.com"; // Replace with your email address
    $headers = "From: $email" . "\r\n" . "Reply-To: $email";
    $body = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message. Please try again.";
    }
}
?>
