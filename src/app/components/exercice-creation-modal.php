<?php
class ExerciceCreationModal
{
  public static function show()
  {
?>
    <style>
      .file-input {
        width: 90px;
        height: 90px;
        border-radius: 10px;
        background-color: #7159c1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
        color: #fff;
      }

      .file-input input:hover {
        cursor: pointer;
      }

      .file-input input {
        opacity: 0;
        width: 90px;
        height: 90px;
        position: absolute;
      }

      #exercice-media {
        margin-bottom: 20px;
      }
    </style>
    <div id="exercice-creation-modal" class="modal">
      <div class="p-5">
        <h4>Cadastrar Exercicio</h4>
        <div class="container-fluid">
          <form class="row g-3 mt-2">
            <div class="input-field w-100">
              <label for="inputName" class="form-label">Nome</label>
              <input type="text" name="name" class="form-control" id="inputName">
            </div>
            <div class="input-field w-100">
              <textarea id="description" name="desciption" class="materialize-textarea"></textarea>
              <label for="description">Textarea</label>
            </div>
            <div id="exercice-media">
              <div class="file-input">
                <input type="file" id="files" name="files" multiple>
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
