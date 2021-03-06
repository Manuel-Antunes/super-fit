<?php

use App\Data\Connection;
use App\Data\Repositories\UserRepository;
use App\Services\UserService;

class UserController
{
  private UserService $userService;

  function __construct()
  {
    try {
      $this->userService = new UserService(new UserRepository(Connection::getConnection()));
    } catch (Exception $e) {
      var_dump($e->getMessage());
    }
  }

  public function index()
  {
    require_once "src/app/Views/manage-clients.php";
  }

  public function store()
  {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $wheight = $_POST["wheight"];
    $birthDate = $_POST["birthDate"];
    $physics = $_POST["physics"];
    $gender = $_POST["gender"];
    if (!isset($name) || !isset($email) || !isset($password) || !isset($wheight) || !isset($birthDate) || !isset($physics) || !isset($gender)) {
      echo "deu ruim";
      require_once "src/app/views/signup.php";
    } else {
      // $result = $birthDate;
      // echo $result;
      $result = $this->userService->createUser($name, $password, $email, $wheight,  $birthDate, $physics, $gender);
      if (!is_bool($result)) {
        require_once "src/app/Views/login.php";
      } else {
        require_once "src/app/Views/signup.php";
      }
    }
  }
}
