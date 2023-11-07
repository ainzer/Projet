<?php
session_start();

// Vérifier si la session est authentifiée
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== 'ok') {
    header('Location: login_form.php'); // Rediriger vers la page de connexion si non authentifié
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Protégée</title>
</head>
<body>
    <h2>Bienvenue sur la page protégée!</h2>
    <!-- Contenu de la page protégée -->
</body>
</html>
