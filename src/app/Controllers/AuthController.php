<?php

use App\Data\Connection;
use App\Data\Repositories\UserRepository;
use App\Services\UserService as ServicesUserService;
use App\Services\UserService;

class AuthController
{
  private ServicesUserService $userService;

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
    $email = $_POST["email"];
    $password = $_POST["password"];
    if (!isset($email) || !isset($password)) {
      require_once "src/app/Views/signup.php";
    } else {
      $result = $this->userService->logIn($email, $password);
      if (!is_bool($result)) {
        $_SESSION["loggedUser"] = array("id" => $result->getId(), "name" => $result->getName(), "email" => $result->getEmail());
        header('Location: ./');
      } else {
        require_once "src/app/Views/login.php";
      }
    }
  }

  public function create()
  {
    require_once "src/app/Views/signup.php";
  }

  public function destroy()
  {
    session_destroy();
    require_once "src/app/Views/login.php";
  }

  public function edit()
  {
    require_once "src/app/Views/login.php";
  }
}
