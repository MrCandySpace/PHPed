<?php 

require_once("Models/utils.php"); 

function getPosts()
{
    $bdd = connection(); //Connexion à la base de donnée 
    $reponse = $bdd->query("SELECT * FROM `users`"); //Requête à la base de donnée 
    return $reponse->fetchAll();
}

/**
 * Retourne un post avec son ID 
 */
function getPostByID(int $id)
{
    $bdd = connection();
    $sql = "SELECT * 
        FROM `users` 
        WHERE id = ?";
    // Sécurisation du code -> anti-injection 
    $requete = $bdd->prepare($sql); //préparation de la requête
    $requete->execute([$id]); //execution de la requête en passant 2 paramètres
    $data = $requete->fetchAll();
    return $data[0];
}


/**
 * Permet de crée un nouveau post
 */
function createPost(string $title, string $content, string $userID)
{
    $bdd = connection();
    $sql = "INSERT INTO posts (title,content,user_id,created_date) VALUES(?,?,?,NOW())"; // -> NOW() permet de mettre la date du jour 
    // Sécurisation du code -> anti-injection 
    $requete = $bdd->prepare($sql); //préparation de la requête
    return $requete->execute([$title, $content, $userID]); //execution de la requête en passant 2 paramètres
}


/**
 * Permet de supprimé un utilisateur dans la bdd 
 */
function deletePost(int $id)
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

function updatePost(int $id, string $name, string $pwd)
{
    $bdd = connection();
    $sql = "UPDATE users SET name=?,password=? WHERE id=?";
    // Sécurisation du code -> anti-injection 
    $requete = $bdd->prepare($sql); //préparation de la requête
    // Execution de la requête en passant 3 paramètres 
    return $requete->execute([$name, $pwd, $id]); //execution de la requête en passant 2 paramètres
}
