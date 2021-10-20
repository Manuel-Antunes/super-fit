<?php

namespace App\Components;

class ExerciceCreationModal
{
  public static function show($exercice)
  {
?>
    <style>
      .file-input {
        width: 100px;
        height: 100px;
        border-radius: 10px;
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
        border-radius: 10px;
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
        border-radius: 10px;
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
        <h4><?= $exercice["name"] ?></h4>
        <div class="divider"></div>
        <p class="description">
          <?= $exercice["description"] ?>
        </p>
        <div class="container-fluid">
          <div class="exercice-media-grid">
            <?php foreach ($exercice["media"] as $media) : ?>
              <img src="<?= $media["src"] ?>" alt="<?= $media["name"] ?>">
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
    <script src="public/js/exercice-creation-modal.js"></script>
<?php
  }
}
