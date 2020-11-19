<?php ob_start(); ?>

<main class="col-12 p-3" id="w-livre" style="margin-top: 30px;">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="accueil">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= $livre['title'] ?></li>
    </ol>
    </nav>
    <div class="col d-flex mt-3 p-0">
        <img src="assets/images/<?= $livre['images'] ?>" style="width: 150px; height: 210px;" class="mr-3">
        <div class="text">
            <h1 style="font-size: 19px; font-weight: 700;"><?= $livre['title'] ?></h1>
            <p>Auteur: <?= $livre['author'] ?></p>
            <p>Nombre de pages : <?= $livre['nbPages'] ?></p>
        </div>
    </div>
    <div class="col mt-4 livre-desc p-0">
        <h3>Description du livre</h3>
        <p><?= $livre['description'] ?></p>
    </div>

</main>

<?php 
$content = ob_get_clean();
require "templates/template.php";
?>