<?php

namespace App\Data\Repositories;

use PDO;

class MediaRepository extends Repository
{
  public function index()
  {
    $query = $this->conn->query('SELECT * FROM media');
    $fetchAll = $query->fetchAll(PDO::FETCH_ASSOC);
    return $fetchAll;
  }

  public function store(
    String $name,
    String $file,
    String $type,
    String $subtype
  ) {
    $stmt = $this->conn->prepare('INSERT INTO media (name, file, type, subtype) VALUES (:name, :file, :type, :subtype)');
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":file", $file);
    $stmt->bindParam(":type", $type);
    $stmt->bindParam(":subtype", $subtype);
    $stmt->execute();
  }

  public function findById(int $id)
  {
    $stmt = $this->conn->prepare('SELECT * FROM media WHERE id = :id');
    $stmt->bindParam(":id", $id);
    $fetch = $stmt->execute();
    $fetch = $stmt->fetch();
    return $fetch;
  }
}
