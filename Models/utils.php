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
