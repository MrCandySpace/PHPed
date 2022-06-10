<?php
require_once("Models/users.php");

/*
// Cookie
function login($login, $pwd)
{
    if ($login == "admin@gmail.com" && $pwd == "1234") {
        $_SESSION['user'] = $login;
        setcookie('user', $login);
        return $login;
    } else {
        return false;
    }
}*/




loginByUser($_POST['user'], $_POST['pwd']);
if (isset($_SESSION['user'])) {
    include("pages/connexionFormConfirmation.php");
} else {
    var_dump($_POST);
    $is_logged = loginByUser($_POST['user'], $_POST['pwd']);
    //si la connexion réussie
    if ($is_logged) {
       header("Location: index.php?page=connexionForm"); //je recharge la page pour afficher les bonnes infos dans le menu
    } else {
        include("pages/404.php");
    }
}
