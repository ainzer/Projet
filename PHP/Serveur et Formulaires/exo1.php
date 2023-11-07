<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Formulaire avec JavaScript</title>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $message = $_POST["message"];
    }
    ?>
    <script>
        function afficherValeurs() {
            // Utilisez cette fonction pour afficher ou traiter les valeurs du formulaire avec JavaScript
            // Par exemple, vous pouvez afficher une alerte avec les valeurs :
            alert("Nom : " + document.getElementById("nom").value +
                "\nEmail : " + document.getElementById("email").value +
                "\nMessage : " + document.getElementById("message").value);
        }
    </script>
</head>
<body>
    <h1>Formulaire avec JavaScript</h1>
    <form action="formulaire.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>

        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea><br>

        <input type="submit" value="Envoyer" onclick="afficherValeurs(); return true;">
    </form>

    <h1>Valeurs transmises depuis le formulaire</h1>
    <p>
        Nom : <?php echo isset($nom) ? $nom : ''; ?>
    </p>
    <p>
        Email : <?php echo isset($email) ? $email : ''; ?>
    </p>
    <p>
        Message : <?php echo isset($message) ? $message : ''; ?>
    </p>
</body>
</html>
