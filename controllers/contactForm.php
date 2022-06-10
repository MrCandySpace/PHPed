<?php

/**
 * 1 - Traitement de l'information (Model)
 * 
 * 2 - Affichage du résultat (View)
 */

if($_POST['object'] && $_POST['email']){
    $object = $_POST['object'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    include("pages/contactFormConfirmation.php");
}

/*
echo $_POST['name'];
echo $_POST['email'];
echo $_POST['object'];
*/