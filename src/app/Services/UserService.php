<?php

namespace App\Services;

use App\Data\Repositories\UserRepository;
use App\Models\User;
use DateTime;
use Exception;

class UserService
{
  private UserRepository $userRepository;

  function __construct(UserRepository $userRepository)
  {
    $this->userRepository = $userRepository;
  }

  public function listUsers()
  {
    try {
      $list = $this->userRepository->index();
      $users = $this->mapToUsers($list);
      return $users;
    } catch (Exception $e) {
      echo `<div class="error-message">` . $e->getMessage() . `</div>`;
      return false;
    }
  }
  public function createUser(
    String $name,
    String $password,
    String $email,
    float $wheight,
    DateTime $birthDate,
    String $physics
  ) {
    try {
      $this->userRepository->store($name, password_hash($password, PASSWORD_DEFAULT), $email, $wheight, $birthDate, $physics);
    } catch (Exception $e) {
      echo '<div class="error-message">' . $e->getMessage() . '</div>';
      return false;
    }
  }
  public function search(String $queryString)
  {
    try {
      $list = $this->userRepository->search($queryString);
      $users = $this->mapToUsers($list);
      return $users;
    } catch (Exception $e) {
      echo `<div class="error-message">` . $e->getMessage() . `</div>`;
      return false;
    }
  }

  public function logIn(String $email, String $password)
  {
    try {
      $fetch = $this->userRepository->findByEmal($email);
      if (is_null($fetch)) {
        throw new Exception("User not found");
      }
      if (!password_verify($password, $fetch['password'])) {
        throw new Exception("Invalid password");
      }
      $user = new User($fetch['id'], $fetch['email'], $fetch['name'], $fetch['fullname'], $fetch['wheight'], $fetch['birthDate'], $fetch['physics']);
      return $user;
    } catch (Exception $e) {
      echo `<div class="error-message">` . $e->getMessage() . `</div>`;
      return false;
    }
  }

  private function mapToUsers($array)
  {
    return array_map(function ($e) {
      return new User($e['id'], $e['email'], $e['name'], $e['fullname'], $e['wheight'], $e['birthDate'], $e['physics']);
    }, $array);
  }
}
