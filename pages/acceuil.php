<h1>Accueil</h1>

<?php 
var_dump($posts);

foreach($posts as $post){
    ?> 
        <div class="row">
            <?= $post['title'] ?>
        <p> <?= $post['content'] ?> </p>


        </div>

    <?php


?>
}