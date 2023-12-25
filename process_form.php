<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "architpande997@gmail.com";  // Replace with your email address
    $subject = "New Form Submission";

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Use mail() function to send the email
    mail($to, $subject, $body);

    // Optionally, you can redirect the user to a thank you page
    // header("Location: thank_you.html");
    exit();
}
?>