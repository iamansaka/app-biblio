<?php ob_start(); ?>

<main class="col-12 p-3">
    <div class="alert alert-danger" role="alert" style="margin-top: 30px;">
        <?= $error ?>
    </div>
</main>

<?php 
$content = ob_get_clean();
require "templates/template.php";
?>