<?php

use Repositories\UserRepository;
use Services\UserService;

class UserResolver
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
    if (!isset($username) || !isset($fullname) || !isset($email) || !isset($password)) {
      require_once "app/views/signup/index.php";
    } else {
      $result = $this->userService->createUser($username, $password, $fullname, $email, $wheight, $birthDate);
      if (!is_bool($result)) {
        require_once "app/views/login/index.php";
      } else {
        require_once "app/views/signup/index.php";
      }
    }
  }

  public function login()
  {
    $email = $_POST["email"];
    $password = $_POST["password"];
    if (!isset($email) || !isset($password)) {
      require_once "app/views/signup/index.php";
    } else {
      $result = $this->userService->logIn($email, $password);
      if (!is_bool($result)) {
        $_SESSION["loggedUser"] = array("id" => $result->getId(), "username" => $result->getUsername(), "email" => $result->getEmail());
        require_once "app/views/home/index.php";
      } else {
        require_once "app/views/login/index.php";
      }
    }
  }

  public function logout()
  {
    session_destroy();
    header("Location: ?view=login");
  }
}
