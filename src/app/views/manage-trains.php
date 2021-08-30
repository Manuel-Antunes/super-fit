<?php
require_once "src/app/components/header.php";
require_once "src/app/components/footer.php";
require_once "src/app/components/layouts/default.php";
?>
<?= DefaultLayout::start("gerenciar treinos", "public/css/home.css") ?>
<?= Header::show() ?>
<div class="main-container px-5 pt-5 d-flex flex-column">
  <h1>Em construção...</h1>
  <?= Footer::show() ?>
</div>
<?= DefaultLayout::end() ?>
