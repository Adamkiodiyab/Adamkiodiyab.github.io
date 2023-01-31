<?php
if(isset($_POST['submit'])) {
    $to = "adamdiyab5@gmail.com"; // Receiver email address
    $subject = "Job Application"; // Email subject
    $message = "A job application has been submitted with the following details: \n\n";
    $message .= "Name: " . $_POST['name'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n";
    $message .= "Phone: " . $_POST['phone'] . "\n";
    $message .= "Message: " . $_POST['message'] . "\n";
    $headers = "From: " . $_POST['email'];
    if(mail($to, $subject, $message, $headers)) {
        echo "Your message has been sent successfully";
    } else {
        echo "Failed to send your message. Please try again.";
    }
}
?>
