<?php
namespace App\Views;

use App\Components\Footer;
use App\Components\Header;
use App\Components\Layouts\DefaultLayout;
?>
<?= DefaultLayout::start("gerenciar treinos", "public/css/home.css") ?>
<?= Header::show() ?>
<div class="main-container px-5 pt-5 d-flex flex-column">
  <h1>Em construção...</h1>
  <?= Footer::show() ?>
</div>
<?= DefaultLayout::end() ?>
