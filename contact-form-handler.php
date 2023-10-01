<?php
// contact-form-handler.php
if (isset($_POST['action']) && $_POST['action'] === 'ncf_process_contact_form') {
    // Process form data here, validate, and send email notifications
    // Example code for processing and sending email notifications:
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    // Process other form fields

    // Send email
    $to = 'zainababdulraheem97@gmail.com';
    $subject = 'Contact Form Submission from ' . $name;
    $message = 'Name: ' . $name . "\n";
    $message .= 'Email: ' . $email . "\n";
    // Add more fields to the email message

    $headers = array('Content-Type: text/html; charset=UTF-8');

    if (wp_mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        // You can add a success message or redirect here
    } else {
        // Email sending failed
        // Handle the error
    }

    // Validate Name
    if (empty($name)) {
        // Name is required
        // You can add an error message and handle it in the frontend
    }

    // Validate Email
    if (!is_email($email)) {
        // Invalid email address
        // You can add an error message and handle it in the frontend
    }

    // Additional validation for other fields can be added here

    // If all validations pass
    if (empty($name_errors) && empty($email_errors)) {
        // Process and send email as shown in the previous response
    }

    // Verify reCAPTCHA
    $recaptcha_secret = 'YOUR_RECAPTCHA_SECRET_KEY';
    $recaptcha_response = $_POST['g-recaptcha-response'];

    $recaptcha_url = '#';
    $recaptcha_data = array(
        'secret' => $recaptcha_secret,
        'response' => $recaptcha_response,
        'remoteip' => $_SERVER['REMOTE_ADDR'],
    );

    $recaptcha_options = array(
        'http' => array(
            'method' => 'POST',
            'content' => http_build_query($recaptcha_data),
        ),
    );

    $recaptcha_context = stream_context_create($recaptcha_options);
    $recaptcha_result = json_decode(file_get_contents($recaptcha_url, false, $recaptcha_context));

    if (!$recaptcha_result->success) {
        // reCAPTCHA verification failed
        // You can add an error message and handle it in the frontend
    }

    // If all validations pass, process and send email
}

