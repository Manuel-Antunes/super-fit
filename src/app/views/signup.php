<?php
require_once "src/app/components/layouts/default.php";
?>
<?= DefaultLayout::start("cadastro", "public/css/auth.css") ?>
<div class="py-5 px-3">
  <div class="main-container d-flex">
    <div class="d-flex col w-100 purple darken-4 justify-content-center logo-wrapper">
      <img class="responsive-img w-75" src="public/img/logo.svg" alt="super fit logo">
    </div>
    <div class="col w-100 p-5 align-self-center">
      <h1 class="display-3">Cadastro</h1>
      <form class="row g-3">
        <div class="input-field w-100">
          <label for="inputEmail4">Email</label>
          <input type="email" class="validate" id="inputEmail4">
        </div>
        <div class="input-field w-100">
          <label for="inputPassword4">Senha</label>
          <input type="password" class="validate" id="inputPassword4">
        </div>
        <div class="input-field w-100">
          <label for="inputConfirmPassword">Confirmar Senha</label>
          <input type="password" class="validate" id="inputConfirmPassword">
        </div>
        <div class="input-field col-12 w-100">
          <label for="inputName">Nome</label>
          <input type="text" id="inputName">
        </div>
        <div class="col-12 w-100">
          <label for="inputBirthDate">Data de nascimento</label>
          <input type="date" class="validate" id="inputBirthDate">
        </div>
        <div class="col-12">
          <label for="inputZip">Gênero</label>
          <p>
            <input class="with-gap" name="gender" type="radio" id="m" />
            <label for="m">Masculino</label>
          </p>
          <p>
            <input class="with-gap" name="gender" type="radio" id="f" />
            <label for="f">Feminino</label>
          </p>
          <p>
            <input class="with-gap" name="gender" type="radio" id="other" />
            <label for="other">Outro</label>
          </p>
        </div>
        <div class="col-12">
          <label for="inputZip">Tipo físico</label>
          <p>
            <input class="with-gap" name="physics" type="radio" id="ectomorph" />
            <label for="ectomorph">Endomorfo</label>
          </p>
          <p>
            <input class="with-gap" name="physics" type="radio" id="mesomorph" />
            <label for="mesomorph">Mesomorfo</label>
          </p>
          <p>
            <input class="with-gap" name="physics" type="radio" id="endomorph" />
            <label for="endomorph">Ectomorfo</label>
          </p>
        </div>
        <div class="input-field col w-50">
          <label for="inputHeight">Altura</label>
          <input type="number" class="validate" id="inputHeight">
        </div>
        <div class="input-field col w-50">
          <label for="inputWheight">Peso</label>
          <input type="number" class="validate" id="inputWheight">
        </div>
        <p class="lead">Já faz parte da nossa família ? <a href="?view=login">faça o login</a>, e vamos
          voltar ao trabalho!</p>
        <div class="col-12">
          <button type="submit" class="waves-effect waves-light btn-large w-100 purple darken-4">Cadastrar-se</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?= DefaultLayout::end() ?>
