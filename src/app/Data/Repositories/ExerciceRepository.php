<?php

namespace App\Data\Repositories;

class ExerciceRepository extends Repository
{
  public function store(String $name, String $description)
  {
    $stmt = $this->conn->prepare('INSERT INTO exercises (name, description) VALUES (:name, :description)');
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":name", $name);
    $stmt->execute();
  }

  public function index()
  {
    $query = $this->conn->query('SELECT * FROM exercises INNER JOIN exercises_media AS em ON exercises.id = em.exercice_id INNER JOIN media ON em.media_id = media.id');
    $fetchAll = $query->fetchAll(\PDO::FETCH_ASSOC);
    return $fetchAll;
  }
}
