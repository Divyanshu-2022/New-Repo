$company_name = 'Your Company Name';
$company_logo_url = 'https://example.com/logo.png';

$headers = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $company_name . ' <noreply@example.com>' . "\r\n"
    .'X-Mailer: PHP/' . phpversion() . "\r\n"
    .'X-Priority: 1' . "\r\n"
    .'X-MSMail-Priority: High' . "\r\n"
    .'Importance: High' . "\r\n"
    .'Return-Path: noreply@example.com' . "\r\n"
    .'Reply-To: noreply@example.com' . "\r\n";

$message = '<html><body>';
$message .= '<img src="' . $company_logo_url . '" alt="' . $company_name . ' Logo">';
$message .= '<p>Your message goes here.</p>';
$message .= '</body></html>';

mail($to, $subject, $message, $headers);
