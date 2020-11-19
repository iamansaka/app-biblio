<?php ob_start(); ?>

<main class="col-12 p-3">

    <h1 style="font-size: 17px; margin-top: 30px;">Liste de livres</h1>
    <p class="text-secondary mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, expedita.</p>

    <div class="col-12 d-flex flex-wrap p-0">
        <?php while ($data = $livres->fetch()) : ?>
            <div id="livre" style="width: 110px;" class="mr-3">
                <a href="books&id=<?= $data['id'] ?>">
                    <img src="assets/images/<?= $data['images'] ?>" style="width: 110px; height: 170px;">
                </a>
                <h2 style="font-size: 12px;" class="mt-2"><?= $data['title'] ?></h2>
                <p style="font-size: 11px; opacity: .4;"><?= $data['author'] ?></p>
            </div>
        <?php endwhile; ?>
    </div>
</main>

<?php 
$content = ob_get_clean();
require "templates/template.php";
?>