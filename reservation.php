<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $date = $_POST['date'];
    $heure = $_POST['heure'];
    $nombre_personnes = $_POST['nombre_personnes'];

    // Définir le chemin vers le fichier CSV
    $file = 'reservations.csv';

    // Ouvrir le fichier en mode "append" (ajout)
    $handle = fopen($file, 'a');

    // Si c'est un nouveau fichier, ajouter les en-têtes
    if (filesize($file) == 0) {
        fputcsv($handle, ['Nom', 'Date', 'Heure', 'Nombre de Personnes']);
    }

    // Ajouter les données de la réservation dans le fichier CSV
    fputcsv($handle, [$nom, $date, $heure, $nombre_personnes]);

    // Fermer le fichier
    fclose($handle);

    // Message de confirmation
    header("Location: index.html");
    exit();
} else { echo "Réservation enregistrée avec succès !";
    // Si le formulaire n'a pas été soumis, rediriger vers la page du formulaire
    header("Location: index.html");
    exit();
}
