<?php
session_start();
require_once 'user_data.php';

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Ajouter le nouvel utilisateur au tableau
$users[] = [
    'nom' => $nom,
    'prenom' => $prenom,
    'email' => $email,
    'password' => $password
];

// Enregistrement du tableau mis à jour
file_put_contents('user_data.php', '<?php $users = ' . var_export($users, true) . ';');

echo "Inscription réussie!";
?>
