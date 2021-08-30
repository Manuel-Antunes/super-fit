<?php

namespace App\Repositories;

use DateTime;
use PDO;
class UserRepository extends Repository
{
  public function index()
  {
    $query = $this->conn->query('SELECT * FROM users');
    $fetchAll = $query->fetchAll(PDO::FETCH_ASSOC);
    return $fetchAll;
  }

  public function store(
    String $username,
    String $password,
    String $fullname,
    String $email,
    float $wheight,
    DateTime $birthDate,
    String $physics
  ) {
    $stmt = $this->conn->prepare('INSERT INTO users (username, password, fullname, email, wheight, birthDate, physics) VALUES (:username, :password, :fullname, :email, :wheight,:birthDate, :physics)');
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":fullname", $fullname);
    $stmt->bindParam(":wheight", $wheight);
    $stmt->bindParam(":birthDate", $birthDate);
    $stmt->bindParam(":physics", $physics);
    $stmt->execute();
  }

  public function findByEmal(String $email)
  {
    $stmt = $this->conn->prepare('SELECT * FROM users WHERE email = :email');
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return sizeof($result) > 0 ? $result[0] : NULL;
  }

  public function search(String $queryString)
  {
    $stmt = $this->conn->prepare('SELECT * FROM users WHERE email LIKE :query_string or username LIKE :query_string or fullname LIKE :query_string');
    $queryString = '%' . $queryString . '%';
    $stmt->bindParam(":query_string", $queryString);
    $fetchAll = $stmt->execute();
    $fetchAll = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $fetchAll;
  }
}
