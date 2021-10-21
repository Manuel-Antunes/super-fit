<?php

namespace App\Views;

use App\Components\Layouts\DefaultLayout;

?>
<?= DefaultLayout::start("login", "public/css/auth.css") ?>
<div class="py-5 px-3">
  <div class="main-container d-flex">
    <div class="d-flex col w-100 purple darken-4 justify-content-center logo-wrapper">
      <img class="responsive-img w-75" src="public/img/logo.svg" alt="super fit logo">
    </div>
    <div class="col xl container p-5">
      <h1 class="display-3">Login</h1>
      <form class="row g-3" action="./auth" method="POST">
        <div class="input-field w-100">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="inputEmail4">
        </div>
        <div class="input-field w-100">
          <label for="inputPassword4" class="form-label">Senha</label>
          <input type="password" name="password" class="form-control" id="inputPassword4">
        </div>
        <p class="lead">Se ainda não faz parte dessa familia poderosa,
          <a href="./signup">cadastre-se agora</a>, e mude sua vida!
        </p>
        <div>
          <button type="submit" class="w-100 waves-effect waves-light btn-large purple darken-4">Entrar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?= DefaultLayout::end() ?>
