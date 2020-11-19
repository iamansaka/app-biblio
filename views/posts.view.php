<?php ob_start(); ?>

<main class="col-12 p-3" id="w-posts">
    <h1>Ajouter un livre</h1>
    <form method="post">
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" name="titrePost" class="form-control" id="title" placeholder="Le titre du livre" required />
        </div>
        <div class="form-group">
            <label for="author">Auteur</label>
            <input type="text" name="auteurPost" class="form-control" id="author" placeholder="L'auteur du livre" required />
        </div>
        <div class="form-group">
            <label for="images">Images</label>
            <input type="text" name="images" class="form-control" id="images" placeholder="Lien de l'image" required />
        </div>
        <div class="form-group">
            <label for="nbPages">Nombre de pages</label>
            <input type="number" name="nbPagesPost" class="form-control" id="nbPages" placeholder="Nombre de pages" required />
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="descriptionPost" id="description" rows="3" placeholder="La description du livre par ici.."></textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="Submit">
    </form>
</main>

<?php
$content = ob_get_clean();
require "templates/template.php";
?>