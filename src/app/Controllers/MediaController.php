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

  public function store()
  {
    $name = $_POST["name"];
    $file = $_POST["file"];
    $type = $_POST["type"];
    $subtype = $_POST["subtype"];
    if (!isset($name) || !isset($file) || !isset($type) || !isset($subtype)) {
      require_once "src/app/views/signup.php";
    } else {
      $result = $this->userService->createUser($name, $password, $email, $wheight,  $birthDate, $physics, $gender);
      if (!is_bool($result)) {
        require_once "src/app/Views/login.php";
      } else {
        require_once "src/app/Views/signup.php";
      }
    }
  }
}
