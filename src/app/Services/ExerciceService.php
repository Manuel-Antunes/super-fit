<?php

namespace App\Services;

use App\Data\Repositories\ExerciceRepository;
use App\Models\Exercice;

class ExerciceService
{
  private ExerciceRepository $exerciceRepository;

  function __construct(ExerciceRepository $exerciceRepository)
  {
    $this->exerciceRepository = $exerciceRepository;
  }

  public function createExercice(String $name, String $description)
  {
    try {
      $this->exerciceRepository->store($name, $description);
    } catch (\Exception $e) {
      echo '<div class="error-message">' . $e->getMessage() . '</div>';
      return false;
    }
  }

  public function listExercices()
  {
    try {
      $list = $this->exerciceRepository->index();
      $exercices = $this->mapToExercice($list);
      return $exercices;
    } catch (\Exception $e) {
      echo `<div class="error-message">` . $e->getMessage() . `</div>`;
      return false;
    }
  }

  private function mapToExercice($array)
  {
    return array_map(function ($e) {
      return new Exercice($e['name'], $e['description']);
    }, $array);
  }
}
