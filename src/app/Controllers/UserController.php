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
    $username = $_POST["username"];
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $wheight = $_POST["wheight"];
    $birthDate = $_POST["birthDate"];
    $physics = $_POST["physics"];
    if (!isset($username) || !isset($fullname) || !isset($email) || !isset($password) || !isset($wheight) || !isset($birthDate) || !isset($physics)) {
      echo "deu ruim";
      require_once "app/views/signup.php";
    } else {
      $result = $username;
      echo $result;
      // $result = $this->userService->createUser($username, $password, $fullname, $email, $wheight, $birthDate, $physics);
      if (!is_bool($result)) {
        require_once "app/views/login.php";
      } else {
        require_once "app/views/signup.php";
      }
    }
  }
}
