<nav>
    <ul class="nav justify-content-center">
        <li class="nav-item"><a class="nav-link link-dark" href="index.php">Accueil</a></li>
        <li class="nav-item"><a class="nav-link link-dark" href="index.php?page=contact">Contact</a></li>
        <li class="nav-item"><a class="nav-link link-dark" href="index.php?page=articles&action=new">Posts</a></li>
     
        <li class="nav-item"><a class="nav-link link-dark" href="index.php?page=esp">En savoir plus</a></li>
        <li class="nav-item"><a class="nav-link link-dark" href="index.php?page=utilisateurs">Utilisateurs</a></li>
        <?php 
        if(isset($_SESSION["user"])){
        ?> 
        <a class="nav-link link-dark" href="index.php?page=deconnexionForm">Déconnexion</a> <?php
        } else {
            ?><a class="nav-link link-dark" href="index.php?page=connexion">Connexion</a><?php
        } ?>
    </ul>
</nav>