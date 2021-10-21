<?php

namespace App\Views;

use App\Components\Layouts\DefaultLayout;

?>
<?= DefaultLayout::start("Cadastro", "public/css/auth.css") ?>
<div class="py-5 px-3">
  <div class="main-container d-flex">
    <div class="d-flex col w-100 purple darken-4 justify-content-center logo-wrapper">
      <img class="responsive-img w-75" src="public/img/logo.svg" alt="super fit logo">
    </div>
    <div class="col w-100 p-5 align-self-center">
      <h1 class="display-3">Cadastro</h1>
      <form class="row g-3" method="POST" action="./users">
        <div class="input-field w-100">
          <label for="email">Email</label>
          <input type="email" required name="email" class="validate" id="email">
        </div>
        <div class="input-field w-100">
          <label for="password">Senha</label>
          <input type="password" required name="password" class="validate" id="password">
        </div>
        <div class="input-field w-100">
          <label for="confirm-password">Confirmar Senha</label>
          <input type="password" required class="confirmPassword" class="validate" id="confirm-password">
        </div>
        <div class="input-field col-12 w-100">
          <label for="name">Nome</label>
          <input type="text" required name="name" id="name">
        </div>
        <div class="col-12 w-100">
          <label for="brith-date">Data de nascimento</label>
          <input type="date" required name="birthDate" class="validate" id="brith-date">
        </div>
        <div class="col-12">
          <label for="inputZip">Gênero</label>
          <p>
            <input class="with-gap" required name="gender" type="radio" id="m" />
            <label value="Masculino" for="m">Masculino</label>
          </p>
          <p>
            <input class="with-gap" required name="gender" type="radio" id="f" />
            <label value="Feminino" for="f">Feminino</label>
          </p>
          <p>
            <input class="with-gap" required name="gender" type="radio" id="other" />
            <label value="" for="other">Outro</label>
          </p>
        </div>
        <div class="col-12">
          <label for="inputZip">Tipo físico</label>
          <p>
            <input class="with-gap" required name="physics" type="radio" id="ectomorph" />
            <label value="Endomorfo" for="ectomorph">Endomorfo</label>
          </p>
          <p>
            <input class="with-gap" required name="physics" type="radio" id="mesomorph" />
            <label value="Mesomorfo" for="mesomorph">Mesomorfo</label>
          </p>
          <p>
            <input class="with-gap" required name="physics" type="radio" id="endomorph" />
            <label value="Ectomorfo" for="endomorph">Ectomorfo</label>
          </p>
        </div>
        <div class="input-field col w-50">
          <label for="heigth">Altura</label>
          <input type="number" required step="0.01" name="heigth" id="heigth">
        </div>
        <div class="input-field col w-50">
          <label for="wheight">Peso</label>
          <input type="number" required step="0.01" name="wheight" id="wheight">
        </div>
        <p class="lead">Já faz parte da nossa família ? <a href="./login">faça o login</a>, e vamos
          voltar ao trabalho!</p>
        <div class="col-12">
          <button type="submit" class="waves-effect waves-light btn-large w-100 purple darken-4">Cadastrar-se</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?= DefaultLayout::end() ?>
