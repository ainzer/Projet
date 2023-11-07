<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

// Nom du fichier à lire
$nomFichier = 'liens.txt';

// Lire le contenu du fichier dans un tableau
$contenu = file($nomFichier, FILE_IGNORE_NEW_LINES);

// Construire le contenu de la page web
$contenuHtml = "<html>\n<head>\n<title>Liste de sites</title>\n</head>\n<body>\n<ul>";

// Ajouter chaque lien hypertexte à la liste
foreach ($contenu as $ligne) {
    $contenuHtml .= "<li><a href='" . htmlspecialchars($ligne) . "'>" . htmlspecialchars($ligne) . "</a></li>";
}

// Fermer la structure HTML
$contenuHtml .= "\n</ul>\n</body>\n</html>";

// Ecrire le contenu dans un nouveau fichier HTML
$nomFichierHtml = 'page_web.html';
file_put_contents($nomFichierHtml, $contenuHtml);

echo "Page web générée avec succès.";

?>
</body>
</html>