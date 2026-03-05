<?php
if(isset($_POST['name'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['msg'];

    $to = "pbk1409@gmail.com; // 🔴 change this
    $subject = "New Contact Form Message";

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)) {
        echo "Message Sent Successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>