<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

function somme($tableau) {
    return array_sum($tableau);
}

$tab = array(4, 3, 8, 2);
$resultat = somme($tab);

echo "La somme des valeurs du tableau est : " . $resultat;

?>

</body>
</html>