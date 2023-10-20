<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Création du tableau associatif avec le nombre de jours dans chaque mois
$mois_jours = array(
    "Janvier" => 31,
    "Février" => 28,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Août" => 31,
    "Septembre" => 30,
    "Octobre" => 31,
    "Novembre" => 30,
    "Décembre" => 31
);

// Affichage du tableau dans un tableau HTML
echo "<h2>Tableau initial</h2>";
echo "<table border='1'><tr><th>Mois</th><th>Nombre de jours</th></tr>";

foreach ($mois_jours as $mois => $jours) {
    echo "<tr><td>$mois</td><td>$jours</td></tr>";
}

echo "</table>";

// Tri du tableau par le nombre de jours
asort($mois_jours);

// Affichage du tableau trié dans un tableau HTML
echo "<h2>Tableau trié par le nombre de jours</h2>";
echo "<table border='1'><tr><th>Mois</th><th>Nombre de jours</th></tr>";

foreach ($mois_jours as $mois => $jours) {
    echo "<tr><td>$mois</td><td>$jours</td></tr>";
}

echo "</table>";

?>

</body>
</html>