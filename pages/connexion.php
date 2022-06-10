<h1>Connexion</h1>
<form action="index.php?page=connexionForm" method="post" class="row flex-column align-items-center">
    <div class="form-floating mb-2 col-8 col-md-6">
        <!-- type="email" pour mettre seulement des emails -->
        <input name="user" type="text" class="form-control" id="login" placeholder="name@example.com" 
        <?php /* Cookie de connexion 
        if (isset($_COOKIE['user'])){
            echo "value='".$_COOKIE['user']."'";
        }*/
        ?>>
        <label for="floatingInput">Identifiant</label>
    </div>
    <div class="form-floating mb-2 col-8 col-md-6">
        <input name="pwd" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Mot de passe</label>
    </div>
    <br>
    <button type="submit" class="btn btn-outline-dark col-5 col-md-1">Se connecter</button>
</form>



<br><br>
<h1>Crée un compte</h1>
<form action="index.php?page=utilisateurs&action=create" method="post" class="row flex-column align-items-center">
    <div class="form-floating mb-2 col-8 col-md-6">
        <!-- type="email" pour mettre seulement des emails -->
        <input name="user" type="text" class="form-control" id="login" placeholder="name@example.com">
        <label for="floatingInput">Identifiant</label>
    </div>
    <div class="form-floating mb-2 col-8 col-md-6">
        <input name="pwd" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Mot de passe</label>
    </div>
    <br>
    <button type="submit" class="btn btn-outline-dark col-5 col-md-1">S'inscrire</button>
</form>


