<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>

    <form action="login_script.php" method="post">
        <label for="login">Login (Email) :</label>
        <input type="text" id="login" name="login" required>
        <br>
        <label for="password">Password :</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Login">
    </form>
    
</body>
</html>