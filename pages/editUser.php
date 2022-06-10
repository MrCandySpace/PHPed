<h1>Updating</h1>
<form action="index.php?page=utilisateurs&action=update&action=save" method="post" class="row flex-column align-items-center">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <div class="form-floating mb-2 col-8 col-md-6">
        <!-- type="email" pour mettre seulement des emails -->
        <input name="user" type="text" class="form-control" id="login" placeholder="name@example.com" value="<?= $user['name'] ?>">
        <label for="floatingInput">Identifiant</label>
    </div>
    <div class="form-floating mb-2 col-8 col-md-6">
        <input name="pwd" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Mot de passe</label>
    </div>
    <br>
    <button type="submit" class="btn btn-outline-dark col-5 col-md-1">Mise à jour</button>
</form>

