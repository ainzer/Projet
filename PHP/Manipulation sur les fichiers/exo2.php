<?php
// URL du fichier distant
$url = 'https://ncode.amorce.org/customers.csv';

// Récupération du contenu du fichier
$fileContent = file_get_contents($url);

// Découper les lignes
$lines = explode("\n", $fileContent);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Tableau des Utilisateurs</title>
</head>
<body>

<div class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>Surname</th>
                <th>Firstname</th>
                <th>Email</th>
                <th>Phone</th>
                <th>City</th>
                <th>State</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        foreach ($lines as $line) {
            // Découper les champs en utilisant la virgule comme séparateur
            $fields = explode(",", $line);

            // Afficher chaque champ dans une cellule du tableau
            echo '<tr>';
            foreach ($fields as $field) {
                echo '<td>' . $field . '</td>';
            }
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
