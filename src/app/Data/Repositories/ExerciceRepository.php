<?php

namespace App\Data\Repositories;

class ExerciceRepository extends Repository
{
  public function store(String $name, String $description)
  {
    $stmt = $this->conn->prepare('INSERT INTO exercices (name, description) VALUES (:name, :description)');
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":name", $name);
    $stmt->execute();
  }

  public function index()
  {
    $query = $this->conn->query('SELECT * FROM exercices');
    $fetchAll = $query->fetchAll(\PDO::FETCH_ASSOC);
    return $fetchAll;
  }
}
