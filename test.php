<?php
$to = 'votre_email@example.com';
$subject = 'Test Mail';
$message = 'Ceci est un message de test.';
$headers = 'From: no-reply@votredomaine.com' . "\r\n" .
    'Reply-To: no-reply@votredomaine.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$result = mail($to, $subject, $message, $headers);

if ($result) {
    echo "Le mail a été envoyé avec succès.";
} else {
    echo "Échec de l'envoi du mail.";
}
?>
