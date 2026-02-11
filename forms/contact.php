<?php
// Secure contact form handler for Klaire's Cake
// Validates, sanitizes, and sends email using PHPMailer (if installed) or mail() as fallback

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

header('Content-Type: application/json; charset=utf-8');

// Honeypot to block bots
if (!empty($_POST['honeypot'] ?? '')) {
    // pretend success to confuse bots
    echo json_encode(['success' => true]);
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];
if (strlen($name) < 2) $errors[] = 'Nombre inválido';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Email inválido';
if (strlen($message) < 5) $errors[] = 'Mensaje muy corto';

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'errors' => $errors]);
    exit;
}

// Sanitize for email body
$safe_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$safe_email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safe_message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// Load mail config if provided
$mailConfig = null;
if (file_exists(__DIR__ . '/../config/mail.php')) {
    $mailConfig = include __DIR__ . '/../config/mail.php';
}

$to = $mailConfig['to'] ?? 'contact@example.com';
$subject = "Contacto desde sitio - " . $safe_name;
$bodyHtml = "<p><strong>Nombre:</strong> {$safe_name}</p><p><strong>Email:</strong> {$safe_email}</p><p><strong>Mensaje:</strong><br>" . nl2br($safe_message) . "</p>";
$bodyPlain = "Nombre: {$safe_name}\nEmail: {$safe_email}\nMensaje:\n{$safe_message}";

// Try PHPMailer if available
$sent = false;
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    try {
        require __DIR__ . '/../vendor/autoload.php';
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        if ($mailConfig && !empty($mailConfig['host'])) {
            // SMTP
            $mail->isSMTP();
            $mail->Host = $mailConfig['host'];
            $mail->SMTPAuth = true;
            $mail->Username = $mailConfig['username'];
            $mail->Password = $mailConfig['password'];
            $mail->SMTPSecure = $mailConfig['encryption'] ?? PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = $mailConfig['port'] ?? 587;
        }
        $mail->setFrom($mailConfig['from_email'] ?? 'no-reply@example.com', $mailConfig['from_name'] ?? "Klaire's Cake");
        $mail->addAddress($to);
        $mail->addReplyTo($safe_email, $safe_name);
        $mail->Subject = $subject;
        $mail->isHTML(true);
        $mail->Body = $bodyHtml;
        $mail->AltBody = $bodyPlain;
        $mail->send();
        $sent = true;
    } catch (Exception $e) {
        // Log error to file for debugging
        error_log('Mail error: ' . $e->getMessage());
        $sent = false;
    }
}

// Fallback to PHP mail()
if (!$sent) {
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: " . ($mailConfig['from_email'] ?? 'no-reply@example.com') . "\r\n";
    $sent = mail($to, $subject, $bodyHtml, $headers);
}

if ($sent) {
    echo json_encode(['success' => true, 'message' => 'Correo enviado correctamente']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Error al enviar correo']);
}
?>
