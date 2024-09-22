<?php
if (empty($_POST['nom']) || 
    empty($_POST['datte']) || 
    empty($_POST['heure']) || 
    empty($_POST['value'])) {
    http_response_code(400); // Utilisez 400 pour "Bad Request" car il s'agit d'un problème avec les entrées de l'utilisateur
    exit();}
    
    // Extraction et nettoyage des données du formulaire
    $nom = strip_tags(htmlspecialchars($_POST['nom']));
    $datte = strip_tags(htmlspecialchars($_POST['datte']));
    $heure = strip_tags(htmlspecialchars($_POST['heure']));
    $value = strip_tags(htmlspecialchars($_POST['value']));
    
   
echo "Test réussi!";


    
    // Configuration de l'email
    $to = "aliessaadaoui10@gmail.com"; // Changez cet email par celui de votre choix
    $subject = "Réservation pour le $datte à $heure";
    $body = "Vous avez reçu une nouvelle réservation de votre site web.\n\nVoici les détails:\n\nNom: $nom\n\nDate: $datte\n\nHeure: $heure\n\nNombre de personnes: $value";
    $headers = "From: no-reply@yourdomain.com\r\n"; // Utilisez une adresse générique de votre domaine
    $headers .= "Reply-To: no-reply@yourdomain.com\r\n"; // Répondre à une adresse générique si nécessaire
    
    // Envoi de l'email
    if(!mail($to, $subject, $body, $headers)) {
        http_response_code(500);
    }
    ?>
    