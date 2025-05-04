<?php
include "connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $checkin_date = $_POST["checkin_date"];
    $checkout_date = $_POST["checkout_date"];
    $adults = $_POST["adults"];
    $children = $_POST["children"];
    $message = $_POST["message"];

    // Debugging: Output the entire POST data
    var_dump($_POST);

    // Set recipient email address
    $to = "info@hoteltreeland.com.np"; // Replace with your actual email address

    // Set email subject
    $subject = "New Reservation Form Submission";

    // Compose email message
    $email_message = "Name: $name\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Check-In Date: $checkin_date\n";
    $email_message .= "Check-Out Date: $checkout_date\n";
    $email_message .= "Adults: $adults\n";
    $email_message .= "Children: $children\n";
    $email_message .= "Notes:\n$message";

    // Additional headers
    $headers = "From: $email";
    // Database insertion 
    $query = "insert into reservation(name, phone, email, checkin_date, checkout_date, adults, children, message)
values('$name','$phone','$email','$checkin_date','$checkout_date','$adults','$children','$message')";
    $run = mysqli_query($conn, $query);
    // Send email
    $mail_success = mail($to, $subject, $email_message, $headers);

    if ($run && $mail_success) {
        echo '<script>window.alert("Your reservation has been submitted successfully!");</script>';
    } elseif (!$run) {
        echo '<script>window.alert("Oops! Something went wrong with the database. Please try again later.");</script>';
    } elseif (!$mail_success) {
        echo '<script>window.alert("Oops! Something went wrong with sending the email. Please try again later.");</script>';
    }


} else {
    // If the form is not submitted, redirect to the reservation page
    header("Location: index.html");
    exit();
}
?>