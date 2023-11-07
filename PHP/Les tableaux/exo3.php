<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$departements = array(

    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),

    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),

    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),

    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")

);

ksort($departements); // Trie le tableau par clés (régions) par ordre alphabétique

foreach ($departements as $region => $departementList) {
    echo "$region : " . implode(", ", $departementList) . "<br><hr>";
}


foreach ($departements as $region => $departementList) {
    $nombreDepartements = count($departementList);
    echo "$region : $nombreDepartements départements<br><hr>";
}

    ?>
</body>
</html>