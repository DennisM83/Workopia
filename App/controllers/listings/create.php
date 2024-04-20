<?php

require 'vendor/autoload.php';

loadView('listings/create');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form submission and save job listing to the database

    // If job listing is successfully saved
    if ($jobListingSaved) {
        // Initialize PHPMailer
        $mail = new PHPMailer\PHPMailer\PHPMailer();

        // Retrieve email configurations from config.php
        $config = require 'config.php';

        // Server settings for Mailtrap
        $mail->isSMTP();
        $mail->Host = $config['email_host'];
        $mail->SMTPAuth = true;
        $mail->Username = $config['email_username'];
        $mail->Password = $config['email_password'];
        $mail->SMTPSecure = 'tls';
        $mail->Port = $config['email_port'];

        // Email to job listing submitter (User)
        $mail->setFrom('your_email@example.com', 'Workopia');
        $mail->addAddress($_POST['user_email']);  // Assuming you have a field for user's email
        $mail->Subject = 'Job Listing Submitted';
        $mail->Body    = 'Your job listing has been successfully submitted.';

        if (!$mail->send()) {
            // Handle email sending failure
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

        // Email to company/organization
        $mail->clearAddresses();  // Clear previous addresses
        $mail->addAddress($_POST['company_email']);  // Assuming you have a field for company's email
        $mail->Subject = 'New Job Listing Submitted';
        $mail->Body    = 'A new job listing has been submitted on Workopia.';

        if (!$mail->send()) {
            // Handle email sending failure
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }
}

