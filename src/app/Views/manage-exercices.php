<?php

namespace App\Views;

use App\Components\ExerciceCreationModal;
use App\Components\Footer;
use App\Components\Header;
use App\Components\Layouts\DefaultLayout;

$exercices = $_REQUEST['exercices'];
?>
<?= DefaultLayout::start("gerenciar exercicios", "public/css/manage-exercices.css") ?>
<?= Header::show() ?>
<div class="container-fluid px-5 pt-5 d-flex flex-column">
  <div class="main-container">
    <?php foreach ($exercices as $e) : ?>
      <a class="waves-effect waves-light btn-large">
        <?= $e->getName() ?>
        <?= $e->getDescription() ?>
      </a>
    <?php endforeach; ?>
  </div>
  <button id="fab-exercice" data-target="exercice-creation-modal" class="btn-floating purple darken-4 fab fixed-bottom btn-large waves-effect waves-light modal-trigger">
    <i class="material-icons">add</i>
  </button>
  <?= ExerciceCreationModal::show() ?>
  <?= Footer::show() ?>
</div>
<?= DefaultLayout::end() ?>
