<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$capitales = array(

    "Bucarest" => "Roumanie",

    "Bruxelles" => "Belgique",

    "Oslo" => "Norvège",

    "Ottawa" => "Canada",

    "Paris" => "France",

    "Port-au-Prince" => "Haïti",

    "Port-d'Espagne" => "Trinité-et-Tobago",

    "Prague" => "République tchèque",

    "Rabat" => "Maroc",

    "Riga" => "Lettonie",

    "Rome" => "Italie",

    "San José" => "Costa Rica",

    "Santiago" => "Chili",

    "Sofia" => "Bulgarie",

    "Alger" => "Algérie",

    "Amsterdam" => "Pays-Bas",

    "Andorre-la-Vieille" => "Andorre",

    "Asuncion" => "Paraguay",

    "Athènes" => "Grèce",

    "Bagdad" => "Irak",

    "Bamako" => "Mali",

    "Berlin" => "Allemagne",

    "Bogota" => "Colombie",

    "Brasilia" => "Brésil",

    "Bratislava" => "Slovaquie",

    "Varsovie" => "Pologne",

    "Budapest" => "Hongrie",

    "Le Caire" => "Egypte",

    "Canberra" => "Australie",

    "Caracas" => "Venezuela",

    "Jakarta" => "Indonésie",

    "Kiev" => "Ukraine",

    "Kigali" => "Rwanda",

    "Kingston" => "Jamaïque",

    "Lima" => "Pérou",

    "Londres" => "Royaume-Uni",

    "Madrid" => "Espagne",

    "Malé" => "Maldives",

    "Mexico" => "Mexique",

    "Minsk" => "Biélorussie",

    "Moscou" => "Russie",

    "Nairobi" => "Kenya",

    "New Delhi" => "Inde",

    "Stockholm" => "Suède",

    "Téhéran" => "Iran",

    "Tokyo" => "Japon",

    "Tunis" => "Tunisie",

    "Copenhague" => "Danemark",

    "Dakar" => "Sénégal",

    "Damas" => "Syrie",

    "Dublin" => "Irlande",

    "Erevan" => "Arménie",

    "La Havane" => "Cuba",

    "Helsinki" => "Finlande",

    "Islamabad" => "Pakistan",

    "Vienne" => "Autriche",

    "Vilnius" => "Lituanie",

    "Zagreb" => "Croatie"

);

ksort($capitales);

foreach ($capitales as $capitale => $pays) {
    echo "$capitale - $pays<br>";
}

echo "<hr>";

asort($capitales);

foreach ($capitales as $capitale => $pays) {
    echo "$pays - $capitale <br>";
}

echo "<hr>";

$nombrePays = count($capitales);
echo "Nombre de pays dans le tableau: $nombrePays <br>";
echo "<hr>";

foreach ($capitales as $capitale => $pays) {
    if (strpos($capitale, 'B') !== 0) {
        unset($capitales[$capitale]);
    }
}

print_r($capitales);
echo "<hr>";

?>
</body>
</html>