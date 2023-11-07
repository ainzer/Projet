<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Adresse IP du server
    $server_ip = gethostbyname(gethostname());

    // Adresse IP du client
    $client_ip = $_SERVER['REMOTE_ADDR'];

    // Affichage des adresses IP
    echo "Adresse IP du serveur : " . $server_ip . "<br>";
    echo "Adresse IP du client : " . $client_ip;
    ?>
</body>
</html>