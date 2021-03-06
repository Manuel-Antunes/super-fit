<?php

namespace App\Views;

use App\Components\Footer;
use App\Components\Header;
use App\Components\Layouts\DefaultLayout;

?>
<?= DefaultLayout::start("home", "public/css/home.css") ?>
<?= Header::show() ?>
<div class="main-container px-5 pt-5 d-flex flex-column">
  <div class="main-menu">
    <a href="./manage-trains" class="waves-effect waves-light btn-large" id="manage-trains">
      <h5>Gerenciar Treinos</h5>
    </a>
    <a href="./manage-evaluations" class="waves-effect waves-light btn-large" id="manage-evaluations">
      <h5>Gerenciar Avaliações</h5>
    </a>
    <a href="./manage-clients" class="waves-effect waves-light btn-large" id="manage-clients">
      <h5>Gerenciar Clientes</h5>
    </a>
    <a href="./manage-exercises" class="waves-effect waves-light btn-large" id="manage-exercices">
      <h5>Gerenciar Exercicios</h5>
    </a>
  </div>
  <?= Footer::show() ?>
</div>
<?= DefaultLayout::end() ?>
