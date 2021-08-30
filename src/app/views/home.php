<?php
require_once "src/app/components/header.php";
require_once "src/app/components/footer.php";
require_once "src/app/components/layouts/default.php";
?>
<?= DefaultLayout::start("home", "public/css/home.css") ?>
<?= Header::show() ?>
<div class="main-container px-5 pt-5 d-flex flex-column">
  <div class="main-menu">
    <div id="manage-trains">
      <h5>Gerenciar Treinos</h5>
    </div>
    <div id="manage-evaluations">
      <h5>Gerenciar Avaliações</h5>
    </div>
    <div id="manage-clients">
      <h5>Gerenciar Clientes</h5>
    </div>
    <div id="manage-exercices">
      <h5>Gerenciar Exercicios</h5>
    </div>
  </div>
  <?= Footer::show() ?>
</div>
<?= DefaultLayout::end() ?>
