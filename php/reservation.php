<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données soumises
    $nom = $_POST['nom'];
    $date = $_POST['date'];
    $heure = $_POST['heure'];
    $nombre_personnes = $_POST['nombre_personnes'];

    // Afficher les données (à cette étape, c'est juste pour tester que ça fonctionne)
    echo "Nom : " . htmlspecialchars($nom) . "<br>";
    echo "Date : " . htmlspecialchars($date) . "<br>";
    echo "Heure : " . htmlspecialchars($heure) . "<br>";
    echo "Nombre de personnes : " . htmlspecialchars($nombre_personnes) . "<br>";
} else {
    // Si le formulaire n'a pas été soumis, rediriger vers la page du formulaire
    header("Location: index.html");
    exit();
}
