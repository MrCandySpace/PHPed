<h1>Contact</h1>


<form action="index.php?page=contactForm" method="post" class="row flex-column align-items-center">
    <div class="form-floating mb-2 col-8 col-md-6">
        <textarea name="name" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Nom Prénom</label>
    </div>
    <div class="form-floating mb-2 col-8 col-md-6">
        <input name="email" type="email" class="form-control" id="floatingInputValue" placeholder="nomprenom@mail.com">
        <label for="floatingInputValue">Votre email</label>
    </div>
    <div class="form-floating mb-2 col-8 col-md-6">
        <textarea name="object" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Votre commentaire</label>
    </div>

    <button type="submit" class="btn btn-outline-primary col-5 col-md-1">Envoyer</button>

</form>