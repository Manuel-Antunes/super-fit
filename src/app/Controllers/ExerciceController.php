<?php

use App\Data\Connection;
use App\Data\Repositories\ExerciceRepository;
use App\Services\ExerciceService;

class ExerciceController
{
  private ExerciceService $exerciceService;

  function __construct()
  {
    try {
      $this->userService = new ExerciceService(new ExerciceRepository(Connection::getConnection()));
    } catch (Exception $e) {
      var_dump($e->getMessage());
    }
  }

  public function store()
  {
    $name = $_POST["name"];
    $description = $_POST["description"];
    if (!isset($name) || !isset($description)) {
      echo "deu ruim";
      require_once "src/app/views/home.php";
    } else {
      $result = $this->userService->createUser($name, $password, $email, $wheight,  $birthDate, $physics);
      if (!is_bool($result)) {
        require_once "src/app/Views/manage-exercices.php";
      } else {
        require_once "src/app/Views/home.php";
      }
    }
  }

  public function index()
  {
    $exercices = $this->exerciceService->listExercices();
    if (!is_bool($exercices)) {
      $_REQUEST["exercices"] = $exercices;
      require_once "src/app/Views/manage-exercices.php";
    } else {
      require_once "src/app/Views/home.php";
    }
  }
}
