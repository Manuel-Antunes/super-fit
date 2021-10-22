<?php

namespace App\Components;

class ExerciceCreationModal
{
  public static function show()
  {
?>
    <style>
      .file-input {
        width: 100px;
        height: 100px;
        border-radius: 5px;
        background-color: #7159c1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
        color: #fff;
      }

      .exercice-adding-image {
        width: 100px;
        height: 100px;
        border-radius: 5px;
        text-align: center;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        overflow: hidden;
        display: flex;
      }

      .file-input input:hover {
        cursor: pointer;
      }

      .file-input input {
        opacity: 0;
        width: 100px;
        height: 100px;
        position: absolute;
      }

      #exercice-media {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row-reverse;
        border-radius: 5px;
      }

      #exercice-media div {
        margin-bottom: 20px;
      }

      #exercice-media div+div {
        margin-right: 20px;
      }
    </style>
    <div id="exercice-creation-modal" class="modal">
      <div class="p-5">
        <h4>Cadastrar Exercicio</h4>
        <div class="container-fluid">
          <form id="form" class="row g-3 mt-2" action="./exercises" method="POST">
            <div class="input-field w-100">
              <label for="name" class="form-label">Nome</label>
              <input required type="text" name="name" class="form-control" id="name">
            </div>
            <div class="input-field w-100">
              <textarea required id="description" name="description" class="materialize-textarea"></textarea>
              <label for="description">Description</label>
            </div>
            <div id="exercice-media">
              <div class="file-input waves-effect waves-light">
                <input type="file" id="files" onchange="addImageToList(this)" name="files[]" multiple>
                <i class="material-icons">add</i>
                <p>inserir mídia</p>
              </div>
            </div>
            <div class="d-flex justify-content-between">
              <a href="#" class="align-self-flex-end waves-effect waves-light btn grey lighten-2"><i class="material-icons left">chevron_left</i>
                Voltar</a>
              <button type="submit" class="align-self-flex-end waves-effect waves-light btn purple darken-4">Cadastrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="public/js/exercice-creation-modal.js"></script>
<?php
  }
}
