<?php
if (isset($_POST['submit'])) {
    $to = "bhattmansi1212@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $subject = "New Form Submission";
    $body = "Name: $name\nMobile: $mobile\nAddress: $address\n\n$message";
    $headers = "From: $from";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
