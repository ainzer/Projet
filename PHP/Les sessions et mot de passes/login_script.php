<?php
session_start();
require_once 'user_data.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $login = $_POST['email'];
    $password = $_POST['password'];

    // Recherche de l'utilisateur par email
    // $user = null;
    foreach ($users as $u) {
        if ($u['email'] === $login) {
            $user = $u;
            break;
        }
    }

    // var_dump($user);

    if ($user !== null && password_verify($password, $user['password'])) {
        $_SESSION['auth'] = 'ok';
        // echo "OK";
        header('Location: page_protegee.php');
        exit();
    } else {
        unset($_SESSION['auth']);
        // echo "KO";
        header('Location: login_form.php');
        exit();
    }
}
else {
    // echo "Formulaire KO";
    header('Location: login_form.php');
    exit();
}
