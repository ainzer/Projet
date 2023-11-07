<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function genererLien($lien, $titre) {
    $code_html = "<a href=\"$lien\">$titre</a>";
    return $code_html;
}

// Exemple d'utilisation :
echo genererLien("https://www.reddit.com/", "Reddit Hug");

?>


</body>
</html>