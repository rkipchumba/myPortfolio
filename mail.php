<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["text"];
    
    $to = "kipchumbarodgers@gmail.com";
    $subject = "New Contact Form Submission from $name";
    
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending the message. Please try again later.";
    }
} else {
    echo "Invalid request. Please submit the form.";
}
?>
