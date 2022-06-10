<?php


require_once("Models/post.php");


if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case "delete":
            deleteUser($_GET["id"]);
            header("Location: index.php?page=articles");
            break;
        case "create":
            createPost($_POST['title'], $_POST['content'], $_SESSION['userID']);
            header("Location: index.php?page=articles");
            break;
        case "update":
            $user = getUserByID($_GET['id']);
            include("pages/editPost.php");
            break;
        case "new":
            include("pages/editPost.php");
            break;
        case "save":
            updateUser($_POST['id'], $_POST['user'], $_POST['pwd']);
            header("Location: index.php?page=articles");
            break;
        default:
            $users = getUsers();
            include("pages/404.php");
            break;
    }
} else {
    // $bdd = connection();
    $users = getUsers();
    include("pages/articles.php");
}
