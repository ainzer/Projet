<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function verifier_complexite_mot_de_passe($mot_de_passe) {
    // Vérifier la longueur du mot de passe
    $longueur_minimale = 8;
    if (strlen($mot_de_passe) < $longueur_minimale) {
        return false;
    }

    // Vérifier la présence d'au moins un chiffre
    if (!preg_match('/[0-9]/', $mot_de_passe)) {
        return false;
    }

    // Vérifier la présence d'au moins une majuscule et une minuscule
    if (!preg_match('/[A-Z]/', $mot_de_passe) || !preg_match('/[a-z]/', $mot_de_passe)) {
        return false;
    }

    // Si toutes les conditions sont remplies, le mot de passe est valide
    return true;
}

// Exemple d'utilisation
$mot_de_passe_test = "MotDePasse123";
$est_valide = verifier_complexite_mot_de_passe($mot_de_passe_test);
echo $est_valide ? "Valide" : "Non valide";

?>
</body>
</html>