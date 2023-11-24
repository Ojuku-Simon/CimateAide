<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can add additional validation and processing here

    // Send email (replace with your actual email handling logic)
    $to = "ojukusimon69@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Use the mail() function to send the email
    mail($to, $subject, $email_message, $headers);

    // Redirect after form submission (replace with your actual redirect URL)
    header("Location: thank-you.html");
    exit();
}
?>
