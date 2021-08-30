<?php
require_once "src/app/components/header.php";
require_once "src/app/components/footer.php";
require_once "src/app/components/layouts/default.php";
$exercices = array("name" => "oi");
?>
<?= DefaultLayout::start("gerenciar exercicios", "public/css/manage-exercices.css") ?>
<?= Header::show() ?>
<div class="main-container px-5 pt-5 d-flex flex-column">
  <?= Footer::show() ?>
</div>
<?= DefaultLayout::end() ?>
