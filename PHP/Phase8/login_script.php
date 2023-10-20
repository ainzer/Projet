<?php
session_start();

// Les identifiants corrects (à des fins d'exemple)
$correctLogin = 'admin';
$correctPassword = 'admin';

// Vérification des données du formulaire
if (isset($_POST['login']) && isset($_POST['password'])) {
    $userLogin = $_POST['login'];
    $userPassword = $_POST['password'];

    // Vérification des identifiants
    if ($userLogin === $correctLogin && $userPassword === $correctPassword) {
        // Authentification réussie
        $_SESSION['auth'] = 'ok';

        // Stockez les données dans un fichier txt
        $userData = "Login: $userLogin\nPassword: $userPassword";
        file_put_contents('user_data.txt', $userData);

        header('Location: protected_page.php'); // Rediriger vers la page protéger
        exit();
    } else {
        // Authentification échouée
        session_destroy(); // Détruire la session
        header('Location: login_form.php'); // Rediriger vers la page de connexion
        exit();
    }
} else {
    // Rediriger si les données du formulaire ne sont pas présentes
    header('Location: login_form.php');
    exit();
}

?>