<?php

namespace App\Repositories;

use PDO;

abstract class Repository
{
  public PDO $conn;

  function __construct(PDO $conn)
  {
    $this->conn = $conn;
  }
}
