<?php

/**
 * Se connecte à la bdd
 */
function connection()
{
    $user = "root"; //utilisateur de MySQL
    $pass = ""; // mot de passe 
    $dsn = "mysql:host=localhost;dbname=blog"; //Information sur le srveur MySQL
    $bdd = new PDO($dsn, $user, $pass);

    return $bdd;
}


/**
 * Retourne la liste des utilisateurs 
 */
function getUsers()
{
    $bdd = connection(); //Connexion à la base de donnée 
    $reponse = $bdd->query("SELECT * FROM `users`"); //Requête à la base de donnée 
    return $reponse->fetchAll();
}


/**
 * Retourne un utilisateur suivant son login et son mot de passe 
 */
function getUsersByLogin($login, $pwd)
{
    $bdd = connection();
    $sql = "SELECT * 
        FROM `users` 
        WHERE name=? 
        AND password=?";

    // Sécurisation du code -> anti-injection 
    $requete = $bdd->prepare($sql); //préparation de la requête
    $requete->execute([$login, $pwd]); //execution de la requête en passant 2 paramètres

    return $requete->fetchAll();
}

/**
 * Permet de s'identifier avec les logins de la bdd
 */
function loginByUser(string $login, string $pwd)
{
    $user = getUsersByLogin($login, $pwd); //Récupération des informatinos depuis le model user
    // var_dump($user[0]['name']); 
    if (isset($user[0])) {
        $_SESSION['user'] = $user[0]['name'];
        setcookie('user', $user[0]['name']);
        return true;
    } else {
        return false;
    }
}

/**
 * Permet de crée un nouvel utilisateur dans la bdd
 */
function createUser(string $name, string $pwd)
{
    $bdd = connection();
    $sql = "INSERT INTO users (name,password)
    VALUES(?,?)";
    // Sécurisation du code -> anti-injection 
    $requete = $bdd->prepare($sql); //préparation de la requête
    return $requete->execute([$name, $pwd]); //execution de la requête en passant 2 paramètres
}

/**
 * Permet de supprimé un utilisateur dans la bdd 
 */
function deleteUser(int $id)
{
    $bdd = connection();
    $sql = "DELETE FROM users WHERE id = ?";
    // Sécurisation du code -> anti-injection 
    $requete = $bdd->prepare($sql); //préparation de la requête
    return $requete->execute([$id]); //execution de la requête en passant 2 paramètres
}

/**
 * Permet de modifier un utilisateur 
 */

function updateUser(int $id, string $name, string $pwd)
{
    $bdd = connection();
    $sql = "UPDATE users SET name=?,password=? WHERE id=?";
    // Sécurisation du code -> anti-injection 
    $requete = $bdd->prepare($sql); //préparation de la requête
    // Execution de la requête en passant 3 paramètres 
    return $requete->execute([$name, $pwd, $id]); //execution de la requête en passant 2 paramètres
}
