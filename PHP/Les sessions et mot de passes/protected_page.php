<?php
session_start();

// Vérification de la session auth
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== 'ok') {
    // Redirection vers la page de connexion si l'authentification n'est pas réussi
    header('Location: login_form.php');
    exit();
}

// Si l'utilisateur est authentifié, affichez le contenue de la page restreinte
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restricted Page</title>
</head>
<body>
    
<h1>Welcome to the Restricted Page!</h1>
<!--Votre contenu restreint ici-->
</body>
</html>