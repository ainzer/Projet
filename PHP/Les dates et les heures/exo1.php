<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$dateString = "14/07/2019";
$date = DateTime::createFromFormat('d/m/Y', $dateString);

echo "<hr>";

// Vérifier si la création de l'objet DateTime a réussi
if ($date === false) {
    echo "La conversion de la date a échoué.";
} else {
    $weekNumber = $date->format('W');
    echo "Le numéro de semaine pour la date $dateString est : $weekNumber";
}

echo "<hr>";

$dateFinFormation = DateTime::createFromFormat('d/m', '8/12');
$dateAujourdhui = new DateTime();

// Calculer la différence en jours
$interval = $dateAujourdhui->diff($dateFinFormation);
$joursRestants = $interval->days;

echo "Il reste $joursRestants jours jusqu'à la fin de votre formation (le 8 décembre).";

echo "<hr>";

$annee = 2023; // Remplacez ceci par l'année que vous souhaitez vérifier

if (date('L', strtotime("$annee-01-01")) == 1) {
    echo "$annee est une année bissextile.";
} else {
    echo "$annee n'est pas une année bissextile.";
}

echo "<hr>";



$dateString = "32/17/2019";
$date = DateTime::createFromFormat('d/m/Y', $dateString);

if ($date === false || ($date->format('d/m/Y') !== $dateString)) {
    echo "La date $dateString est erronée.";
} else {
    echo "La date $dateString est valide.";
}

echo "<hr>";

$heureCourante = date('H\hi');
echo "L'heure courante est : $heureCourante";

echo "<hr>";

$dateCourante = new DateTime();
$dateCourante->add(new DateInterval('P1M'));

echo "La date courante plus un mois est : " . $dateCourante->format('Y-m-d H:i:s');

echo "<hr>";

?>

<?php
$timestamp = 1000200000;
$date = date("d/m/Y H:i:s", $timestamp);

echo "La date correspondante est : " . $date;
echo"<br>";
echo"Cette date correspond à l'attentat des 2 tours jumelles en Amérique où deux avions de ligne détournés par des pirates de l'air 
détruisent les tours jumelles du World Trade Center situées dans le quartier de Manhattan à New York, un troisième avion 
s'écrase contre le Pentagone près de Washington et un quatrième s'écrase à Shanksville, à une centaine de kilomètres de Pittsburgh (Pennsylvanie). ";
?>

</body>
</html>