<?php


require_once("Models/users.php"); //Model view


if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case "delete":
            deleteUser($_GET["id"]);
            header("Location: index.php?page=utilisateurs");
            break;
        case "create":
            createUser($_POST['user'], $_POST['pwd']);
            header("Location: index.php?page=utilisateurs");
            break;
        default:
            $users = getUsers();
            include("pages/404.php");
            break;
    }
} else {
    // $bdd = connection();
    $users = getUsers();
    include("pages/utilisateurs.php"); //Model utilisateur 

}
