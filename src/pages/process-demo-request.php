<?php
// Allow cross-origin requests (for development)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// Get the POSTed data
$json = file_get_contents('php://input');
$data = json_decode($json, true);

// Validate input
if (!isset($data['fullName']) || !isset($data['email']) || !isset($data['phone']) || !isset($data['dateTime'])) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Missing required fields']);
    exit;
}

// Sanitize inputs
$fullName = htmlspecialchars($data['fullName']);
$email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
$phone = htmlspecialchars($data['phone']);
$dateTime = htmlspecialchars($data['dateTime']);
$message = isset($data['message']) ? htmlspecialchars($data['message']) : 'No additional message provided.';

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email address']);
    exit;
}

// Admin email address
$adminEmail = 'maccueidit@gmail.com';

// Send email to admin
$adminSubject = 'New Demo Request from ' . $fullName;
$adminHeaders = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion() . "\r\n" .
    'Content-Type: text/html; charset=UTF-8';

$adminMessage = '<html><body>';
$adminMessage .= '<h2>New Demo Request Details</h2>';
$adminMessage .= '<p><strong>Name:</strong> ' . $fullName . '</p>';
$adminMessage .= '<p><strong>Email:</strong> ' . $email . '</p>';
$adminMessage .= '<p><strong>Phone:</strong> ' . $phone . '</p>';
$adminMessage .= '<p><strong>Preferred Date/Time:</strong> ' . $dateTime . '</p>';
$adminMessage .= '<p><strong>Additional Message:</strong> ' . $message . '</p>';
$adminMessage .= '</body></html>';

$adminMailSent = mail($adminEmail, $adminSubject, $adminMessage, $adminHeaders);

// Send confirmation email to visitor
$visitorSubject = 'Your Demo Request Confirmation - AppointScheduler';
$visitorHeaders = 'From: ' . $adminEmail . "\r\n" .
    'Reply-To: ' . $adminEmail . "\r\n" .
    'X-Mailer: PHP/' . phpversion() . "\r\n" .
    'Content-Type: text/html; charset=UTF-8';

$visitorMessage = '<html><body>';
$visitorMessage .= '<h2>Thank You for Your Demo Request</h2>';
$visitorMessage .= '<p>Dear ' . $fullName . ',</p>';
$visitorMessage .= '<p>We have received your request for a demo of AppointScheduler. Our team will contact you at the date and time you specified:</p>';
$visitorMessage .= '<p><strong>Scheduled for:</strong> ' . $dateTime . '</p>';
$visitorMessage .= '<p>If you need to reschedule or have any questions before your demo, please reply to this email or call us at (555) 123-4567.</p>';
$visitorMessage .= '<p>We look forward to showing you how AppointScheduler can streamline your business operations!</p>';
$visitorMessage .= '<p>Best regards,<br>The AppointScheduler Team</p>';
$visitorMessage .= '</body></html>';

$visitorMailSent = mail($email, $visitorSubject, $visitorMessage, $visitorHeaders);

// Check if both emails were sent
if ($adminMailSent && $visitorMailSent) {
    echo json_encode(['success' => true, 'message' => 'Form submitted successfully']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Failed to send emails']);
}
?>